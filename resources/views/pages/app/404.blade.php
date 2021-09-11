@extends('layouts.app-error')
@section('title', '404 | Page not found')
    
@section('content')
<div class="page-wrap">
    <div class="ps-error bg--cover" data-background="{{ asset('frontend/images/background/img-404.jpg') }}">
        <div class="ps-error__content text-center">
            <h1>404</h1>
            <h3>PAGES NOT FOUND</h3>
            <p>OOPS ! Seems you're go out range our Bakery ! :(</p>
            <a class="ps-btn" href="homepage.html">Back to home
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>
@endsection
