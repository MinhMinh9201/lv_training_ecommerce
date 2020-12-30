@extends('layout.main2')

@section('content')
    <div>
        <div class="thing" id="wrapper">
            @foreach($banners as $item)
            <div class="banner-img"><img src="{{ $item['image_source'] }}" alt=""></div>
            @endforeach
        </div>
        {{-- <aside id="colorlib-hero" class="mb-30">
            <div class="flexslider">
                <ul class="slides">
                    @foreach ($banners as $item)
                        <li style="background-image: url({{ $item['image_source'] }});">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                        <div class="slider-text-inner">
                                            <div class="desc">
                                                <h1 class="head-1">{{ $item['slogan'] }}</h1>
                                                <h2 class="head-3">{{ $item['slogan'] }}</h2>
                                                <h2 class="head-2">{{ $item['slogan'] }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside> --}}
        {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
        {{-- <div class="container-fluid">
            @foreach ($banners as $item)
            <!--Carousel Wrapper-->
            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="view">
                            <img class="d-block w-100" src="{{ $item['image_source'] }}" alt="First slide">
                            <div class="mask rgba-black-light"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">Light mask</h3>
                            <p>First text</p>
                        </div>
                    </div>
                </div>

                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            @endforeach
            <!--/.Carousel Wrapper-->
        </div> --}}

        <div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">
            <div class="ps-container">
                <div class="ps-section__header mb-50">
                    @php
                    $i = -1;
                    @endphp
                    @foreach ($collections as $col)
                        @php
                        $i++;
                        @endphp
                        @if (count($col[$groups[$i]['index']]) != 0)
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                                    <h3 class="ps-section__title" data-mask="{{ $groups[$i]['title'] }}">{{ $groups[$i]['title'] }}</h3>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                                    <div class="ps-owl-actions"><a class="ps-prev" href="#"><i
                                                class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i
                                                class="ps-icon-arrow-left"></i></a></div>
                                </div>
                            </div>
                            {{-- <div class="row row-pb-md">
                                @foreach ($col[$groups[$i]['index']] as $item)
                                    <div class="col-lg-3 mb-4 text-center">
                                        <div class="product-entry border">
                                            <a href="{{ url("$item[slug]") }}.html" class="prod-img">
                                                <img src="{{ url("$item[image_source]") }}" class="img-fluid"
                                                    alt="Free html5 bootstrap 4 template">
                                            </a>
                                            <div class="desc">
                                                <h2><a href="{{ url("$item[slug]") }}.html">{{ $item['title'] }}</a></h2>
                                                <span class="price">${{ $item['price'] }}</span>
                                                <button onclick="addToCart({{ $item['id'] }}, 1)"
                                                    class="btn btn-primary btn-addtocart"><i
                                                        class="icon-shopping-cart"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div> --}}

                            <div class="ps-section__content">
                                <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true"
                                    data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4"
                                    data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4"
                                    data-owl-duration="1000" data-owl-mousedrag="on">
                                    @foreach ($col[$groups[$i]['index']] as $item)
                                    <div class="ps-shoes--carousel">
                                        <div class="ps-shoe">
                                            <div class="ps-shoe__thumbnail">
                                                <div class="ps-badge"><span>New</span></div><a class="ps-shoe__favorite" href="#"><i
                                                        class="ps-icon-heart"></i></a><img src="{{ url("$item[image_source]") }}" alt=""><a
                                                    class="ps-shoe__overlay" href="{{ url("$item[slug]") }}.html"></a>
                                            </div>
                                            <div class="ps-shoe__content">
                                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="{{ url("$item[slug]") }}.html">{{ $item['title'] }}</a>
                                                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a
                                                            href="#"> Jordan</a></p><span class="ps-shoe__price"> ${{ $item['price'] }}</span>
                                                    <button onclick="addToCart({{$item['id']}}, 1)" class="btn btn-secondary">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div class="row">
                        <div class="col-md-12 text-center">
                          <p><a href="{{url('search.html')}}" class="btn btn-warning btn-lg">Shop All Products</a></p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section--offer">
        <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img src="/storage/images/sl4.jpg" alt=""></a></div>
        <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img src="/storage/images/banner.jpg" alt=""></a></div>
      </div>
      {{-- ---------------banner ads --}}
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
    $('.thing').slick({
            dots: true,
            autoplay: true,
            arrows:true,
            autoplaySpeed: 1000,
            prevArrow:'<button class="PrevArrow"></button>',
          nextArrow:'<button class="NextArrow"></button>',
        });
  });
</script>
@endsection
