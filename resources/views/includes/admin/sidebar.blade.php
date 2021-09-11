 <!-- ========== Left Sidebar Start ========== -->
 <div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <div class="left-side-logo d-block d-lg-none">
        <div class="text-center">
            
            <a href="{{ route('dashboard') }}" class="logo">
                @foreach($logo as $item)
                    @if($item->category === 'logo 1')
                        <img src="{{ asset('library/logo/'.$item->logo)}}" height="20" alt="logo">
                    @endif
                @endforeach
            </a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">
        
        <div id="sidebar-menu">
            <ul>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="dripicons-meter"></i>
                        <span> Dashboard 
                            <span class="badge badge-success badge-pill float-right"></span>
                        </span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('post.index') }}" class="waves-effect">
                        <i class="dripicons-blog"></i>
                        <span> Post
                            <span class="badge badge-success badge-pill float-right"></span>
                        </span>
                    </a>
                </li>
                
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="dripicons-briefcase"></i>
                        <span> Produk </span> 
                        <span class="menu-arrow float-right">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('product.index') }}">Produk</a>
                        </li>
                        <li>
                            <a href="{{ route('banner.index')}}">Produk Banner</a>
                        </li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="dripicons-information"></i>
                        <span> Tentang Kami </span> 
                        <span class="menu-arrow float-right">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('about.index') }}">About</a>
                        </li>
                        <li>
                            <a href="{{ route('team.index') }}">Team</a>
                        </li>
                        <li>
                            <a href="{{ route('worktime.index') }}">Jam Kerja</a>
                        </li>
                        <li>
                            <a href="{{ route('socialmedia.index') }}">Sosial Media</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('testimonial.index') }}" class="waves-effect">
                        <i class="dripicons-thumbs-up"></i>
                        <span> Testimonials
                            <span class="badge badge-success badge-pill float-right"></span>
                        </span>
                    </a>
                </li>


                <li>
                    <a href="{{ route('partner.index') }}" class="waves-effect">
                        <i class="fa fa-handshake-o"></i>
                        <span> Partner
                            <span class="badge badge-success badge-pill float-right"></span>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('payment.index') }}" class="waves-effect">
                        <i class="dripicons-wallet"></i>
                        <span> Payment
                            <span class="badge badge-success badge-pill float-right"></span>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('logo.index') }}" class="waves-effect">
                        <i class="dripicons-web"></i>
                        <span> Logo
                            <span class="badge badge-success badge-pill float-right"></span>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('subsemail.index') }}" class="waves-effect">
                        <i class="dripicons-mail"></i>
                        <span> Subscribe Email
                            <span class="badge badge-success badge-pill float-right"></span>
                        </span>
                    </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="dripicons-gear"></i>
                        <span> Settings </span> 
                        <span class="menu-arrow float-right">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('psbanner.index') }}">Section Carousel Banner</a>
                        </li>
                        <li>
                            <a href="{{ route('pssectionhero.index')}}">Section Hero</a>
                        </li>
                        <li>
                            <a href="{{ route('pssubscribe.index')}}">Section PsSubscribe</a>
                        </li>
                        <li>
                            <a href="{{ route('psfooter.index')}}">Section Ps Footer</a>
                        </li>
                    </ul>
                </li>

                

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->