@extends('layouts.admin')
@section('title', 'Admin | Banner')
    
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
                                <a href="{{ route('banner.index') }}">Banner</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Banners Table</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <a href="{{ route('banner.create')}}" class="btn btn-primary btn-lg btn-block m-b-30">Create Banner</a>  

                        <div class=" table-responsive">
                            <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>CreatedAt</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($banners as $banner)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('library/banner-offer/'. $banner->photo)}}" alt="{{ $banner->photo }}"  class="rounded mr-2" style="width: 200px;" data-holder-rendered="true">            
                                            </td>
                                            <td>{{ $banner->category }}</td>
                                            <td>{{ $banner->status }}</td>
                                            <td>{{ $banner->created_at }}</td>
                                            <td>
                                                <a href="{{ route('banner.edit',$banner->id) }}" class="btn btn-outline-primary">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <form action="{{ route('banner.destroy', $banner->id) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-outline-warning">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">
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
    </div>
@endsection