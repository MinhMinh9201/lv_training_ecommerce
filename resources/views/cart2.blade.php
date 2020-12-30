@extends('layout.main')

@section('content')
<div class="ps-content pt-80 pb-80">
    <div class="ps-container">
      <div class="ps-cart-listing">
        <table class="table ps-cart__table" id="cart-body">

        </table>
        <div class="row row-pb-lg">
            <div class="col-md-12">
                <div class="total-wrap">
                    <div class="row">
                        <div class="col-sm-8">
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="total" id="cart-price">

                            </div>
                            <p class="mt-4">
                                <a href="{{url('cart-checkout.html')}}"class="btn btn-info">Checkout</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>Related Products</h2>
            </div>
        </div>
        <div class="row" id="cart-related">

        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        var products = JSON.parse(Cookies.get('cart-products') ?? "[]");
        var quantities = JSON.parse(Cookies.get('cart-quantities') ?? "[]");
        refresh(products, quantities);
        related(products, quantities);
    });
    function related(products, quantities){
        $.ajax({
            url: '{{url("cart.html/related")}}',
            method: 'GET',
            data: {
                'products' : products,
                'quantities' : quantities
            },
            success: function(data){
                $('#cart-related').html(data);
            },
            error: function(error){
                console.log(error);
            }
        });
    }
    function removeCart(id){

        var products = JSON.parse(Cookies.get('cart-products') ?? "[]");
        var quantities = JSON.parse(Cookies.get('cart-quantities') ?? "[]");
        var index = products.indexOf(id);

        if (index > -1) {
            products.splice(index, 1);
            quantities.splice(index, 1);
        }

        Cookies.set('cart-products', "[" + products + "]", { expires: 60});
        Cookies.set('cart-quantities', "[" + quantities + "]", { expires: 60});
        $('#span-cart').text(products.length);

        refresh(products, quantities);
        related(products, quantities);
        return false;
    }
    // function changeCart(id, quantity) {
    //     if(quantity == 0){
    //         removeCart(id);
    //         return;
    //     }

    //     var products = JSON.parse(Cookies.get('cart-products') ?? "[]");
    //     var quantities = JSON.parse(Cookies.get('cart-quantities') ?? "[]");
    //     var index = products.indexOf(id);

    //     if (index > -1) {
    //         quantities[index] = quantity;
    //     }

    //     Cookies.set('cart-products', "[" + products + "]", { expires: 60});
    //     Cookies.set('cart-quantities', "[" + quantities + "]", { expires: 60});

    //     refresh(products, quantities);
    //     related(products, quantities);
    //     return false;
    // }
    function refresh(products, quantities){
        $.ajax({
            url: '{{url("cart.html/products")}}',
            method: 'GET',
            data: {
                'products' : products,
                'quantities' : quantities
            },
            success: function(data){
                $('#cart-body').html(data);
            },
            error: function(error){
                console.log(error);
            }
        });
        $.ajax({
            url: '{{url("cart.html/price-total")}}',
            method: 'GET',
            data: {
                'products' : products,
                'quantities' : quantities
            },
            success: function(data){
                $('#cart-price').html(data);
            },
            error: function(error){
                console.log(error);
            }
        });
    }
</script>
@endsection
