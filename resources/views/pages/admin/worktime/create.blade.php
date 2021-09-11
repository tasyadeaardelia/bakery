@extends('layouts.admin')
@section('title', 'Create worktime')

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
                                <a href="{{ route('worktime.index') }}">worktime</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('worktime.create') }}">Create new worktime</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Create new worktime</h5>
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
                            <form method="post" enctype='multipart/form-data' action="{{ route('worktime.store')}} ">
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="open">Buka</label>
                                    <select name="open" required class="form-control" id="">
                                        <option value="">Pilih Hari </option>
                                        <option value="senin">Senin</option>
                                        <option value="selasa">Selasa</option>
                                        <option value="rabu">Rabu</option>
                                        <option value="kamis">Kamis</option>
                                        <option value="jumat">Jumat</option>
                                        <option value="sabtu">Sabtu</option>
                                        <option value="minggu">Minggu</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="timeopen">Time Open</label>
                                    <input class="form-control" type="time" id="example-time-input" name="timeopen">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="enddate">Tutup</label>
                                    <select name="close" required class="form-control" id="">
                                        <option value="">Pilih Hari </option>
                                        <option value="senin">Senin</option>
                                        <option value="selasa">Selasa</option>
                                        <option value="rabu">Rabu</option>
                                        <option value="kamis">Kamis</option>
                                        <option value="jumat">Jumat</option>
                                        <option value="sabtu">Sabtu</option>
                                        <option value="minggu">Minggu</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="timeclose">Time Close</label>
                                    <input class="form-control" type="time" id="example-time-input" name="timeclose">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="status">Status</label>
                                    <select name="status"  required class="form-control" id="">
                                        <option value="">Pilih status </option>
                                        <option value="active">Aktif</option>
                                        <option value="inactive">Tidak Aktif</option>
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