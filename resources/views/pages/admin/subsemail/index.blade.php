@extends('layouts.admin')
@section('title', 'Admin | Subsribe Email Content')
    
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
                                <a href="{{ route('subsemail.index') }}">Subsribe Email Content</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Subscribe Email Table</h5>
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
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Placeholder Form</th>
                                            <th>Button Name</th>
                                            <th>CreatedAt</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($subsemail as $item)
                                            <tr>
                                                <td>{{ $item->title }}</td>
                                                <td>{!! $item->description !!}</td>
                                                <td>{{ $item->placeholder_form }}</td>
                                                <td>{{ $item->button_name }}</td>
                                                <td>{{ $item->created_at}}</td>
                                                <td>
                                                    <a href="{{ route('subsemail.edit',$item->id) }}" class="btn btn-outline-primary">
                                                        <i class="fa fa-pencil-square-o"></i>
                                                    </a>
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