@extends('layouts.admin')
@section('title', 'Admin | Team')
    
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
                                <a href="{{ route('team.index') }}">Team</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Team Table</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <a href="{{ route('team.create')}}" class="btn btn-primary btn-lg btn-block m-b-30">Create new Team</a>  

                        <div class=" table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Position</th>
                                        <th>Description</th>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>Email</th>
                                        <th>CreatedAt</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($teams as $team)
                                        <tr>
                                            <td>{{ $team->name }}</td>
                                            <td>
                                                <img src="{{ asset('library/team/'. $team->image)}}" alt="{{ $team->image }}" height="120px">            
                                            </td>
                                            <td>{{ $team->position }}</td>
                                            <td>{!! $team->description !!}</td>
                                            <td>{{ $team->fb }}</td>
                                            <td>{{ $team->twitter }}</td>
                                            <td>{{ $team->mail }}</td>
                                            <td>{{ $team->created_at}}</td>
                                            <td>
                                                <a href="{{ route('team.edit',$team->id) }}" class="btn btn-outline-primary">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <form action="{{ route('team.destroy',$team->id) }}" method="post" class="d-inline">
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
                                            <td colspan="8" class="text-center">
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