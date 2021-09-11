<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PsSectionHero;
use App\Models\Logo;

class PsSectionHeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PsSectionHero::get();
        $logo = Logo::get();
        return view('pages.admin.pssectionhero.index', [
            'data' => $data,
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
        return view('pages.admin.pssectionhero.create', [
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
            'image' => 'required|max:1024'
        ]);

        $imageFile = $request->file('image');
        $image = $imageFile->getClientOriginalName();

        $data = [
            'image' => $image
        ];

        $pshero = PsSectionHero::create($data);

        if($pshero) {
            $imageFile->move(\base_path() . "/public/library/hero/", $image);
            return redirect()->route('pssectionhero.index')->with('sukses', 'Data berhasil ditambahkan');
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
        $pshero = PsSectionHero::findOrFail($id);
        $logo = Logo::get();
        return view('pages.admin.pssectionhero.edit', [
            'pshero' => $pshero,
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
            'image' => 'required|max:1024'
        ]);

        $imageFile = $request->file('image');
        $image = $imageFile->getClientOriginalName();

        $data = [
            'image' => $image
        ];

        $pshero = PsSectionHero::where('id', $id)->update($data);

        if($pshero) {
            $imageFile->move(\base_path() . "/public/library/hero/", $image);
            return redirect()->route('pssectionhero.index')->with('sukses', 'Data berhasil di update');
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
        $pshero = PsSectionHero::find($id);
        if(\File::exists(public_path('library/hero/'.$pshero['photo']))) {
            \File::delete(public_path('library/hero/'.$pshero['photo']));
            $pshero->delete();
        }
        return redirect()->route('pssectionhero.index')->with('sukses', 'Data berhasil dihapus');
    }
}
