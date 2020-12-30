    {{-- <div class="product-name d-flex">
        <div class="one-forth text-left px-4">
            <span>Product Details</span>
        </div>
        <div class="one-eight text-center">
            <span>Price</span>
        </div>
        <div class="one-eight text-center">
            <span>Quantity</span>
        </div>
        <div class="one-eight text-center">
            <span>Total</span>
        </div>
        <div class="one-eight text-center px-4">
            <span>Remove</span>
        </div>
    </div>
@for ($i = 0; $i < count($products); $i++)
    <div class="product-cart d-flex">
        <div class="one-forth">
            <div class="product-img" style="background-image: url(images/item-6.jpg);">
            </div>
            <div class="display-tc">
                <h3>{{$products[$i]['title']}}</h3>
            </div>
        </div>
        <div class="one-eight text-center">
            <div class="display-tc">
                <span class="price">${{$products[$i]['price']}}</span>
            </div>
        </div>
        <div class="one-eight text-center">
            <div class="display-tc">
                <input type="text" name="quantity" class="form-control input-number text-center" value="{{$quantities[$i]}}" min="1" max="100">
            </div>
        </div>
        <div class="one-eight text-center">
            <div class="display-tc">
                <span class="price">${{$products[$i]['price'] * $quantities[$i]}}</span>
            </div>
        </div>
        <div class="one-eight text-center">
            <div class="display-tc">
                <a onclick="removeCart({{$products[$i]['id']}})" class="closed"></a>
            </div>
        </div>
    </div>
@endfor --}}

<thead>
    <tr>
      <th>All Products</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Total</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @for ($i = 0; $i < count($products); $i++)
    <tr>
      <td><a class="ps-product__preview" href="product-detail.html"><img class="mr-15" src="{{$products[$i]['image_source']}}" alt="">{{$products[$i]['title']}}</a></td>
      <td>${{$products[$i]['price']}}</td>
      <td>
        <div class="form-group--number">
          <button class="minus"><span>-</span></button>
          <input class="form-control" type="text" value="{{$quantities[$i]}}" min="1" max="100">
          <button class="plus"><span>+</span></button>
        </div>
      </td>
      <td>${{$products[$i]['price'] * $quantities[$i]}}</td>
      <td>
        <div>
            <a class="ps-remove" onclick="removeCart({{$products[$i]['id']}})"></a>
        </div>
      </td>
    </tr>
  </tbody>
  @endfor
