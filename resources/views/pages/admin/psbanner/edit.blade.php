@extends('layouts.admin')
@section('title', 'Edit psbanner')

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
                                <a href="{{ route('psbanner.index') }}">Carousel Banner</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url()->current() }}">Edit Carousel banner</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Edit psbanner</h5>
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
                            <form method="post" enctype='multipart/form-data' action="{{ route('psbanner.update', $psbanner->id)}} ">
                            @method('PUT')
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="image">Image</label>
                                    <br>
                                    <input type="file" name="image" accept="image/*">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="caption">Caption</label>
                                    <textarea name="caption" id="" class="form-control">{{ $psbanner->caption }}</textarea>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="" class="form-control">{{ $psbanner->description }}</textarea>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="status">Status</label>
                                    <select name="status" required class="form-control" id="">
                                        <option value="">{{ $psbanner->status }}</option>
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