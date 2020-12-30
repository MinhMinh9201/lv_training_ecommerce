@extends('layout.main2')

@section('content')
<main class="ps-main">
    <div class="ps-checkout pt-80 pb-80">
      <div class="ps-container">
        <form class="ps-checkout__form" action="{{url("cart-complete.html")}}">
            @csrf
          <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                  <div class="ps-checkout__billing">
                    <h3>Billing Detail</h3>
                          <div class="form-group form-group--inline">
                            <label>Name<span>*</span>
                            </label>
                            <input class="form-control" type="text" name="name" required>
                          </div>
                          <div class="form-group form-group--inline">
                            <label>Phone<span>*</span>
                            </label>
                            <input class="form-control" type="number" name="phone" required>
                          </div>
                          <div class="form-group form-group--inline">
                            <label>Email<span>*</span>
                            </label>
                            <input class="form-control" type="text" name="email" required>
                          </div>
                          <div class="form-group form-group--inline">
                            <label>Address<span>*</span>
                            </label>
                            <input class="form-control" type="text" name="address" required>
                          </div>
                          <div class="form-group form-group--inline">
                            <label>Note something:<span>*</span>
                            </label>
                            <input class="form-control" type="text" name="note" required>
                          </div>
                          <input id="input-products" hidden type="text" class="form-control" name="products">
                            <input id="input-quantities" hidden type="text" class="form-control" name="quantities">
                            <div class="form-group">
                                <button class="form-control btn-secondary btn" style="border-radius: 30px">Complete</button>
                            </div>
                        </div>
                    </div>
          </div>
        </form>
      </div>
    </div>
    <div class="ps-subscribe">
      <div class="ps-container">
        <div class="row">
              <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
              </div>
              <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                <form class="ps-subscribe__form" action="do_action" method="post">
                  <input class="form-control" type="text" placeholder="">
                  <button>Sign up now</button>
                </form>
              </div>
              <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                <p>...and receive  <span>$20</span>  coupon for first shopping.</p>
              </div>
        </div>
      </div>
    </div>
    <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg">
      <div class="ps-footer__content">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                  <aside class="ps-widget--footer ps-widget--info">
                    <header><a class="ps-logo" href="index.html"><img src="images/logo-white.png" alt=""></a>
                      <h3 class="ps-widget__title">Address Office 1</h3>
                    </header>
                    <footer>
                      <p><strong>460 West 34th Street, 15th floor, New York</strong></p>
                      <p>Email: <a href='mailto:support@store.com'>support@store.com</a></p>
                      <p>Phone: +323 32434 5334</p>
                      <p>Fax: ++323 32434 5333</p>
                    </footer>
                  </aside>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                  <aside class="ps-widget--footer ps-widget--info second">
                    <header>
                      <h3 class="ps-widget__title">Address Office 2</h3>
                    </header>
                    <footer>
                      <p><strong>PO Box 16122 Collins  Victoria 3000 Australia</strong></p>
                      <p>Email: <a href='mailto:support@store.com'>support@store.com</a></p>
                      <p>Phone: +323 32434 5334</p>
                      <p>Fax: ++323 32434 5333</p>
                    </footer>
                  </aside>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                  <aside class="ps-widget--footer ps-widget--link">
                    <header>
                      <h3 class="ps-widget__title">Find Our store</h3>
                    </header>
                    <footer>
                      <ul class="ps-list--link">
                        <li><a href="#">Coupon Code</a></li>
                        <li><a href="#">SignUp For Email</a></li>
                        <li><a href="#">Site Feedback</a></li>
                        <li><a href="#">Careers</a></li>
                      </ul>
                    </footer>
                  </aside>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                  <aside class="ps-widget--footer ps-widget--link">
                    <header>
                      <h3 class="ps-widget__title">Get Help</h3>
                    </header>
                    <footer>
                      <ul class="ps-list--line">
                        <li><a href="#">Order Status</a></li>
                        <li><a href="#">Shipping and Delivery</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Payment Options</a></li>
                        <li><a href="#">Contact Us</a></li>
                      </ul>
                    </footer>
                  </aside>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                  <aside class="ps-widget--footer ps-widget--link">
                    <header>
                      <h3 class="ps-widget__title">Products</h3>
                    </header>
                    <footer>
                      <ul class="ps-list--line">
                        <li><a href="#">Shoes</a></li>
                        <li><a href="#">Clothing</a></li>
                        <li><a href="#">Accessries</a></li>
                        <li><a href="#">Football Boots</a></li>
                      </ul>
                    </footer>
                  </aside>
                </div>
          </div>
        </div>
      </div>
      <div class="ps-footer__copyright">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                  <p>&copy; <a href="#">SKYTHEMES</a>, Inc. All rights Resevered. Design by <a href="#"> Alena Studio</a></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                  <ul class="ps-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        var products = JSON.parse(Cookies.get('cart-products') ?? "[]");
        var quantities = JSON.parse(Cookies.get('cart-quantities') ?? "[]");
        $("#input-products").val(products);
        $("#input-quantities").val(quantities);
    });
</script>
@endsection
