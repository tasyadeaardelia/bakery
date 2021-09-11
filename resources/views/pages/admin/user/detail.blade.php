@extends('layouts.admin')
@section('title', 'Admin | Profil User')
    
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
                                <a href="{{ route('detailprofil') }}">Detail Profil</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Profil</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b 30">
                        <div class="card-body">

                            <div class="text-center card-box">
                                
                                    
                                        <img src="{{ asset('library/user/'. $account_data['profil'])}}" alt="{{ $account_data['profil']}}">
                                    
                                    
                                        <h4>{{ $account_data['name'] }}</h4>
                                        <p class="text-muted">{{ $account_data['username']}} <span>| </span><span><a href="#" class="text-pink">{{ $account_data['email'] }}</a></span></p>
                                    
                                    

                                    <a href="{{ route('editprofil', $account_data['id'])}}" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Edit Profil</a>
                                    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection