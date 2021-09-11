@extends('layouts.admin')
@section('title', 'Admin | worktime')
    
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
                        </ol>
                    </div>
                    <h5 class="page-title">worktime Table</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <a href="{{ route('worktime.create')}}" class="btn btn-primary btn-lg btn-block m-b-30">Create new worktime</a>  

                       
                            <table id="example" class="table table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Open</th>
                                        <th>Time Open</th>
                                        <th>Close</th>
                                        <th>Time Close</th>
                                        <th>Status</th>
                                        <th>CreatedAt</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($worktime as $item)
                                        <tr>
                                            <td>{{ $item->open }}</td>
                                            <td>{{ $item->timeopen }}</td>
                                            <td>{{ $item->close }}</td>
                                            <td>{{ $item->timeclose }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->created_at}}</td>
                                            <td>
                                                <a href="{{ route('worktime.edit',$item->id) }}" class="btn btn-outline-primary">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <form action="{{ route('worktime.destroy',$item->id) }}" method="post" class="d-inline">
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