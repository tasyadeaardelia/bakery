<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PsFooter;
use App\Models\Logo;

class PsFooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psfooter = PsFooter::get();
        $logo = Logo::get();
        return view('pages.admin.psfooter.index', [
            'psfooter' => $psfooter,
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
        return view('pages.admin.psfooter.create', [
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
            'located' => 'required',
        ]);

        $title = $request->input('title');
        $content = $request->input('content');
        $located = $request->input('located');

        $data = [
            'title' => $title,
            'content' => $content,
            'located' => $located,
        ];

        $create_data = PsFooter::create($data);

        if($create_data) {
            return redirect()->route('psfooter.index')->with('sukses', 'Data berhasil ditambahkan');
        }
        else {
            return redirect()->back()->with('gagal', 'Data berhasil ditambahkan');
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
        $psfooter = PsFooter::findOrFail($id);
        $logo = Logo::get();
        return view('pages.admin.psfooter.edit', [
            'psfooter' => $psfooter,
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
            'located' => 'required',
        ]);

        $title = $request->input('title');
        $content = $request->input('content');
        $located = $request->input('located');

        $data = [
            'title' => $title,
            'content' => $content,
            'located' => $located,
        ];

        $update_data = PsFooter::where('id', $id)->update($data);

        if($update_data) {
            return redirect()->route('psfooter.index')->with('sukses', 'Data berhasil diupdate');
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
        $psfooter = PsFooter::find($id)->delete();
        return view('pages.admin.psfooter.index')->with('sukses', 'Data berhasil di hapus');
    }
}
