<nav class="navigation">
    <div class="container-fluid">
      <div class="navigation__column left">
        <div class="header__logo"><a class="ps-logo" href="index.html"><img src="{{ asset('images/logo.png') }}" alt=""></a></div>
      </div>
      <div class="navigation__column center">
            <ul class="main-menu menu">
                <li id="menu-item" class="menu-item"><a href="{{url('/')}}">Home</a></li>
                @foreach ($categories as $item)
                    <li id="nav-{{$item['slug']}}" class="menu-item">
                        <a href="{{url("$item[slug]")}}.html">{{$item['title']}}</a>
                        @if (count($item['children']) != 0)
                            <ul class="dropdown">
                            @foreach ($item['children'] as $sub)
                                <li><a href="{{url("$sub[slug]")}}.html">{{$sub['title']}}</a></li>
                            @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
      </div>
      <div class="navigation__column right">
        <form class="ps-search--header" action="{{url('search.html')}}" method="GET">
          <input class="form-control" name="keyword" type="search" placeholder="Search Product…">
          <button type="submit"><i class="ps-icon-search"></i></button>
        </form>
        <div class="ps-cart" id="nav-cart"><a class="ps-cart__toggle" href="{{url('cart.html')}}"><span><i id="span-cart">0</i></span><i class="ps-icon-shopping-cart"></i></a>
        </div>
      </div>
    </div>
  </nav>
  <div class="header-services">
    <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
    </div>
  </div>
