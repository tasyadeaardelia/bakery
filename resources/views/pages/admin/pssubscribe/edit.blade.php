@extends('layouts.admin')
@section('title', 'Edit PsSubscribe')

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
                                <a href="{{ route('pssubscribe.index') }}">PsSubscribe</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url()->current() }}">Edit PsSubscribe</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Edit PsSubscribe</h5>
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
                            <form method="post" enctype='multipart/form-data' action="{{ route('pssubscribe.update', $pssubscribe->id)}} ">
                            @method('PUT')
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="content">Content</label>
                                    <select name="content" required class="form-control" id="">
                                        <option value="">Pilih content table</option>
                                        <option value="about">About</option>
                                        <option value="">Subs_Email</option>
                                        <option value="logo">Logo</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="located">Located</label>
                                    <select name="located" required class="form-control" id="">
                                        <option value="">Pilih Posisi</option>
                                        <option value="left">Kiri</option>
                                        <option value="right">Kanan</option>
                                        <option value="center">Tengah</option>
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