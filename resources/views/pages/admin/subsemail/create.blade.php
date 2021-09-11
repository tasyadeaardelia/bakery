@extends('layouts.post')
@section('title', 'Create content Subscribe Email')

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
                                <a href="{{ route('subsemail.index') }}">Subscribe Email Content</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('subsemail.create') }}">Create content Subscribe Email</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Create content subscribe email</h5>
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
                            <form method="post" enctype='multipart/form-data' action="{{ route('subsemail.store')}} ">
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" readonly value="Berlangganan Email" name="title" placeholder="Berlangganan Email">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" id="elm1" value="{{ old('elm1') }}"></textarea>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="placeholder_form">Placeholder Form</label>
                                    <input type="text" class="form-control" value="{{ old('placeholder_form')}}" name="placeholder_form" placeholder="Placeholder Form">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="button_name">Button Name</label>
                                    <input type="text" class="form-control"  value="{{ old('button_name')}}" name="button_name" placeholder="Button Name">
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