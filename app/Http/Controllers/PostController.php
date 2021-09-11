<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Post_Tags;
use App\Models\Users;
use App\Http\Controller\AuthController;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $authors = Users::Join('posts', 'posts.authorId', '=', 'users.id')->get();
        $posts = Post::select('posts.id','posts.title', 'posts.slug', 'posts.image', 'users.name', 'posts.publishedAt','posts.active', 'posts.created_at')
        ->join('users', 'users.id', '=', 'posts.authorId')->get();
        // $posts = Post::get();
        $logo = Logo::get();

        return view('pages.admin.post.index', [
            'posts'=>$posts,
            'logo' => $logo,
        ]);   
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $authorId = $request->session()->get('account_data');
        $author = Users::where(['id' => $authorId->id])->first();

        $datetime = Carbon::now();
        $logo = Logo::get();

        return view('pages.admin.post.create', [
            'author' => $author,
            'datetime' => $datetime,
            'logo' => $logo,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'tags' => 'required',
            'authorId' => 'required',
        ]);

        $title = $request->input("title");
        $content = $request->input("content");
        $authorId = $request->session()->get('account_data');
        $author = Users::findOrFail($authorId->id);
        $imageFile = $request->file('image');
        $image = $imageFile->getClientOriginalName();
        $imageFile->move(\base_path() . "/public/library/blog/", $image);
        $publishedAt = $request->publishedAt;
        $active = $request->active;
        $slug = Str::slug($request->input("title"));

        $data = [
            'title'=>$title,
            'slug' => $slug,
            'image'=>$image,
            'content'=>$content,
            'publishedAt' => $publishedAt,
            'active' => $active,
            'authorId'=>$author->id,
        ];
        // return $data;
        $post = Post::create($data);

        $tags = explode(',', $request->input("tags"));
        foreach ($tags as $tag) {
            //cek apakah tag yang diinput sudah ada di dalam tabel tags pada database
            $itemTag = Tag::where('title', trim($tag))->first();
            //jika belum ada, maka buat tag baru diambil dari tag yang diinput di form
            if(!$itemTag) {
                $itemTag = Tag::create(['title' => trim($tag), 'slug' => Str::slug($tag)]);
            }
            //simpan ke table post_tags untuk post dan tag yang sudah dibuat
            $post_tag = Post_Tags::create(['postId' => $post->id, 'tagId'=>$itemTag->id]);
        }

        
        if($post && $post_tag) {
            return redirect()->route('post.index')->with('sukses', 'Data berhasil ditambahkan');
        }
        else {
            return redirect()->back()->with('gagal', 'Data tidak berhasil ditambahkan');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $postTags = Post_Tags::where('postId', $post->id)->get();
        $logo = Logo::get();
        
        return view('pages.admin.post.edit', [
            'post'  => $post,
            'logo' => $logo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'tags' => 'required',
            'authorId' => 'required',
        ]);

        $title = $request->input("title");
        $content = $request->input("content");
        $authorId = $request->session()->get('account_data');
        $author = Users::findOrFail($authorId->id);
        $imageFile = $request->file('image');
        $image = $imageFile->getClientOriginalName();
        $imageFile->move(\base_path() . "/public/library/post/", $image);
        $publishedAt = $request->publishedAt;
        $active = $request->active;
        $slug = Str::slug($request->input("title"));

        $data = [
            'title'=>$title,
            'slug' => $slug,
            'image'=>$image,
            'content'=>$content,
            'publishedAt' => $publishedAt,
            'active' => $active,
            'authorId'=>$author->id,
        ];
        // return $data;
        $post = Post::where('id', $id)->update($data);

        $tags = explode(',', $request->input("tags"));
        foreach ($tags as $tag) {
            //cek apakah tag yang diinput sudah ada di dalam tabel tags pada database
            $itemTag = Tag::where('title', trim($tag))->first();
            //jika belum ada, maka buat tag baru diambil dari tag yang diinput di form
            if(!$itemTag) {
                $itemTag = Tag::create(['title' => trim($tag), 'slug' => Str::slug($tag)]);
            }
        }
        
        if($post && $post_tag) {
            return redirect()->route('post.index')->with('sukses', 'Data berhasil diupdate');
        }
        else {
            return redirect()->back()->with('gagal', 'Data tidak berhasil diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post_tags = Post_Tags::where(['postId'=>$id]);
        if(\File::exists(public_path('library/blog/'.$post['image']))) {
            \File::delete(public_path('library/blog/'.$post['image']));
            $post = Post::find($id)->delete();
            $post_tags = Post_Tags::where(['postId'=>$id])->delete();
            if($post && $post_tags) {
                return redirect()->route('post.index')->with('sukses', 'Data berhasil dihapus');
            }
            else{
                return redirect()->back()->with('gagal', 'Data tidak berhasil dihapus');
            }
        }

        
    }
}
