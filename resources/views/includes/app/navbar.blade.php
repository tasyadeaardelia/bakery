<div class="header--sidebar"></div>
<header class="{{ (request()->routeIs('home')) ? 'header' : 'header header--2' }}" data-responsive="1199">
  <div class="header__top">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 ">
          @foreach($about as $item)
            <p>{{ $item->address }}</p>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <nav class="navigation">
    <div class="container">
      <div class="menu-toggle"><span></span></div>
      <div class="navigation__left">
        <ul class="menu menu--left">
          <li class="{{ (request()->routeIs('home')) ? 'current' : '' }}"><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('home') }}#about">Tentang</a></li>
          <li class="{{ (request()->routeIs('product')) ? 'current' : '' }}"><a href="{{ route('product') }}">Produk</a>
          </li>
        </ul>
      </div>
      <a class="ps-logo" href="{{ route('home') }}">
        @if( (request()->routeIs('home')))
          @foreach($logo as $item)
            @if($item->category === 'logo 1')
              <img src="{{ asset('library/logo/'.$item->logo) }}" alt="">
            @endif
          @endforeach
        @else
          @foreach($logo as $item)
            @if($item->category === 'logo 2')
              <img src="{{ asset('library/logo/'.$item->logo) }}" alt="">
            @endif
          @endforeach
        @endif
      </a>
      <div class="navigation__right">
        <ul class="menu menu--right">
          <li><a href="{{ route('home') }}#testimonials">Testimonial</a></li>
          <li class="{{ (request()->routeIs('blog')) ? 'current' : '' }}"><a href="{{ route('blog')}}">Blogs</a></li>
          <li><a href="{{ route('home') }}#contact">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>