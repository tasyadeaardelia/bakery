<?php

namespace App\Http\Controllers;

use App\Models\PsSubscribe;
use App\Models\Logo;
use Illuminate\Http\Request;

class PsSubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pssubscribe = PsSubscribe::get();
        $logo = Logo::get();
        return view('pages.admin.pssubscribe.index', [
            'pssubscribe' => $pssubscribe,
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
        return view('pages.admin.pssubscribe.create', [
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
            'content' => 'required',
            'located' => 'required',
        ]);

        $content = $request->input('content');
        $located = $request->input('located');

        $data = [
            'content' => $content,
            'located' => $located,
        ];

        $create_data = PsSubscribe::create($data);

        if($create_data) {
            return redirect()->route('pssubscribe.index');
        }
        else {
            return redirect()->back();
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
        $pssubscribe = PsSubscribe::findOrFail($id);
        $logo = Logo::get();
        return view('pages.admin.pssubscribe.edit', [
            'pssubscribe' => $pssubscribe,
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
            'content' => 'required',
            'located' => 'required',
        ]);

        $content = $request->input('content');
        $located = $request->input('located');

        $data = [
            'content' => $content,
            'located' => $located,
        ];

        $update_data = PsSubscribe::where('id', $id)->update($data);

        if($update_data) {
            return redirect()->route('pssubscribe.index');
        }
        else {
            return redirect()->back();
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
        $pssubscribe = PsSubscribe::find($id)->delete();
        return view('pages.admin.pssubscribe.index');
    }
}
