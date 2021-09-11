<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkTime;
use App\Models\Logo;

class WorkTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $worktime = WorkTime::get();
        $logo = Logo::get();
        return view('pages.admin.worktime.index', [
            'worktime' => $worktime,
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
        return view('pages.admin.worktime.create', [
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
            'open' => 'required',
            'timeopen' => 'required',
            'close' => 'required',
            'timeclose' => 'required',
            'status' => 'required',
        ]);

        $open = $request->input('open');
        $timeopen = $request->input('timeopen');
        $close = $request->input('close');
        $timeclose = $request->input('timeclose');
        $status = $request->input('status');

        $cek = WorkTime::where('status', 'active')->get();

        $data = [
            'open' => $open,
            'timeopen' => $timeopen,
            'close' => $close,
            'timeclose' => $timeclose,
            'status' => $status,
        ];

        if($status === 'active') {
            if(count($cek) >= 2) {
                return redirect()->back()->with('gagal', 'Maksimal status aktif untuk jam kerja adalah 2');
            }
            else {
                $worktime = WorkTime::create($data);
                if($worktime) {
                    return redirect()->route('worktime.index')->with('sukses', 'Data berhasil ditambahkan');
                }
                else {
                    return redirect()->back()->with('gagal', 'Data tidak berhasil ditambahkan');
                }
            }
        }
        else {
            $worktime = WorkTime::create($data);

            if($worktime) {
                return redirect()->route('worktime.index')->with('sukses', 'Data berhasil ditambahkan');
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
        $worktime = WorkTime::findOrFail($id);
        $logo = Logo::get();
        
        return view('pages.admin.worktime.edit', [
            'worktime'  => $worktime,
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
            'open' => 'required',
            'timeopen' => 'required',
            'close' => 'required',
            'timeclose' => 'required',
            'status' => 'required',
        ]);

        $open = $request->input('open');
        $timeopen = $request->input('timeopen');
        $close = $request->input('close');
        $timeclose = $request->input('timeclose');
        $status = $request->input('status');

        $cek = WorkTime::where('status', 'active')->get();

        $data = [
            'open' => $open,
            'timeopen' => $timeopen,
            'close' => $close,
            'timeclose' => $timeclose,
            'status' => $status,
        ];

        if($status === 'active') {
            if(count($cek) >= 2) {
                return redirect()->back();
            }
            else {
                $worktime = WorkTime::where('id', $id)->update($data);
                if($worktime) {
                    return redirect()->route('worktime.index')->with('sukses', 'Data berhasil di edit');
                }
                else {
                    return redirect()->back()->with('gagal', 'Data tidak berhasil di edit');
                }
            }
        }
        else {
            $worktime = WorkTime::where('id', $id)->update($data);

            if($worktime) {
                return redirect()->route('worktime.index')->with('sukses', 'Data berhasil di edit');
            }
            else {
                return redirect()->back()->with('gagal', 'Data tidak berhasil di edit');
            }
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
        $worktime = WorkTime::find($id)->delete();
        return redirect()->route('worktime.index')->with('sukses', 'Data berhasil di hapus');
    }
}
