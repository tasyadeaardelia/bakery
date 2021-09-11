@extends('layouts.post')
@section('title', 'Edit team')

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
                                <a href="{{ route('team.index') }}">team</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url()->current() }}">Edit team</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Edit team</h5>
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
                            <form method="post" enctype='multipart/form-data' action="{{ route('team.update', $team->id)}} ">
                            @method('PUT')
                            @csrf
                            <div class="form-group mb-4">
                                <label for="address">Team Name</label>
                                <input type="text" name="name" class="form-control border-0" placeholder="Partner Name" id="name" required value="{{ $team->name }}">
                                <hr class="my-0" style="background-color: #fd6e77; height:1px; border:0;">
                            </div>
                            <div class="form-group mb-4">
                                <label for="image">Image</label>
                                <br>
                                <input type="file" name="image" accept="image/*">
                            </div>
                            <div class="form-group mb-4">
                                <label for="position">Position</label>
                                <select name="position" required class="form-control" id="">
                                    <option value="">Pilih status untuk post ini</option>
                                    <option value="CEO - Founder">CEO - Founder</option>
                                    <option value="Chef">Chef</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="description">Short Description</label>
                                <textarea name="description" id="elm1">{{ $team->description }}</textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="fb">Facebook</label>
                                <input type="text" name="fb" class="form-control" placeholder="Link Facebook" value="{{ $team->fb }}">
                            </div>
                            <div class="form-group mb-4">
                                <label for="twitter">Twitter</label>
                                <input type="text" name="twitter" class="form-control" placeholder="Link Twitter" value="{{ $team->twitter }}">
                            </div>
                            <div class="form-group mb-4">
                                <label for="mail">Gmail</label>
                                <input type="text" name="mail" class="form-control" placeholder="Gmail" value="{{ $team->mail }}">
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