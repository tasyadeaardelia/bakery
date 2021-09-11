@extends('layouts.admin')
@section('title', 'Create PsFooter')

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
                                <a href="{{ route('psfooter.index') }}">PsFooter</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url()->current() }}">Create new PsFooter</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Create new psFooter</h5>
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
                            <form method="post" action="{{ route('psfooter.store')}} ">
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="title">Title</label>
                                    <select name="title" required class="form-control" id="">
                                        <option value="">Pilih Judul</option>
                                        <option value="METODE PEMBAYARAN">METODE PEMBAYARAN</option>
                                        <option value="JAM KERJA">JAM KERJA</option>
                                        <option value="SOSIAL MEDIA">SOSIAL MEDIA</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="content">Content</label>
                                    <select name="content" required class="form-control" id="">
                                        <option value="">Pilih Content</option>
                                        <option value="payments">Payments</option>
                                        <option value="worktime">Work Time</option>
                                        <option value="socialmedia">Connect Us</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="located">Located</label>
                                    <select name="located" required class="form-control" id="">
                                        <option value="">Pilih letak</option>
                                        <option value="left">Kiri</option>
                                        <option value="center">Tengah</option>
                                        <option value="right">Kanan</option>
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