<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="{{ asset('frontend/apple-touch-icon.png') }}" rel="apple-touch-icon">
    @foreach($logo as $item)
        @if($item->category === 'favicon')
            <link href="{{ asset('library/logo/'.$item->logo) }}" rel="icon">
        @endif
    @endforeach
    <meta name="author" content="#{author}">
    <meta name="keywords" content="#{keyword}">
    <meta name="description" content="#{description}">
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.app.style')
    @stack('addon-style')
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
<body class="page-init">
    @include('includes.app.navbar')
        
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="loader"></div>
    <div class="page-wrap">
        @yield('content')
        @include('includes.app.footer')
        
        @foreach($products as $product)
            <div class="modal-popup mfp-with-anim mfp-hide" id="quickview-modal-{{$product->id}}" tabindex="-1">
                <button class="modal-close"><i class="fa fa-remove"></i></button>
                <div class="ps-product-modal ps-product--detail clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                        <div class="ps-product__image">
                            <img src="{{ asset('library/product/'.$product->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">
                        <header>
                            <h3 class="ps-product__name">{{ $product->name }}</h3>
                            <p class="ps-product__price">{{ $product->price }}</p>
                            <div class="ps-product__meta">
                                <p><span>Deskripsi : </span>{!! $product->description !!}</p>
                            </div>
                        </header>
                        <footer>
                            <a class="ps-btn--fullwidth ps-btn ps-btn--sm" href="https://wa.me/6282304303505?text=Halo%20Mau%20Pesan%20{{$product->name}}" target="_blank">Order Sekarang
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <p class="ps-product__sharing">Bagikan dengan:
                                <a href="https://web.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></p>
                        </footer>
                    </div>
                </div>
            </div>
        @endforeach
        
        {{-- <div class="mfp-with-anim modal-popup mfp-hide" id="modal--subscribe">
            <button class="modal-close">
                <i class="fa fa-remove"></i>
            </button>
            <img src="{{ asset('frontend/images/img-demo-4.png') }}" alt="">
            <form action="_action" method="post">
              <h3>STAY UP-TO-DATE  WITH OUR NEWLETTER</h3>
              <p>Follow us & get <span> 20% OFF </span> coupon for first purchase !!!!!</p>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Type your email...">
                <button class="ps-btn ps-btn--sm">Subscribe</button>
              </div>
            </form>
        </div> --}}

        <div class="mfp-with-anim modal-popup mfp-hide" id="thankyou" tabindex="-1">
            <button class="modal-close"><i class="fa fa-remove"></i></button>
            <h3 class="text-center">TERIMAKASIH! ANDA TELAH BERLANGGANAN EMAIL DARI KAMI</h3>
        </div>

    </div>
    @stack('prepend-script')
    @include('includes.app.script')
    @stack('addon-script')
</body>
</html>