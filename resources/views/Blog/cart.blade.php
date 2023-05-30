@extends('bloglayout.bloglayout')

@section('blog')

<div class="page-top-info">
    <div class="container">
    <h4>Your cart</h4>
    <div class="site-pagination">
    <a href="#">Home</a> /
    <a href="#">Your cart</a>
    </div>
    </div>
    </div>
    
    
    <section class="cart-section spad">
    <div class="container">
    <div class="row">
    <div class="col-lg-8">
    <div class="cart-table">
    <h3>Your Cart</h3>
    <div class="cart-table-warp">
    <table>
    <thead>
    <tr>
    <th class="product-th">Product</th>
    <th class="quy-th">Quantity</th>
    <th class="quy-th">Color</th>
    <th class="total-th">Price</th>
    <th class="total-th">Total price</th>
    </tr>
    </thead>
    <tbody>
        @foreach($showCarts as $cart)
    <tr>
    <td class="product-col">
    <img src="{{asset('cover/'. $cart['products_models']['Image'])}}" alt="">
    <div class="pc-title">
    <h4>{{$cart['products_models']['DogName']}}</h4>
    {{-- <p>{{$cart['products_models']['Price']}}</p> --}}
    </div>
    </td>
    <td class="quy-col">
    <div class="quantity">
        <span>{{$cart['products_models']['Quantity'] }}</span>
    </div>
    </div>
    </td>
    </div>
    </td>
<td class="total-col"><small>{{$cart['products_models']['Color']}}</small></td>
   
<td class="total-col"><span>${{$cart['products_models']['Price']}}.00</span></td>
    <td class="size-col"><span>${{$cart['products_models']['Price']*$cart['products_models']['Quantity']}}.00</span></td>

    </tr>
@endforeach
    </tbody>
    </table>
    </div>
    <div class="total-cost">
    <h6>Total <span>$99.90</span></h6>
    </div>
    </div>
    </div>
    <div class="col-lg-4 card-right">

    <a href="/checkout" class="site-btn">Proceed to checkout</a>
    <a href="/" class="site-btn sb-dark">Continue shopping</a>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="related-product-section">
    <div class="container">
    <div class="section-title text-uppercase">
    <h2>Continue Shopping</h2>
    </div>
    
    <div class="product-slider owl-carousel">
            {{-- <div class="product-item">
            <div class="pi-pic">
            <img src="{{asset('blog/img/product/1.jpg')}}" alt="">
            <div class="pi-links">
            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
            </div>
            <div class="pi-text">
            <h6>$35,00</h6>
            <p>Flamboyant Pink Top </p>
            </div>
            </div> --}}
            {{-- <div class="product-item"> --}}
        @foreach($latest as $latestProduct)
                
            
            <div class="product-item">
            <div class="pi-pic">
                <div id='mydiv'>
                        <img src="{{asset('cover/'.$latestProduct->Image)}}" alt="">
        
                </div>
            <div class="pi-links">
            <a href="/product/{{ $latestProduct->id }}" class="add-card"><i class="flaticon-bag"></i><span>Details</span></a>
            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
            </div>
            <div class="pi-text">
            <h6>${{$latestProduct->Price}}.00</h6>
            <p>{{$latestProduct->DogName}}</p>
            </div>
            </div>
            @endforeach
            </div>
            </div>
    </section>
    

@endsection