@extends('layouts.app')
@section('title', 'Bakery | About')

@section('content')
    <div class="ps-section--hero"><img src="{{ asset('frontend/images/hero/03.jpg') }}" alt="">
        <div class="ps-section__content text-center">
            <h3 class="ps-section__title">OUR BAKERY</h3>
            <div class="ps-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">About Us</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="ps-section ps-section--about pt-100 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">
                    <div class="ps-section__header text-center">
                        <div class="ps-section__top">Our Baker</div>
                        <h3 class="ps-section__title">Ms. Velvet Vanilla</h3>
                    </div>
                    <div class="ps-section__content text-center">
                        <p>“Soufflé danish gummi bears tart. Pie wafer icing. Gummies jelly beans powder. Chocolate bar pudding macaroon candy canes chocolate apple pie chocolate cake. Sweet caramels sesame snaps halvah bear claw wafer. Sweet roll soufflé muffin topping muffin brownie…”</p>
                        <div class="ps-about__sign text-center mb-30 mt-40">
                            <img src="{{ asset('frontend/images/about/img-signature.png')}}" alt="">
                        </div>
                        <p class="ps-about-sign">CEO - Vanila Bakery Shop</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                    <img src="{{ asset('frontend/images/about/about-intro.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section ps-section--award pt-80 pb-40">
        <div class="container">
            <div class="ps-section__header text-center mb-50">
                <div class="ps-section__top">Our Record</div>
                <h3 class="ps-section__title">WINNER AWARDS</h3>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-award text-center">
                            <div class="ps-award__icon">
                                <img src="{{ asset('frontend/images/award/01.png')}}" alt="">
                            </div>
                            <div class="ps-award__content">
                                <h3>BAKERY OF THE YEAR</h3>
                                <span>2010 - 2012</span>
                                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie. Jujubes chocolate cake sesame snaps</p>
                                <a class="ps-btn ps-btn--xs" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-award text-center">
                            <div class="ps-award__icon">
                                <img src="{{ asset('frontend/images/award/02.png')}}" alt="">
                            </div>
                            <div class="ps-award__content">
                                <h3>CUPCAKES SHOP OF THE YEAR</h3>
                                <span>2010 - 2012</span>
                                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie. Jujubes chocolate cake sesame snaps</p>
                                <a class="ps-btn ps-btn--xs" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-award text-center">
                            <div class="ps-award__icon">
                                <img src="{{ asset('frontend/images/award/02.png')}}" alt="">
                            </div>
                            <div class="ps-award__content">
                                <h3>BAKERY OF THE MONTH</h3>
                                <span>2010 - 2012</span>
                                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie. Jujubes chocolate cake sesame snaps</p>
                                <a class="ps-btn ps-btn--xs" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="ps-section ps-section--team ps-section--team-2 pt-80 pb-80">
        <div class="container">
            <div class="ps-section__header text-center">
                <div class="ps-section__top">Golden Hand</div>
                <h3 class="ps-section__title ps-section__title--full">OUR TEAM</h3>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <article class="ps-people ps-people--2">
                            <div class="ps-people__thumbnail">
                                <a class="ps-people__overlay" href="#"></a>
                                <img src="frontend/images/team/team-1.jpg" alt="">
                            </div>
                            <div class="ps-people__content">
                                <h4>Juan Olson</h4>
                                <span class="ps-people__position">CEO - Founder</span>
                                <p>Jelly topping halvah caramels sweet cake gummi bears toffee.</p>
                                    <ul class="ps-people__social">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <article class="ps-people ps-people--2">
                            <div class="ps-people__thumbnail">
                                <a class="ps-people__overlay" href="#"></a>
                                <img src="{{ asset('frontend/images/team/team-2.jpg')}}" alt="">
                            </div>
                            <div class="ps-people__content">
                                <h4>Corey Barnett</h4>
                                <span class="ps-people__position">Master Chef</span>
                                <p>Jelly topping halvah caramels sweet cake gummi bears toffee.</p>
                                    <ul class="ps-people__social">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <article class="ps-people ps-people--2">
                            <div class="ps-people__thumbnail"><a class="ps-people__overlay" href="#"></a><img src="{{ asset('frontend/images/team/team-3.jpg')}}" alt=""></div>
                            <div class="ps-people__content">
                                <h4>Agnes Buchanan</h4><span class="ps-people__position">Master Baker</span>
                                <p>Jelly topping halvah caramels sweet cake gummi bears toffee.</p>
                                    <ul class="ps-people__social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="ps-section ps-section--partner">
        <div class="container">
        <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="40" data-owl-nav="false" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="6" data-owl-item-xs="3" data-owl-item-sm="4" data-owl-item-md="5" data-owl-item-lg="6" data-owl-nav-left="&lt;i class=&quot;fa fa-angle-left&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;"><a href="#"><img src="{{ asset('frontend/images/partner/1.png')}}" alt=""></a><a href="#"><img src="{{ asset('frontend/images/partner/2.png')}}" alt=""></a><a href="#"><img src="{{ asset('frontend/images/partner/3.png')}}" alt=""></a><a href="#"><img src="{{ asset('frontend/images/partner/4.png')}}" alt=""></a><a href="#"><img src="{{ asset('frontend/images/partner/5.png')}}" alt=""></a><a href="#"><img src="{{ asset('frontend/images/partner/6.png')}}" alt=""></a><a href="#"><img src="{{ asset('frontend/images/partner/7.png')}}" alt=""></a><a href="#"><img src="{{ asset('frontend/images/partner/8.png')}}" alt=""></a>
        </div>
        </div>
    </div>
    <section class="ps-section ps-section--map">
        <div id="contact-map" data-address="New York, NY" data-title="BAKERY LOCATION!" data-zoom="17"></div>
        <div class="ps-delivery">
        <div class="ps-delivery__header">
            <h3>Contact Us</h3>
            <p>Our Company is the best, meet the creative team that never sleeps. Say something to us we will answer to you.</p>
        </div>
        <div class="ps-delivery__content">
            <form class="ps-delivery__form" action="product-listing.html" method="post">
            <div class="form-group">
                <label>Name<span>*</span></label>
                <input class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Email<span>*</span></label>
                <input class="form-control" type="email">
            </div>
            <div class="form-group">
                <label>Phone Number<span>*</span></label>
                <input class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Your message<span>*</span></label>
                <textarea class="form-control"></textarea>
            </div>
            <div class="form-group text-center">
                <button class="ps-btn">Send Message<i class="fa fa-angle-right"></i></button>
            </div>
            </form>
        </div>
        </div>
    </section>
@endsection