@extends('layouts.admin')
@section('title', 'Admin | Social Media')
    
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
                                <a href="{{ route('socialmedia.index') }}">Social Media</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Social Media Table</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Facebook</th>
                                        <th>Google</th>
                                        <th>Twitter</th>
                                        <th>Instagram</th>
                                        <th>CreatedAt</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($socialmedia as $item)
                                        <tr>
                                            <td>{{ $item->fb }}</td>
                                            <td>{{ $item->google }}</td>
                                            <td>{{ $item->twitter }}</td>
                                            <td>{!! $item->instagram !!}</td>
                                            <td>{{ $item->created_at}}</td>
                                            <td>
                                                <a href="{{ route('socialmedia.edit',$item->id) }}" class="btn btn-outline-primary">
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
@endsection