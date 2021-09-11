@extends('layouts.admin')

@section('title', 'Oops Sorry')
    
@section('content')
     <!-- Begin page -->
    <div class="accountbg">
            
        <div class="content-center">
            <div class="content-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-8">
                            <div class="card">
                                <div class="card-block">
                                    <div class="ex-page-content text-center">
                                        <h1 class="text-primary">O
                                            <i class="fa fa-smile-o text-warning ml-1 mr-1"></i>0PS!
                                        </h1>
                                        <h3 class="">Sepertinya ada yang salah, kami sedang mencoba memperbaikinya. Maaf ya, atas ketidaknyamanan ini</h3><br>
                
                                        <a class="btn btn-primary mb-5 waves-effect waves-light" href="{{ route('home') }}">Halaman Utama</a>
                                    </div>
                
                                </div>
                            </div>
                                                
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>
@endsection