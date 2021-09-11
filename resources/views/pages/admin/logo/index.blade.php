@extends('layouts.admin')
@section('title', 'Admin | logo')
    
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
                                <a href="{{ route('logo.index') }}">logo</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">logo Table</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            

                       
                            <table id="example" class="table table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Logo</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>CreatedAt</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($logo as $item)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('library/logo/'. $item->logo)}}" alt="{{ $item->logo }}" style="width: 20%;">            
                                            </td>
                                            <td>{{ $item->category }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->created_at}}</td>
                                            <td>
                                                <a href="{{ route('logo.edit',$item->id) }}" class="btn btn-outline-primary">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">
                                                Data masih kosong
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection