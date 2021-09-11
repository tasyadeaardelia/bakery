@extends('layouts.app')

@section('title', 'Bakery | Product')

@section('content')
<div class="ps-section--hero">
    @foreach($pssectionhero as $item)
      <img src="{{ asset('library/hero/'.$item->image) }}" alt="">
    @endforeach
      <div class="ps-section__content text-center">
        <h3 class="ps-section__title">Toko Kue Vanila</h3>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li class="{{ url()->current() }}">Blog</li>
          </ol>
        </div>
      </div>
  </div>

<div class="ps-section--page-reverse">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                <div class="ps-blog-detail pt-80 pb-80">
                @foreach($data as $item)
                    <div class="ps-post">
                        <div class="ps-post__thumbnail">
                            <a class="ps-post__overlay" href="{{ route('detailblog', $item->slug)}}"></a>
                            <img src="{{ asset('library/blog/'.$item->image)}}" alt="">
                        </div>
                        <div class="ps-post__header">
                            <a class="ps-post__title" href="{{ route('detailblog', $item->slug)}}">{{ $item->title }}</a>
                            <div class="ps-post__meta">
                                <span><i class="fa fa-calendar-check-o"></i>{{ date('d F Y',strtotime($item->publishedAt)) }}</span>
                                <span class="tags">
                                    <i class="fa fa-tags"></i>
                                    @for($i=0; $i<count($tags); $i++)
                                        {{ ucfirst(trans($tags[$i]['title'])) }} 
                                    @endfor
                                </span>
                            </div>
                        </div>
                        <div class="ps-post__content">
                            {!! $item->content !!}
                        </div>
                        <footer class="ps-post__footer">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="ps-post__tags">
                                        <i class="fa fa-tags"></i>
                                        @for($i=0; $i<count($tags); $i++)
                                            {{ ucfirst(trans($tags[$i]['title'])) }} 
                                        @endfor
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="ps-post__action">
                                        <a class="facebook" href="{{ url('https://www.facebook.com/share/'.url()->current() )}}">
                                            <i class="fa fa-facebook"></i>Share
                                        </a>
                                        <a class="twitter" href="#">
                                            <i class="fa fa-twitter"></i>Tweet
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                    <div class="ps-author-box">
                        @foreach($posts as $post)
                        <div class="ps-author-box__thumbnail">
                            <img src="{{ asset('library/user/'.$post->profil)}}" alt="">
                        </div>
                        <div class="ps-author-box__content">
                            <h4>{{ $post->name }}</h4>
                        </div>
                        @endforeach
                    </div>
                    
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@endsection