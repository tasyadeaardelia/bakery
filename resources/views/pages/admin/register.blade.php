@extends('layouts.admin')
@section('title', 'Register')

@section('content-login')
<div class="content-center">
    <div class="content-desc-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="card">
                        <div class="card-body">
        
                            <h3 class="text-center mt-0 m-b-15">
                                <a href="index.html" class="logo logo-admin"><img src="{{ asset('backend/images/logo-dark.png') }}" height="30" alt="logo"></a>
                            </h3>
        
                            <h4 class="text-muted text-center font-18"><b>Register</b></h4>
        
                            <div class="p-3">
                                <form class="form-horizontal m-t-20" action="{{ url('register')}}" method="post">
                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" name="name" type="text" required="" placeholder="Full Name">
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" name="username" type="text" required="" placeholder="Username">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" name="email" type="email" required="" placeholder="Email">
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" type="password" name="password"required="" placeholder="Password">
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" required="">
                                                <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-primary">Terms and Conditions</a></label>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="form-group text-center row m-t-20">
                                        <div class="col-12">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" id="sa-image">Register</button>
                                        </div>
                                    </div>
        
                                    <div class="form-group m-t-10 mb-0 row">
                                        <div class="col-12 m-t-20 text-center">
                                            <a href="{{ route('login') }}" class="text-muted">Already have account?</a>
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