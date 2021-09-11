@extends('layouts.admin')
@section('title', 'Create new Partner')

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
                                <a href="{{ route('partner.index') }}">Partner</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('partner.create') }}">Create new Partner</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Create new Partner</h5>
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
                            <form method="post" enctype='multipart/form-data' action="{{ route('partner.store')}} ">
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="address">Partner Name</label>
                                    <input type="text" name="name" class="form-control border-0" placeholder="Partner Name" id="name" required value="{{ old('name') }}">
                                    <hr class="my-0" style="background-color: #fd6e77; height:1px; border:0;">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="logo">Logo</label>
                                    <br>
                                    <input type="file" name="logo" accept="image/*">
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