@extends('BlogLayout.bloglayout')

@Section('blog')


<section class="hero-section">
    <div class="hero-slider owl-carousel">
    <div class="hs-item set-bg" data-setbg="{{asset('blog/img/Germain1.jpg') }}">
    <div class="container">
    <div class="row">
    <div class="col-xl-6 col-lg-7 text-white">
    <span>New Arrivals</span>
    <h2>denim jackets</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
    <a href="#" class="site-btn sb-line">DISCOVER</a>
    </div>
    </div>
    <div class="offer-card text-white text-center" >
    <p>SHOP NOW</p>
    </div>
    </div>
    </div>
    <div class="hs-item set-bg" data-setbg="{{asset('blog/img/rot1.jpg')}}">
    <div class="container">
    <div class="row">
    <div class="col-xl-6 col-lg-7 text-white">
    <span>New Arrivals</span>
    <h2>denim jackets</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
    <a href="#" class="site-btn sb-line">DISCOVER</a>
    </div>
    </div>
    <div class="offer-card text-white text-center" >
    <p>SHOP NOW</p>
    </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="slide-num-holder" id="snh-1"></div>
    </div>
    </section>
    
    
    <section class="top-letest-product-section">
    <div class="container">
    <div class="section-title">
    <h2>LATEST PRODUCTS</h2>
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
    
    
    <section class="product-filter-section">
    <div class="container">
    <div class="section-title">
    <h2> PRODUCTS</h2>
    </div>
    {{-- <ul class="product-filter-menu">
    <li><a href="#">TOPS</a></li>
    <li><a href="#">JUMPSUITS</a></li>
    <li><a href="#">LINGERIE</a></li>
    <li><a href="#">JEANS</a></li>
    <li><a href="#">DRESSES</a></li>
    <li><a href="#">COATS</a></li>
    <li><a href="#">JUMPERS</a></li>
    <li><a href="#">LEGGINGS</a></li>
    </ul> --}}
    <div class="row">
        @if($Products)

        @foreach($Products as $Product)
    <div class="col-lg-3 col-sm-6">
    <div class="product-item">
    <div class="pi-pic" id='myOwn'>
    <img src="{{asset('cover/'.$Product->Image)}}" alt="">
    <div class="pi-links">
    <a href="/product/{{ $Product->id }}" class="add-card"><i class="flaticon-bag"></i><span>Details</span></a>
    <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
    </div>
    </div>
    <div class="pi-text">
    <h6>${{$Product->Price}}.00</h6>
    
    <a href='/product/{{ $Product->id }}'><p>{{$Product->DogName}} </p></a>
    </div>
    </div>
    </div>
    @endforeach
    @else
    
    <p>No Products Found</p>
    @endif

    </div>
    <div class="text-center pt-5">
    <button class="site-btn sb-line sb-dark">LOAD MORE</button>
    </div>
    </div>
    </section>
    
    
 
    

@endsection