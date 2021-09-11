@extends('layouts.app')
@section('title', 'Bakery | Blogs')

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
        <div class="pt-80 pb-80">
          @foreach ($posts as $item)
            <div class="ps-blog-listing">
              <div class="ps-post">
                <div class="ps-post__thumbnail">
                  <a class="ps-post__overlay" href="blog-detail.html"></a>
                  <img src="{{ asset('library/blog/'. $item->image) }}" alt="">
                </div>
                <div class="ps-post__header">
                  <a class="ps-post__title" href="blog-detail.html">
                    {{$item->title}}
                  </a>
                  <div class="ps-post__meta">
                    <span>
                      <i class="fa fa-calendar-check-o"></i>
                      {{ date('d F Y',strtotime($item->publishedAt)) }}
                    </span>
                    <span>
                      <i class="fa fa-comment-o"></i>
                      24 Comments
                    </span>
                    <span class="tags">
                      <i class="fa fa-tags"></i>
                      @for($i=0; $i<count($tags); $i++)
                        {{ ucfirst(trans($tags[$i]['title'])) }} 
                      @endfor
                    </span>
                  </div>
                </div>
                <div class="ps-post__content">
                  <p>
                    @php
                    echo substr(strip_tags($item->content),0,300);    
                    @endphp
                  </p>
                </div>
                <footer class="ps-post__footer">
                  <a class="ps-btn ps-btn--sm ps-post__morelink" href="{{ route('detailblog', $item->slug) }}">Read more</a>
                  <div class="ps-post__action">
                    <a class="like" href="#">Like
                      <i class="fa fa-heart"></i>
                      <span><i>2</i></span>
                    </a>
                    <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/blog/detail/bakery-dan-pastry" target="_blank">
                      <i class="fa fa-facebook"></i>Share
                    </a>
                    <a class="twitter" href="#">
                      <i class="fa fa-twitter"></i>Tweet
                    </a>
                  </div>
                </footer>
              </div>
            </div>
          @endforeach

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

@endsection