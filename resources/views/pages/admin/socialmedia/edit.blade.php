@extends('layouts.post')
@section('title', 'Edit Link Social media')

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
                                <a href="{{ route('socialmedia.index') }}">Social Media</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url()->current() }}">Edit Social media</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Edit Social Media</h5>
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
                            <form method="post" enctype='multipart/form-data' action="{{ route('socialmedia.update', $socialmedia->id)}} ">
                            @method('PUT')
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="fb">Facebook</label>
                                    <input type="text" name="fb" class="form-control border-0" placeholder="Facebook" id="fb" required value="{{ $socialmedia->fb }}">
                                    <hr class="my-0" style="background-color: #fd6e77; height:1px; border:0;">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="google">Gmail</label>
                                    <input type="text" name="google" class="form-control border-0" placeholder="Gmail" id="google" required value="{{ $socialmedia->google }}">
                                    <hr class="my-0" style="background-color: #fd6e77; height:1px; border:0;">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="fb">Twitter</label>
                                    <input type="text" name="twitter" class="form-control border-0" placeholder="Twitter" id="twitter" required value="{{ $socialmedia->twiiter }}">
                                    <hr class="my-0" style="background-color: #fd6e77; height:1px; border:0;">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" name="instagram" class="form-control border-0" placeholder="Instagram" id="instagram" required value="{{ $socialmedia->instagram }}">
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