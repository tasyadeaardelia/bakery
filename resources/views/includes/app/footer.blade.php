<section class="ps-section ps-section--subscribe pt-80 pb-80" id="contact">
  <div class="container">
    <div class="ps-subscribe" id="about">
      <div class="row">
        @foreach($pssubscribes as $pssubscribe)
          @if($pssubscribe->located === 'left')
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
              @if($pssubscribe->content === 'about')
                @foreach($about as $item)
                  <h4>{{ $item->title }}</h4>
                  <p>{!! $item->description !!}</p>
                  <p class="text-uppercase ps-subscribe__highlight">{{ $item->address }}</p>
                @endforeach
              @elseif($pssubscribe->content === 'subs_email') 
                @foreach($subsemail as $item) 
                  <h4>{{ $item->title }}</h4>
                  <p>{!! $item->description !!}</p>
                  <form class="ps-subscribe__form">
                    <input class="form-control" name="email" type="email" placeholder="Type your email...">
                    <button class="ps-btn ps-btn--sm" >Subscribe</button>
                  </form>
                @endforeach
              @endif
            </div>
          @elseif($pssubscribe->located === 'center')
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 ">
              <a class="ps-subscribe__logo" href="{{ route('home') }}">
                @foreach($logo as $item)
                  @if($item->category === 'logo 1')
                    <img src="{{ asset('library/logo/'.$item->logo) }}" alt="">
                  @endif
                @endforeach
              </a>
            </div>
          @elseif($pssubscribe->located == 'right')
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
              @if($pssubscribe->content === 'about')
                @foreach($about as $item)
                  <h4>{{ $item->title }}</h4>
                  <p>{!! $item->description !!}</p>
                  <p class="text-uppercase ps-subscribe__highlight">{{ $item->address }}</p>
                @endforeach
              @elseif($pssubscribe->content === 'subs_email') 
                @foreach($subsemail as $item) 
                  <h4>{{ $item->title }}</h4>
                  <p>{!! $item->description !!}</p>
                  <form class="ps-subscribe__form">
                    <input class="form-control" type="email" placeholder="Type your email...">
                    <button class="ps-btn ps-btn--sm">Subscribe</button>
                  </form>
                @endforeach
              @endif
            </div>
          @endif
        @endforeach
      </div>
    </div>
  </div>
</section>

<footer class="ps-footer">
  <div class="container">
    <div class="row">
      @foreach($psfooter as $item)
        @if($item->located === 'left')
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
            @if($item->content === 'payments')
              <div class="ps-widget ps-widget--footer ps-widget--payment">
                <div class="ps-widget__header">
                  <h3 class="ps-widget__title">{{ $item->title }}</h3>
                </div>
                <div class="ps-widget__content">
                  <ul>
                    @foreach($payments as $payment)
                      <li>
                        <a href="#">
                          <img src="{{ asset('library/payment/'.$payment->logo ) }}" alt="">
                        </a>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            @elseif($item->content === 'worktime')
              <div class="ps-widget ps-widget--footer ps-widget--worktime">
                <div class="ps-widget__header">
                  <h3 class="ps-widget__title">{{ $item->title }}</h3>
                </div>
                <div class="ps-widget__content">
                  @foreach($worktime as $item)
                    <p>
                      <strong>{{ ucwords($item->open) }} - {{ ucwords($item->close)}}</strong> 
                      {{ $item->timeopen}} - {{ $item->timeclose }}
                    </p>
                  @endforeach
                </div>
              </div>
            @elseif($item->content === 'socialmedia')
              <div class="ps-widget ps-widget--footer ps-widget--connect">
                <div class="ps-widget__header">
                  <h3 class="ps-widget__title">{{ $item->title }}</h3>
                </div>
                <div class="ps-widget__content">
                  <ul class="ps-widget__social">
                    @foreach($socialmedia as $item)
                      <li><a href="{{ $item->fb }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="{{ $item->google }}" target="_blank"><i class="fa fa-google"></i></a></li>
                      <li><a href="{{ $item->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="{{ $item->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
            @endif
          </div>
        @elseif($item->located === 'center')
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
            @if($item->content === 'payments')
              <div class="ps-widget ps-widget--footer ps-widget--payment">
                <div class="ps-widget__header">
                  <h3 class="ps-widget__title">{{ $item->title }}</h3>
                </div>
                <div class="ps-widget__content">
                  <ul>
                    @foreach($payments as $payment)
                      <li>
                        <a href="#">
                          <img src="{{ asset('library/payment/'.$payment->logo ) }}" alt="">
                        </a>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            @elseif($item->content === 'worktime')
              <div class="ps-widget ps-widget--footer ps-widget--worktime">
                <div class="ps-widget__header">
                  <h3 class="ps-widget__title">{{ $item->title }}</h3>
                </div>
                <div class="ps-widget__content">
                  @foreach($worktime as $item)
                    <p>
                      <strong>{{ ucwords($item->open) }} - {{ ucwords($item->close)}}</strong> 
                      {{ $item->timeopen}} - {{ $item->timeclose }}
                    </p>
                  @endforeach
                </div>
              </div>
            @elseif($item->content === 'socialmedia')
              <div class="ps-widget ps-widget--footer ps-widget--connect">
                <div class="ps-widget__header">
                  <h3 class="ps-widget__title">{{ $item->title }}</h3>
                </div>
                <div class="ps-widget__content">
                  <ul class="ps-widget__social">
                    @foreach($socialmedia as $item)
                      <li><a href="{{ $item->fb }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="{{ $item->google }}" target="_blank"><i class="fa fa-google"></i></a></li>
                      <li><a href="{{ $item->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="{{ $item->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
            @endif
          </div>
        @elseif($item->located === 'right')
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
            @if($item->content === 'payments')
              <div class="ps-widget ps-widget--footer ps-widget--payment">
                <div class="ps-widget__header">
                  <h3 class="ps-widget__title">{{ $item->title }}</h3>
                </div>
                <div class="ps-widget__content">
                  <ul>
                    @foreach($payments as $payment)
                      <li>
                        <a href="#">
                          <img src="{{ asset('library/payment/'.$payment->logo ) }}" alt="">
                        </a>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            @elseif($item->content === 'worktime')
              <div class="ps-widget ps-widget--footer ps-widget--worktime">
                <div class="ps-widget__header">
                  <h3 class="ps-widget__title">{{ $item->title }}</h3>
                </div>
                <div class="ps-widget__content">
                  @foreach($worktime as $item)
                    <p>
                      <strong>{{ ucwords($item->open) }} - {{ ucwords($item->close)}}</strong> 
                      {{ $item->timeopen}} - {{ $item->timeclose }}
                    </p>
                  @endforeach
                </div>
              </div>
            @elseif($item->content === 'socialmedia')
              <div class="ps-widget ps-widget--footer ps-widget--connect">
                <div class="ps-widget__header">
                  <h3 class="ps-widget__title">{{ $item->title }}</h3>
                </div>
                <div class="ps-widget__content">
                  <ul class="ps-widget__social">
                    @foreach($socialmedia as $item)
                      <li><a href="{{ $item->fb }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="{{ $item->google }}" target="_blank"><i class="fa fa-google"></i></a></li>
                      <li><a href="{{ $item->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="{{ $item->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
            @endif
          </div>
        @endif
      @endforeach
    </div>
  </div>
</footer>