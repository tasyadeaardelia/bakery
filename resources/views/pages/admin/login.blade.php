@extends('layouts.admin')
@section('title', 'Login')

@section('content-login')
<div class="content-center">
    <div class="content-desc-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="card">
                        <div class="card-body">
    
                            <h3 class="text-center mt-0 m-b-15">
                                <a href="{{ route('login') }}" class="logo logo-admin">
                                    @foreach($logo as $item)
                                        @if($item->category === 'logo 1')
                                            <img src="{{ asset('library/logo/'.$item->logo) }}" height="30" alt="logo">
                                        @endif
                                    @endforeach
                                </a>
                            </h3>
    
                            <h4 class="text-muted text-center font-18"><b>Sign In</b></h4>
    
                            <div class="p-2">
                                <form class="form-horizontal m-t-20" action="{{ url('login') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-12">
                                            @if (Session::has('error_login'))
                                                {{-- <div class="alert alert-danger">{{ Session::get('error_login') }}</div> --}}
                                                <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Oh tidak!</strong> {{ Session::get('error_login') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" required="" placeholder="Username" name="username">
                                        </div>
                                    </div>
    
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" type="password" required="" placeholder="Password" name="password">
                                        </div>
                                    </div>
    
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-group text-center row m-t-20">
                                        <div class="col-12">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                    </div>
    
                                    <div class="form-group m-t-10 mb-0 row">
                                        <div class="col-sm-7 m-t-20">
                                            <a href="#" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                        </div>
                                        <div class="col-sm-5 m-t-20">
                                            <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
</div>
@endsection