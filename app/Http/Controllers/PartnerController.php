<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Models\Logo;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::get();
        $logo = Logo::get();
        return view('pages.admin.partner.index', [
            'partners' => $partners,
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
        return view('pages.admin.partner.create', [
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
            'name' => 'required',
            'logo' => 'required|max:1024',
        ]);

        $name = $request->input('name');
        $logoFile = $request->file('logo');
        $logo = $logoFile->getClientOriginalName();

        $data = [
            'name' => $name,
            'logo' => $logo
        ];

        $partner = Partner::create($data);

        if($partner) {
            $logoFile->move(\base_path() . "/public/library/partner/", $logo);
            return redirect()->route('partner.index')->with('sukses', 'Data berhasil ditambahkan');
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
        $partner = Partner::findOrFail($id);
        $logo = Logo::get();
        
        return view('pages.admin.partner.edit', [
            'partner'  => $partner,
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
            'name' => 'required',
            'logo' => 'required|max:1024',
        ]);

        $name = $request->input('name');
        $logoFile = $request->file('logo');
        $logo = $logoFile->getClientOriginalName();
        

        $data = [
            'name' => $name,
            'logo' => $logo
        ];

        $partner = Partner::where('id', $id)->update($data);

        if($partner) {
            $logoFile->move(\base_path() . "/public/library/partner/", $logo);
            return redirect()->route('partner.index')->with('sukses', 'Data berhasil diupdate');
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
        $partner = Partner::find($id);
        if(\File::exists(public_path('library/partner/'.$partner['logo']))) {
            \File::delete(public_path('library/partner/'.$partner['logo']));
            $partner->delete();
        }
        return redirect()->route('partner.index')->with('sukses', 'Data berhasil dihapus');
    }
}
