<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PsBanner;
use App\Models\Logo;

class PsBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psbanner = PsBanner::get();
        $logo = Logo::get();
        return view('pages.admin.psbanner.index', [
            'psbanner' => $psbanner,
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
        return view('pages.admin.psbanner.create', [
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
            'image' => 'required|max:1024',
            'caption' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $imageFile = $request->file('image');
        $image = $imageFile->getClientOriginalName();
        $caption = $request->input('caption');
        $description = $request->input('description');
        $status = $request->input('status');

        $cek = PsBanner::where('status', 'active')->get();
    
        $data = [
            'image' => $image,
            'caption' => $caption,
            'description' => $description,
            'status' => $status,
        ];

        $psbanner = PsBanner::create($data);

        if($psbanner) {
            $imageFile->move(\base_path() . "/public/library/psbanner/", $image);
            return redirect()->route('psbanner.index')->with('sukses', 'Data berhasil ditambahkan');
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
        $logo = Logo::get();
        $psbanner = PsBanner::findOrFail($id);
        return view('pages.admin.psbanner.edit', [
            'psbanner' => $psbanner,
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
        $imageFile = $request->file('image');
        $image = $imageFile->getClientOriginalName();
        $caption = $request->input('caption');
        $description = $request->input('description');
        $status = $request->inpu('status');
    
        $data = [
            'image' => $image,
            'caption' => $caption,
            'description' => $description,
            'status' => $status,
        ];

        $psbanner = PsBanner::where('id', $id)->update($data);

        if($psbanner) {
            $imageFile->move(\base_path() . "/public/library/psbanner/", $image);
            return redirect()->route('psbanner.index')->with('sukses', 'Data berhasil diupdate');
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
        $psbanner = PsBanner::find($id);
        if(\File::exists(public_path('library/psbanner/'.$psbanner['image']))) {
            \File::delete(public_path('library/psbanner/'.$psbanner['image']));
            $psbanner->delete();
        }
        return redirect()->route('psbanner.index')->with('sukses', 'Data berhasil dihapus');
    }
}
