<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Logo;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        $logo = Logo::get();
        return view('pages.admin.product.index', [
            'products' => $products,
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
        return view('pages.admin.product.create', [
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
            'description' => 'required|max:600',
            'demo2' => 'required'
        ]);

        $name = $request->input('name');
        $imageFile = $request->file('image');
        $image = $imageFile->getClientOriginalName();
        $imageFile->move(\base_path() . "/public/library/product/", $image);
        $description = $request->input('description');
        $price = $request->input('demo2');

        $data = [
            'name' => $name,
            'image' => $image,
            'description' => $description,
            'price' => $price 
        ];

        $product = Product::create($data);

        if($product) {
            return redirect()->route('product.index')->with('sukses', 'Data berhasil ditambahkan');
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
        $product = Product::findOrFail($id);
        $logo = Logo::get();
        return view('pages.admin.product.edit', [
            'product' => $product,
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
            'image' => 'required|max:1024',
            'description' => 'required|max:600',
            'demo2' => 'required'
        ]);

        $name = $request->input('name');
        $description = $request->input('description');
        $imageFile = $request->file('image');
        $image = $imageFile->getClientOriginalName();
        $imageFile->move(\base_path() . "/public/library/product/", $image);
        $price = $request->input('demo2');

        $data = [
            'name' => $name,
            'image' => $image,
            'description' => $description,
            'price' => $price 
        ];

        $product = Product::where('id', $id)->update($data);

        if($product) {
            return redirect()->route('product.index')->with('sukses', 'Data berhasil di update');
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
        $product = Product::find($id);
        if(\File::exists(public_path('library/product/'.$product['image']))) {
            \File::delete(public_path('library/product/'.$product['image']));
            $product = Product::find($id)->delete();
        }
        
        return redirect()->route('product.index')->with('sukses', 'Data berhasil dihapus');
    }
}
