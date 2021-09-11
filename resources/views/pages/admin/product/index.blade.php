@extends('layouts.admin')
@section('title', 'Admin | Product')
    
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
                        </ol>
                    </div>
                    <h5 class="page-title">Products Table</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <a href="{{ route('product.create')}}" class="btn btn-primary btn-lg btn-block m-b-30">Create Product</a>  

                        
                            <table id="example" class="table table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>CreatedAt</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($products as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td>
                                                <img src="{{ asset('library/product/'. $product->image)}}" alt="{{ $product->image }}"  class="rounded mr-2" style="width: 80%;" data-holder-rendered="true">            
                                            </td>
                                            <td>{!! $product->description !!}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->created_at}}</td>
                                            <td>
                                                <a href="{{ route('product.edit',$product->id) }}" class="btn btn-outline-primary">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <form action="{{ route('product.destroy',$product->id) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-outline-warning">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">
                                                Data masih kosong
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                       
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection