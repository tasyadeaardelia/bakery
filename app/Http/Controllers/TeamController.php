<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Logo;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::get();
        $logo = Logo::get();
        return view('pages.admin.team.index', [
            'teams' => $teams,
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
        return view('pages.admin.team.create', [
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
            'image' => 'required|max:1024',
            'position' => 'required',
            'description' => 'required|max:600',
            'fb' => 'required',
            'twitter' => 'required',
            'mail' => 'required',
        ]);

        $name = $request->input('name');
        $imageFile = $request->file('image');
        $image = $imageFile->getClientOriginalName();
        $position = $request->input('position');
        $description = $request->input('description');
        $fb = $request->input('fb');
        $twitter = $request->input('twitter');
        $mail =  $request->input('mail');

        $data = [
            'name' => $name,
            'image' => $image,
            'position' => $position,
            'description' => $description,
            'fb' => $fb,
            'twitter' => $twitter,
            'mail' => $mail,
        ];

        $team = Team::create($data);

        if($team) {
            $imageFile->move(\base_path() . "/public/library/team/", $image);
            return redirect()->route('team.index')->with('sukses', 'Data berhasil ditambahkan');
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
        $team = Team::findOrFail($id);
        return view('pages.admin.team.edit', [
            'logo' => $logo,
            'team' => $team,
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
            'image' => 'required|max:1024',
            'position' => 'required',
            'description' => 'required|max:600',
            'fb' => 'required',
            'twitter' => 'required',
            'mail' => 'required',
        ]);

        $name = $request->input('name');
        $imageFile = $request->file('image');
        $image = $imageFile->getClientOriginalName();
        $position = $request->input('position');
        $description = $request->input('description');
        $fb = $request->input('fb');
        $twitter = $request->input('twitter');
        $mail =  $request->input('mail');

    
        $data = [
            'name' => $name,
            'image' => $image,
            'position' => $position,
            'description' => $description,
            'fb' => $fb,
            'twitter' => $twitter,
            'mail' => $mail,
        ];

        $team = Team::where('id', $id)->update($data);

        if($team) {
            $imageFile->move(\base_path() . "/public/library/team/", $image);
            return redirect()->route('team.index')->with('sukses', 'Data berhasil di edit');
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
        $team = Team::find($id);
        if(\File::exists(public_path('library/team/'.$team['image']))) {
            \File::delete(public_path('library/team/'.$team['image']));
            $team->delete();
        }
        return redirect()->route('team.index')->with('sukses', 'Data berhasil di hapus');
    }
}
