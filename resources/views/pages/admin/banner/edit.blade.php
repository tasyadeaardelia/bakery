@extends('layouts.admin')
@section('title', 'Edit Banner')

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
                                <a href="{{ route('banner.index') }}">Banner</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url()->current() }}">Edit Banner</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Edit banner</h5>
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
                            <form method="post" enctype='multipart/form-data' action="{{ route('banner.update', $banner->id)}} ">
                            @method('PUT')
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="photo">Banner Image</label>
                                    <br>
                                    <input type="file" name="photo" accept="image/*">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="category">Category</label>
                                    <select name="category" required class="form-control" id="">
                                        <option value="">{{ $banner->category }}</option>
                                        <option value="Cake">1. Cake</option>
                                        <option value="Cupcake">2. Cupcake</option>
                                        <option value="Lolipop">3. Lolipop</option>
                                        <option value="Tart">4. Tart</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="status">Status</label>
                                    <select name="status" required class="form-control" id="">
                                        <option value="">{{ $banner->status }}</option>
                                        <option value="active">1. Active</option>
                                        <option value="inactive">2. Inactive</option>
                                    </select>
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