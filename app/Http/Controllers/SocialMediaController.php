<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMedia;
use App\Models\Logo;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socialmedia = SocialMedia::get();
        $logo = Logo::get();
        return view('pages.admin.socialmedia.index', [
            'socialmedia' => $socialmedia,
            'logo' => $logo,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
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
        $socialmedia = SocialMedia::findOrFail($id);
        $logo = Logo::get();
        return view('pages.admin.socialmedia.edit', [
            'socialmedia' => $socialmedia,
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
            'fb' => 'required',
            'google' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
        ]);

        $fb = $request->input('fb');
        $twitter = $request->input('twitter');
        $google =  $request->input('google');
        $instagram = $request->input('instagram');

        $data = [
            'fb' => $fb,
            'twitter' => $twitter,
            'google' => $google,
            'instagram' => $instagram,
        ];

        $socialmedia = SocialMedia::where('id', $id)->update($data);

        if($socialmedia) {
            return redirect()->route('socialmedia.index')->with('sukses', 'Data berhasil ditambahkan');
        }
        else {
            return redirect()->back()->with('gagal', 'Data tidak berhasil ditambahkan');
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
        $socialmedia = SocialMedia::find($id)->delete();
        return redirect()->route('socialmedia.index')->with('gagal', 'Data berhasil dihapus');
    }
}
