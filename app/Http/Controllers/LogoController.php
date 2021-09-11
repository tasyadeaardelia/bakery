<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::get();
        return view('pages.admin.logo.index', [
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
        return view('pages.admin.logo.create', [
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
            'logo' => 'required|max:1024',
            'category' => 'required',
            'status' => 'required',
        ]);

        $logoFile = $request->file('logo');
        $logo = $logoFile->getClientOriginalName();
        $logoFile->move(\base_path() . "/public/library/logo/", $logo);

        $category = $request->input('category');
        $status = $request->input('status');
        $cek = Logo::where('status', 'active')->get();

        $data = [
                    'logo' => $logo,
                    'category' => $category,
                    'status' => $status,
                ];

        if($status === 'active') {
            if(count($cek) >= 4) {
                return redirect()->back()->with('gagal', 'Maksimal status aktif untuk logo hanya satu');
            }
            else {
                $create_data = Logo::create($data);
        
                if($create_data) {
                    return redirect()->route('logo.index')->with('sukses', 'Data berhasil ditambahkan');
                }
                else {
                    return redirect()->back()->with('gagal', 'Data tidak berhasil ditambahkan');
                }
            }
        }
        else {
            $create_data = Logo::create($data);
        
                if($create_data) {
                    return redirect()->route('logo.index')->with('sukses', 'Data berhasil ditambahkan');
                }
                else {
                    return redirect()->back()->with('gagal', 'Data tidak berhasil ditambahkan');
                }
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
        $logo = Logo::findOrFail($id);
        return view('pages.admin.logo.edit', [
            'logo' => $logo
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
            'logo' => 'required|max:1024',
            'category' => 'required',
            'status' => 'required',
        ]);

        $logoFile = $request->file('logo');
        $logo = $logoFile->getClientOriginalName();
        $logoFile->move(\base_path() . "/public/library/logo/", $logo);

        $category = $request->input('category');
        $status = $request->input('status');

        $data = [
            'logo' => $logo,
            'category' => $category,
            'status' => $status,
        ];

        $update_data = Logo::where('id', $id)->update($data);

        if($update_data) {
            return redirect()->route('logo.index')->with('sukses', 'Data berhasil di edit');
        }
        else {
            return redirect()->back()->with('gagal', 'Data tidak berhasil di edit');
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
        $logo = Logo::find($id)->delete();
        return redirect()->back()->with('sukses', 'Data berhasil dihapus');
    }
}
