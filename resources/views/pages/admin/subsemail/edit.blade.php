@extends('layouts.post')
@section('title', 'Edit Subscribe Email Content')

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
                                <a href="{{ url()->current() }}">Edit Subscribe Email Content</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Edit Subscribe Email Content</h5>
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
                            <form method="post" action="{{ route('subsemail.update', $subsemail->id)}} ">
                            @method('PUT')
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" readonly value="BERLANGGANAN EMAIL" name="title" placeholder="BERLANGGANAN EMAIL">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" id="elm1">{{ $subsemail->description }}</textarea>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="placeholder_form">Placeholder Form</label>
                                    <input type="text" class="form-control" value="{{ $subsemail->placeholder_form }}" name="placeholder_form" placeholder="Placeholder Form">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="button_name">Button Name</label>
                                    <input type="text" class="form-control"  value="{{ $subsemail->button_name }}" name="button_name" placeholder="Button Name">
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