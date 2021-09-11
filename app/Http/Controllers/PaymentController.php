<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Logo;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::get();
        $logo = Logo::get();
        return view('pages.admin.payment.index', [
            'payments' => $payments,
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
        return view('pages.admin.payment.create', [
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
            'status' => 'required',
        ]);

        $name = $request->input('name');
        $logoFile = $request->file('logo');
        $logo = $logoFile->getClientOriginalName();
        $status = $request->input('status');

        $data = [
            'name' => $name,
            'logo' => $logo,
            'status' => $status,
        ];

    
        $payment = Payment::create($data);

        if($payment) {
            $logoFile->move(\base_path() . "/public/library/payment/", $logo);
            return redirect()->route('payment.index')->with('sukses', 'Data berhasil ditambahkan');
        }
        else {
            return redirect()->back()->with('gagal', 'Maaf, data tidak berhasil ditambahkan');
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
        $payments = Payment::findOrFail($id);
        $logo = Logo::get();
        return view('pages.admin.payment.edit', [
            'payment'  => $payments,
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
            'status' => 'required',
        ]);

        $name = $request->input('name');
        $logoFile = $request->file('logo');
        $logo = $logoFile->getClientOriginalName();
        $status = $request->input('status');


        $data = [
            'name' => $name,
            'logo' => $logo,
            'status' => $status,
        ];

        $payment = Payment::where('id', $id)->update($data);

        if($partner) {
            $logoFile->move(\base_path() . "/public/library/payment/", $logo);
            return redirect()->route('payment.index')->with('sukses', 'Data berhasil di edit');
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
        $payment = Payment::find($id);
        if(\File::exists(public_path('library/payment/'.$payment['logo']))) {
            \File::delete(public_path('library/payment/'.$payment['logo']));
            $payment->delete();
        }
        return redirect()->route('payment.index')->with('sukses', 'Data berhasil di hapus');
    }
}
