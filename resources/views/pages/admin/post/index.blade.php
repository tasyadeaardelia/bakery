@extends('layouts.admin')
@section('title', 'Admin | Blog')
    
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
                                <a href="{{ route('post.index') }}">Posts</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Posts Table</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <a href="{{ route('post.create')}}" class="btn btn-primary btn-lg btn-block m-b-30">Create Post</a>  

                        <div class=" table-responsive">
                            <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Author Name</th>
                                        <th>PublishedAt</th>
                                        <th>Status</th>
                                        <th>CreatedAt</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($posts as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            <td>
                                                <img src="{{ asset('library/blog/'. $item->image)}}" alt="{{ $item->image }}"  class="rounded mr-2" style="width: 200px;" data-holder-rendered="true">            
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->publishedAt}}</td>
                                            <td>
                                                @if($item->active === 1)
                                                    Active
                                                @else
                                                    Draft or Inactive
                                                @endif
                                            </td>
                                            <td>{{ $item->created_at}}</td>
                                            <td>
                                                <a href="{{ route('post.edit',$item->id) }}" class="btn btn-outline-primary">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <form action="{{ route('post.destroy',$item->id) }}" method="post" class="d-inline">
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
                                            <td colspan="7" class="text-center">
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