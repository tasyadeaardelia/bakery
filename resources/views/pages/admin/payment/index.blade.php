@extends('layouts.admin')
@section('title', 'Admin | payment')
    
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
                                <a href="{{ route('payment.index') }}">payment</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">payment Table</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <a href="{{ route('payment.create')}}" class="btn btn-primary btn-lg btn-block m-b-30">Create new payment</a>  

                            <table id="example" class="table table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>payment Name</th>
                                        <th>Logo</th>
                                        <th>Status</th>
                                        <th>CreatedAt</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($payments as $payment)
                                        <tr>
                                            <td>{{ $payment->name }}</td>
                                            <td>
                                                <img src="{{ asset('library/payment/'. $payment->logo)}}" alt="{{ $payment->logo }}" style="width: 20%;">            
                                            </td>
                                            <td>{{ $payment->status }}</td>
                                            <td>{{ $payment->created_at}}</td>
                                            <td>
                                                <a href="{{ route('payment.edit',$payment->id) }}" class="btn btn-outline-primary">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <form action="{{ route('payment.destroy',$payment->id) }}" method="post" class="d-inline">
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