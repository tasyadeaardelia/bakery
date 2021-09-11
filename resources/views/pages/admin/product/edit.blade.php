@extends('layouts.post')
@section('title', 'Edit Product')

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="float-right page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('product.index') }}">Product</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url()->current() }}">Edit Product</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Edit product</h5>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="card m-b 30">
                        <div class="card-body">
                            <form method="post" enctype='multipart/form-data' action="{{ route('product.update', $product->id)}} ">
                            @method('PUT')
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="judul">Product Name</label>
                                    <input type="text" name="name" class="form-control border-0" placeholder="Product Name" id="title" required value="{{ $product->name }}">
                                    <hr class="my-0" style="background-color: #fd6e77; height:1px; border:0;">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="description">Description Product</label>
                                    <textarea name="description" id="elm1">{{ $product->description }}</textarea>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="product-image">Product Image</label>
                                    <br>
                                    <input type="file" name="image" accept="image/*">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Harga</label>
                                    <input id="demo2" type="text" value="{{ $product->price }}" name="demo2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-danger" type="reset" value="Reset">
                                    <button class="btn btn-primary" type="submit">Submit</button>   
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection