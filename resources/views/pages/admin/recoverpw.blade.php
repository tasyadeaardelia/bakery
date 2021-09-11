@extends('layouts.admin')
@section('title', 'Recover Password')

@section('content-login')
<div class="content-center">
    <div class="content-desc-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="card">
                        <div class="card-body">
        
                            <h3 class="text-center mt-0 m-b-15">
                                <a href="index.html" class="logo logo-admin"><img src="backend/images/logo-dark.png" height="30" alt="logo"></a>
                            </h3>
        
                            <h4 class="text-muted text-center font-18"><b>Reset Password</b></h4>
        
                            <div class="p-3">
                                <form class="form-horizontal m-t-20" action="index.html">
        
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        Enter your <b>Email</b> and instructions will be sent to you!
                                    </div>
        
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" type="email" required="" placeholder="Email">
                                        </div>
                                    </div>
        
                                    <div class="form-group text-center row m-t-20">
                                        <div class="col-12">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Send Email</button>
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