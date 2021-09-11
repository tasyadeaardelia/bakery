@extends('layouts.post')
@section('title', 'Edit Profil')

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
                                <a href="{{ route('detailprofil') }}">Profil</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url()->current() }}">Edit Profil</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Edit Profil</h5>
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
                            <form method="post" enctype='multipart/form-data' action="{{ route('updateprofil', $user->id)}}">
                            
                            @csrf
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input class="form-control" name="name" type="text" placeholder="Full Name" value="{{ $user->name }}">
                                    
                                </div>

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input class="form-control" name="username" type="text"  placeholder="Username" value="{{ $user->username}}">
                                    
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" name="email" type="email" placeholder="Email" value="{{ $user->email}}">
                                </div>

                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label for="profil">Profil Photo</label>
                                    <br>
                                    <input type="file" name="profil" accept="image/*">
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