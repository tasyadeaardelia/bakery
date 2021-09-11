@extends('layouts.admin')
@section('title', 'Admin | Partner')
    
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
                                <a href="{{ route('partner.index') }}">Partner</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Partner Table</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <a href="{{ route('partner.create')}}" class="btn btn-primary btn-lg btn-block m-b-30">Create new Partner</a>  

                       
                            <table id="example" class="table table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Partner Name</th>
                                        <th>Logo</th>
                                        <th>CreatedAt</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($partners as $partner)
                                        <tr>
                                            <td>{!! $partner->name !!}</td>
                                            <td>
                                                <img src="{{ asset('library/partner/'. $partner->logo)}}" alt="{{ $partner->logo }}" style="width: 20%;">            
                                            </td>
                                            <td>{{ $partner->created_at}}</td>
                                            <td>
                                                <a href="{{ route('partner.edit',$partner->id) }}" class="btn btn-outline-primary">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                            
                                                <form action="{{ route('partner.destroy',$partner->id) }}" method="post" class="d-inline">
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
@endsection