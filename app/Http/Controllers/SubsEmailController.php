<?php

namespace App\Http\Controllers;

use App\Models\SubsEmail;
use Illuminate\Http\Request;
use App\Models\Logo;

class SubsEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subsemail = SubsEmail::get();
        $logo = Logo::get();
        return view('pages.admin.subsemail.index', [
            'subsemail' => $subsemail,
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
        return view('pages.admin.subsemail.create', [
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
            'title' => 'required|max:225',
            'description' => 'required|max:225',
            'placeholder_form' => 'required|max:225',
            'button_name' => 'required|max:225',
        ]);

        $title = $request->input('title');
        $description = $request->input('description');
        $placeholder_form = $request->input('placeholder_form');
        $button_name = $request->input('button_name');

        $data = [
            'title' => $title,
            'description' => $description,
            'placeholder_form' => $placeholder_form,
            'button_name' => $button_name,
        ];

        $create_data = SubsEmail::create($data);

        if($create_data){
            return redirect()->route('subsemail.index')->with('sukses', 'Data berhasil ditambahkan');
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
        $subsemail = SubsEmail::findOrFail($id);
        $logo = Logo::get();

        return view('pages.admin.subsemail.edit', [
            'subsemail' => $subsemail,
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
            'title' => 'required|max:225',
            'description' => 'required|max:225',
            'placeholder_form' => 'required|max:225',
            'button_name' => 'required|max:225',
        ]);

        $title = $request->input('title');
        $description = $request->input('description');
        $placeholder_form = $request->input('placeholder_form');
        $button_name = $request->input('button_name');

        $data = [
            'title' => $title,
            'description' => $description,
            'placeholder_form' => $placeholder_form,
            'button_name' => $button_name,
        ];

        $create_data = SubsEmail::where('id', $id)->update($data);

        if($create_data){
            return redirect()->route('subsemail.index')->with('sukses', 'Data berhasil di edit');
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
       $subsemail = SubsEmail::find($id)->delete();
       return redirect()->route('subsemail.index')->with('sukses', 'Data berhasil di hapus');
    }
}
