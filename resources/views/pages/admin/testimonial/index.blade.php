@extends('layouts.admin')
@section('title', 'Admin | Testimonial')
    
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
                        </ol>
                    </div>
                    <h5 class="page-title">Testimonials Table</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                        <div class=" table-responsive">
                            <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Name</th>
                                        <th>Profil Photo</th>
                                        <th>Job</th>
                                        <th>Description</th>
                                        <th>CreatedAt</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($testimonials as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <img src="{{ asset('library/testimonial/'. $item->profil)}}" alt="{{ $item->image }}"  class="rounded mr-2" style="width: 200px;" data-holder-rendered="true">            
                                            </td>
                                            <td>{{ $item->job }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->created_at}}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col col-xl-6 mb-2">
                                                        <a href="{{ route('testimonial.edit',$item->id) }}" class="btn btn-outline-primary">
                                                            <i class="fa fa-pencil-square-o"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col col-xl-6">
                                                        <form action="{{ route('testimonial.destroy',$item->id) }}" method="testimonial" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-outline-warning">
                                                                <i class="fa fa-trash-o"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
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