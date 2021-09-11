@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Bakery</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h5 class="page-title">Dashboard</h5>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="dripicons-blog float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Posts</h6>
                    </div>
                    <div class="card-body text-center">
                        <div class="border-bottom pb-4">
                            <h1 class="card-text">
                                {{ $post }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-account-network float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Users</h6>
                    </div>
                    <div class="card-body text-center">
                        <div class="border-bottom pb-4">
                            <h1 class="card-text">
                                {{ $user }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="dripicons-briefcase float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Produk</h6>
                    </div>
                    <div class="card-body text-center">
                        <div class="border-bottom pb-4">
                            <h1 class="card-text">
                                {{ $produk }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="dripicons-thumbs-up float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Testimonial</h6>
                    </div>
                    <div class="card-body text-center">
                        <div class="border-bottom pb-4">
                            <h1 class="card-text">
                                {{ $testimonial }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="dripicons-blog float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Active Post</h6>
                    </div>
                    <div class="card-body text-center">
                        <div class="border-bottom pb-4">
                            <h1 class="card-text">
                                {{ $post_active }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="dripicons-blog float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Draft Post</h6>
                    </div>
                    <div class="card-body text-center">
                        <div class="border-bottom pb-4">
                            <h1 class="card-text">
                                {{ $post_inactive }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="fa fa-handshake-o float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Partner</h6>
                    </div>
                    <div class="card-body text-center">
                        <div class="border-bottom pb-4">
                            <h1 class="card-text">
                                {{ $partner }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="dripicons-wallet float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Payment</h6>
                    </div>
                    <div class="card-body text-center">
                        <div class="border-bottom pb-4">
                            <h1 class="card-text">
                                {{ $payment }}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- container fluid -->

</div> <!-- Page content Wrapper -->

@endsection