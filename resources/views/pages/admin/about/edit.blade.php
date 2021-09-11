@extends('layouts.post')
@section('title', 'Edit Post')

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
                                <a href="{{ route('about.index') }}">About</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url()->current() }}">Edit About</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Edit about</h5>
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
                            <form method="post" enctype='multipart/form-data' action="{{ route('about.update', $about->id)}} ">
                            @method('PUT')
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" readonly value="TENTANG KAMI" name="title" placeholder="TENTANG KAMI">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" id="elm1" >{{ $about->description }}</textarea>
                                </div>  
                                <div class="form-group mb-4">
                                    <label for="address">Alamat</label>
                                    <input type="text" name="address" class="form-control border-0" placeholder="alamat" id="address" required value="{{ $about->address }}">
                                    <hr class="my-0" style="background-color: #fd6e77; height:1px; border:0;">
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