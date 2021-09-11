@extends('layouts.app')

@section('title', 'Bakery | Product')

@section('content')
    <!-- Heros-->
    <div class="ps-section--hero">
      <img src="{{ asset('frontend/images/hero/01.jpg')}}" alt="">
        <div class="ps-section__content text-center">
          <h3 class="ps-section__title">OUR BAKERY</h3>
          <div class="ps-breadcrumb">
            <ol class="breadcrumb">
              <li><a href="{{ route('home')}}">Home</a></li>
              <li class="active">Shop</li>
            </ol>
          </div>
        </div>
    </div>
    <div class="ps-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="ps-shop-grid pt-80">
              <div class="ps-shop-features">
                <div class="owl-slider" data-owl-auto="true" data-owl-loop="true">
                  @foreach($banners as $banner)
                    <div class="row" style="padding-left: 60px;">
                      <img class="mb-30" src="{{ asset('library/banner-offer/'.$banner->photo) }}" alt="">
                    </div>
                  @endforeach
                </div>
              </div>
              <div class="ps-shop-filter">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="form-group">
                      <label>Urutkan berdasarkan:</label>
                      <select class="ps-select" data-placeholder="Popupar product">
                        <option value="01">Nama</option>
                        <option value="01">Harga</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ps-shop ps-col-tiny">
                <div class="row">
                  @foreach($products as $product)
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="ps-product">
                      <div class="ps-product__thumbnail">
                        <a class="ps-product__overlay" href="product-detail.html"></a>
                        <img src="{{ asset('library/product/'.$product->image)}}" alt="">
                        <ul class="ps-product__action">
                          <li>
                            <a class="popup-modal" href="#quickview-modal-{{$product->id}}" data-effect="mfp-zoom-out" data-tooltip="View">
                              <i class="ps-icon--search"></i>
                            </a>
                          </li>
                          <li><a href="https://wa.me/6282304303505?text=Halo%20Mau%20Pesan%20{{$product->name}}" data-tooltip="Order Now" target="_blank"><i class="ps-icon--shopping-cart"></i></a></li>
                        </ul>
                      </div>
                      <div class="ps-product__content">
                        <a class="ps-product__title" href="#quickview-modal-{{$product->id}}">{{ $product->name }}</a>
                        <p class="ps-product__price">{{ $product->price }}</p>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <div class="ps-pagination">
                  <ul class="pagination">
                    <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>

@endsection