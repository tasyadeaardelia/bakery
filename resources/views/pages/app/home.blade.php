@extends('layouts.app')
@section('title', 'Bakery | Homepage')
@section('content')
<div class="page-wrap">
    <div class="ps-banner--home-1">
      <div class="rev_slider_wrapper fullscreen-container" id="revolution-slider-1" data-alias="concept121" data-source="gallery" style="background-color:#000000;padding:0px;">
        <div class="rev_slider fullscreenbanner" id="rev_slider_1059_1" style="display:none;" data-version="5.4.1">
          <ul class="ps-banner">
            @foreach($psbanners as $psbanner)
              @if($psbanner->id %2 == 0)
                <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="../../assets/library/images/concept4-100x100.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                  <img class="rev-slidebg" src="{{ asset('library/psbanner/'.$psbanner->image )}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
                  <div class="tp-caption ps-banner__caption" id="layer01" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-100','-80','-120','-120']" data-width="['none','none','none','400']" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1700,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;x:left(R);&quot;,&quot;ease&quot;:&quot;Power3.easeIn&quot;}]" style="z-index: 7; white-space: nowrap;text-transform:left;">{{ $psbanner->caption }}</div>
                  <div class="tp-caption ps-banner__description" id="layer02" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1500,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;x:left(R);&quot;,&quot;ease&quot;:&quot;Power3.easeIn&quot;}]">{{ $psbanner->description}}</div>
                  <a class="tp-caption ps-btn ps-btn--lg" href="#" id="layer03" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['80','70','70','70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1500,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;x:left(R);&quot;,&quot;ease&quot;:&quot;Power3.easeIn&quot;}]">TRY OUR CUPCAKES <i class="fa fa-angle-right"></i></a>
                </li>
              @else
                <li data-index="rs-2973" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="../../assets/frontend/images/concept4-100x100.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                  <img class="rev-slidebg" src="{{ asset('library/psbanner/'.$psbanner->image )}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
                  <div class="tp-caption ps-banner__caption" id="layer04" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-100','-80','-120','-120']" data-width="['none','none','none','400']" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1700,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;x:left(R);&quot;,&quot;ease&quot;:&quot;Power3.easeIn&quot;}]" style="z-index: 7; white-space: nowrap;text-transform:left;">{{ $psbanner->caption }}</div>
                  <div class="tp-caption ps-banner__description" id="layer05" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1500,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;x:left(R);&quot;,&quot;ease&quot;:&quot;Power3.easeIn&quot;}]">{{ $psbanner->description }}</div>
                  <a class="tp-caption ps-btn ps-btn--lg" href="https://wa.me/6282304303505?text=Halo%20Mau%20Pesan%20" target="_blank" id="layer06" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['80','70','70','70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1500,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;x:left(R);&quot;,&quot;ease&quot;:&quot;Power3.easeIn&quot;}]">PESAN SEKARANG <i class="fa fa-angle-right"></i></a>
                </li>
              @endif
            @endforeach
          </ul>
        </div>
      </div>
    </div>

    <section class="ps-section ps-section--best-seller pt-40 pb-100" id="best-seller">
      <div class="container">
        <div class="ps-section__header text-center mb-50">
          <h4 class="ps-section__top">Produk Kami</h4>
          <h3 class="ps-section__title ps-section__title--full">Penjualan Terbaik</h3>
        </div>
        <div class="ps-section__content">
          <div class="owl-slider owl-slider--best-seller" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-nav-left="&lt;i class=&quot;ps-icon--back&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;ps-icon--next&quot;&gt;&lt;/i&gt;">
            @foreach($products as $product)
              <div class="ps-product">
                <div class="ps-product__thumbnail">
                  <img src="{{ asset('library/product/'.$product->image)}}" alt="">
                </div>
                <div class="ps-product__content">
                  {{ $product->name }}
                  <p class="ps-product__price">Rp. {{ $product->price }}</p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>


    <div class="ps-section ps-section--home-testimonial pb-30 bg--parallax" data-background="library/parallax/img-bg-1.jpg" id="testimonials">
      <div class="container">
        <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-nav-left="&lt;i class=&quot;fa fa-angle-left&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;">

          @foreach ($testimonials as $testimonial)
            <div class="ps-testimonial text-center pt-80 pb-100">
              <div class="ps-testimonial__header">
                <div class="ps-testimonial__thumbnail">
                  <img src="{{ asset('library/testimonial/'.$testimonial->profil) }}" alt="">
                </div>
                <p>{{ $testimonial->name }} - {{ $testimonial->job }}</p>
              </div>
              <div class="ps-testimonial__content">
                <p>{{ $testimonial->description }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>


    <section class="ps-section ps-section--offer pt-80 pb-40" id="offer-this-week">
      <div class="container">
        <div class="ps-section__header text-center mb-100">
          <h4 class="ps-section__top">Buat Kalian Senang</h4>
          <h3 class="ps-section__title ps-section__title--full">Penawaran Minggu Ini</h3>
        </div>
        <div class="ps-section__content">
          <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
            <div class="ps-masonry">
              <div class="grid-sizer"></div>
              @foreach($banners as $banner)
                @if($banner->category === 'Cake')
                  <div class="grid-item high wide">
                    <div class="grid-item__content-wrapper">
                      <div class="ps-offer">
                        <img src="{{ asset('library/banner-offer/'.$banner->photo)}}" alt="">
                        <a class="ps-offer__overlay" href="#"></a>
                      </div>
                    </div>
                  </div>
                @elseif($banner->category === 'Cupcake')
                  <div class="grid-item">
                    <div class="grid-item__content-wrapper">
                      <div class="ps-offer">
                        <img src="{{ asset('library/banner-offer/'.$banner->photo)}}" alt="">
                        <a class="ps-offer__overlay" href="#"></a>
                      </div>
                    </div>
                  </div>
                @elseif($banner->category === 'tart')
                  <div class="grid-item high">
                    <div class="grid-item__content-wrapper">
                      <div class="ps-offer">
                        <img src="{{ asset('library/banner-offer/'.$banner->photo)}}" alt="">
                        <a class="ps-offer__overlay" href="#"></a>
                      </div>
                    </div>
                  </div>
                @elseif($banner->category === 'Lolipop')
                  <div class="grid-item wide">
                    <div class="grid-item__content-wrapper">
                      <div class="ps-offer">
                        <img src="{{ asset('library/banner-offer/'.$banner->photo)}}" alt="">
                        <a class="ps-offer__overlay" href="#"></a>
                      </div>
                    </div>
                  </div>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ps-section ps-section--list-product pt-40 pb-80" id="product">
      <div class="container">
        <div class="row">
          @for($i=0; $i<count($products); $i++)
            @if($i %2 == 0)
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="ps-section__content">
                  <div class="ps-product--list">
                    <div class="ps-product__thumbnail">
                      <img src="{{ asset('library/product/'.$products[$i]->image)}}" alt="">
                    </div>
                    <div class="ps-product__content">
                      <h4 class="ps-product__title">{{ $products[$i]->name }}</h4>
                      <p>{!! $products[$i]->description !!}</p>
                      <p class="ps-product__price">
                        {{ $products[$i]->price }}
                      </p>
                      <a class="ps-btn ps-btn--xs" href="https://wa.me/6282304303505?text=Halo%20Mau%20Pesan%20" target="_blank">Order now
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            @endif
          @endfor
          @for($i=0; $i<count($products); $i++)
              @if($i %2 !== 0)
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="ps-section__content">
                  <div class="ps-product--list">
                    <div class="ps-product__thumbnail">
                      <img src="{{ asset('library/product/'.$products[$i]->image)}}" alt="">
                    </div>
                    <div class="ps-product__content">
                      <h4 class="ps-product__title">{{ $products[$i]->name }}</h4>
                      <p>{!! $products[$i]->description !!}</p>
                      <p class="ps-product__price">
                        {{ $products[$i]->price }}
                      </p>
                      <a class="ps-btn ps-btn--xs" href="https://wa.me/6282304303505?text=Halo%20Mau%20Pesan" target="_blank">Order now
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              @endif
          @endfor
        </div>
      </div>
    </section>


    <section class="ps-section ps-section--team ps-section--pattern pt-80 pb-80" id="our-team">
      <div class="container">
        <div class="row text-center">
          <div class="ps-section__header">
            <h3 class="ps-section__title ps-section__title--left">TIM KAMI</h3>
            <p>Kami siap membantu dengan tim yang ahli dibidangnya</p>
          </div>
        </div>
        <div class="row">   
          <div class="ps-section__content">
            <div class="row owl-slider" data-owl-auto="true" data-owl-loop="true">
              @foreach($teams as $team)
                <div style="margin-left:20px;">
                  <article class="ps-people">
                    <div class="ps-people__thumbnail">
                      <a class="ps-people__overlay" href="#"></a>
                      <img src="{{ asset('library/team/'.$team->image) }}" alt="">
                    </div>
                      <div class="ps-people__content">
                        <h4>{{ $team->name}}</h4>
                        <span class="ps-people__position">{{ $team->position }}</span>
                        <p>{{ $team->description }}</p>
                            <ul class="ps-people__social">
                              <li><a href="{{ $team->fb }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="{{ $team->mail }}" target="_blank"><i class="fa fa-google"></i></a></li>
                              <li><a href="{{ $team->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                      </div>
                    </article>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ps-section ps-section--news pt-100 pb-100">
      <div class="container">
        <div class="ps-section__header text-center">
          <h4 class="ps-section__top">Cerita Kami</h4>
          <h3 class="ps-section__title ps-section__title--full">BLOG</h3>
        </div>
        <div class="ps-section__content">
          <div class="row">
            @foreach($posts as $post)
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div class="ps-new">
                    <img src="{{ asset('library/blog/'.$post->image)}}" alt="">
                    <div class="ps-new__container">
                      <header class="ps-new__header">
                        <p>by<a href="{{ route('detailblog', $post->slug)}}"> {{ $post->name }}</a> / {{ $post->publishedAt }}</p>
                        <a class="ps-new__title" href="{{ route('detailblog', $post->slug)}}"> {{ $post->title }}</a>
                      </header>
                      <div class="ps-new__content">
                        <p data-number-line="2">
                          @php
                            echo substr(strip_tags($post->content),0,300);    
                          @endphp
                        </p>
                        <a class="ps-btn ps-btn--sm" href="{{ route('detailblog', $post->slug)}}">Read more</a>
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>


    <div class="ps-section ps-section--partner">
      <div class="container">
        <div class="owl-slider" 
        data-owl-auto="true" data-owl-loop="true" 
        data-owl-speed="10000" data-owl-gap="40" 
        data-owl-nav="false" data-owl-dots="false" 
        data-owl-animate-in="" data-owl-animate-out="" 
        data-owl-item="6" data-owl-item-xs="3" 
        data-owl-item-sm="4" data-owl-item-md="5" 
        data-owl-item-lg="6" data-owl-nav-left="&lt;i class=&quot;fa fa-angle-left&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;">

        @foreach($partners as $partner)
          <a href="#">
            <img src="{{ asset('library/partner/'. $partner->logo)}}" alt="">
          </a>
        @endforeach
        </div>
      </div>
    </div>


    <section class="ps-section ps-section--map">
      <div id="contact-map" data-address="New York, NY" data-title="BAKERY LOCATION!" data-zoom="17"></div>
      <div class="ps-delivery">
          <div class="ps-delivery__header">
              <h3>HUBUNGI KAMI</h3>
              <p>Perusahaan kami adalah yang terbaik, temui tim kreatif yang tidak pernah tidur. Katakan sesuatu kepada kami, kami akan menjawab Anda.</p>
          </div>
          <div class="ps-delivery__content">
              <form class="ps-delivery__form" action="product-listing.html" method="post">
                  <div class="form-group">
                      <label>Nama<span>*</span></label>
                      <input class="form-control" type="text">
                  </div>
                  <div class="form-group">
                      <label>Email<span>*</span></label>
                      <input class="form-control" type="email">
                  </div>
                  <div class="form-group">
                      <label>Handphone<span>*</span></label>
                      <input class="form-control" type="text">
                  </div>      
                  <div class="form-group">
                      <label>Pesan Anda<span>*</span></label>
                      <textarea class="form-control"></textarea>
                  </div>
                  <div class="form-group text-center">
                      <button class="ps-btn">Kirim Pesan<i class="fa fa-angle-right"></i></button>
                  </div>
              </form>
          </div>
      </div>
    </section>


  </div>
@endsection
