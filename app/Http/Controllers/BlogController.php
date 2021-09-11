<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Post_Tags;
use App\Models\About;
use App\Models\Payment;
use App\Models\WorkTime;
use App\Models\SocialMedia;
use App\Models\PsSectionHero;
use App\Models\PsSubscribe;
use App\Models\SubsEmail;
use App\Models\Logo;
use App\Models\PsFooter;
use App\Models\Product;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::where('active', 1)->get();
        $about = About::get();
        $payments = Payment::where('status', 'active')->get();
        $worktime = WorkTime::where('status', 'active')->get();
        $socialmedia = SocialMedia::get();
        $pssectionhero = PsSectionHero::limit(1)->get();
        $pssubscribes = PsSubscribe::get();
        $subsemail = SubsEmail::get();
        $psfooter = PsFooter::get();
        $logo = Logo::get();
        $products = Product::get();

        foreach($posts as $item) {
            $tags = Post_Tags::join('posts', 'posts.id', '=', 'post_tags.postId')
            ->join('tags', 'tags.id', '=', 'post_tags.tagId')
            ->where('post_tags.postId', '=', $item->id)
            ->get('tags.title')->toArray();
        }
        

        if($posts){
            return view('pages.app.blog',
            [
                'posts' => $posts,
                'tags' => $tags,
                'about' => $about,
                'payments' => $payments,
                'worktime' => $worktime,
                'socialmedia' => $socialmedia,
                'pssectionhero' => $pssectionhero,
                'pssubscribes' => $pssubscribes,
                'subsemail' => $subsemail,
                'psfooter' => $psfooter,
                'logo' => $logo,
                'products' => $products,
            ]);
        }
        else {
            return view('pages.app.404');
        }
    }

    public function detail($slug) {
        $data = Post::where('slug', $slug)->get();
        $about = About::get();
        $payments = Payment::where('status', 'active')->get();
        $worktime = WorkTime::where('status', 'active')->get();
        $socialmedia = SocialMedia::get();
        $pssectionhero = PsSectionHero::limit(1)->get();
        $pssubscribes = PsSubscribe::get();
        $subsemail = SubsEmail::get();
        $psfooter = PsFooter::get();
        $logo = Logo::get();
        $products = Product::get();

        
        
        foreach($data as $item) {
            $posts = Post::join('users', 'users.id', '=', 'posts.authorId')->where('posts.id', '=', $item->id)->get();
            $tags = Post_Tags::join('posts', 'posts.id', '=', 'post_tags.postId')
                ->join('tags', 'tags.id', '=', 'post_tags.tagId')
                ->where('post_tags.postId', '=', $item->id)
                ->where('posts.slug', '=', $slug)
                ->get('tags.title')->toArray();
        }
        // $author = Users::where('id', $data->authorId)->first()->get('id');
        return view('pages.app.detail-blog',[
            'data' => $data,
            'tags' => $tags,
            'about' => $about,
            'payments' => $payments,
            'worktime' => $worktime,
            'socialmedia' => $socialmedia,
            'pssectionhero' => $pssectionhero,
            'pssubscribes' => $pssubscribes,
            'subsemail' => $subsemail,
            'psfooter' => $psfooter,
            'logo' => $logo,
            'posts' => $posts,
            'products' => $products,
            // 'author' => $author
        ]);
        // return view('pages.app.detail-blog');
        
    }

}
