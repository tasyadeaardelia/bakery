<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Logo;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::get();
        $logo = Logo::get();
        return view('pages.admin.banner.index', [
            'banners' => $banners,
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
        $logo = Logo::get();
        return view('pages.admin.banner.create', [
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
            'photo' => 'required|max:1024',
            'category' => 'required',
            'status' => 'required',
        ]);

        $photoFile = $request->file('photo');
        $photo = $photoFile->getClientOriginalName();
        $category = $request->input('category');
        $status = $request->input('status');

        //cek apakah dalam db status active hanya boleh 4 untuk banner
        $bannerStatus = Banner::where('status', 'active')->get();

        $data = [
            'photo' => $photo,
            'category' => $category,
            'status' => $status,
        ];

        if(count($bannerStatus) < 4) {
            $banner = Banner::create($data);
            if($banner) {
                $photoFile->move(\base_path() . "/public/library/banner-offer/", $photo);
                return redirect()->route('banner.index')->with('sukses', 'Data berhasil ditambahkan');
            }
            else {
                return redirect()->back()->with('gagal', 'Maaf banner yang aktif maksimal 4');
            }
        }
        else {
            return redirect()->back()->with('gagal', 'Maaf banner yang aktif maksimal 4');
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
        $banner = Banner::findOrFail($id);
        $logo = Logo::get();
        return view('pages.admin.banner.edit', [
            'banner' => $banner,
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
            'photo' => 'required|max:1024',
            'category' => 'required',
            'status' => 'required',
        ]);

        $photoFile = $request->file('photo');
        $photo = $photoFile->getClientOriginalName();
        $category = $request->input('category');
        $status = $request->input('status');

        $data = [
            'photo' => $photo,
            'category' => $category,
            'status' => $status,
        ];

        $banner = Banner::update($data);

        if($banner) {
            $photoFile->move(\base_path() . "/public/library/banner-offer/", $photo);
            return redirect()->route('banner.index')->with('sukses', 'Data berhasil di update');
        }
        else {
            return redirect()->back()->with('gagal', 'Data tidak berhasil di update');
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
        $banner = Banner::find($id);
        if(\File::exists(public_path('library/banner-offer/'.$banner['photo']))) {
            \File::delete(public_path('library/banner-offer/'.$banner['photo']));
            $banner = Banner::find($id)->delete();
        }
        return redirect()->route('banner.index')->with('sukses', 'Data berhasil di hapus');
    }
}
