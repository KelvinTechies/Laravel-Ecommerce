@extends('bloglayout.bloglayout')

@section('blog')

<div class="page-top-info">
        <div class="container">
        <h4>Category PAge</h4>
        <div class="site-pagination">
        <a href="#">Home</a> /
        <a href="#">Shop</a>
        </div>
        </div>
        </div>
        
        
        <section class="product-section">
        <div class="container">
        <div class="back-link">
        <a href="/"> &lt;&lt; Back to Category</a>
        </div>
        <div class="row">
        <div class="col-lg-6">
        <div class="product-pic-zoom">
        <img class="product-big-img" src="{{asset('cover/'.$Product->Image)}}" alt="">
        </div>
        <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
        <div class="product-thumbs-track">
            @foreach($Product->ImageModels as $img)
        <div class="pt active" data-imgbigurl="{{asset('images/'.$img->Image)}}" id='ownBx'><img src="{{asset('images/'.$img->Image)}}" alt=""></div>
        @endforeach
        
        </div>
        </div>
        </div>
        @if(Session::get('msg'))
        
        <div class="site-btn">
            {{ Session::get('msg') }}
        </div>
        @endIf
        <div class=" col-lg-6 product-details">
              
        <form action='/add_to_cart' method='POST'onsubmit="return onsubmitForm(this)" id='form'>
            @csrf
            
        <h2 class="p-title">{{$Product->DogName}}</h2>
        <h3 class="p-price">${{$Product->Price}}.00</h3>
        <h4 class="p-stock">Available: <span>{{$Product->Quantity >0 ? $Product->Quantity:"Out Of Stock"}} </span></h4>
        <div class="p-rating">
        <i class="fa fa-star-o"></i>
        <i class="fa fa-star-o"></i>
        <i class="fa fa-star-o"></i>
        <i class="fa fa-star-o"></i>
        <i class="fa fa-star-o fa-fade"></i>
        </div>
        <div class="p-review">
        <a href="#">3 reviews</a>|<a href="#">Add your review</a>
        </div>
        
        <div class="quantity">
        <p>Quantity</p>
        <div class="pro-qty"><input type="text" value="1" id='qty' name='qty'></div>
        </div>
    <div class=""><input type="text" value="{{$Product->id}}" id='proId' hidden name='proId'></div>        
    {{-- <div class=""><input type="text" value="{{$userData->id}}" id='uid' hidden name='userId'></div>         --}}
    <div class=""><input type="text" value="{{$Product->DogName}}" id='DogName' hidden name='DogName'></div>        
            <input type='submit' class="site-btn b" name='addToCart'  value='Add to Cart'>
        </form>
        <div id="accordion" class="accordion-area">
        <div class="panel">
        <div class="panel-header" id="headingOne">
        <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Description</button>
        </div>
        <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="panel-body">
        <p>{{$Product->Description}}.</p>
       
        </div>
        </div>
        </div>
        <div class="panel">
        <div class="panel-header" id="headingThree">
        <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
        </div>
        <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="panel-body">
        <h4>7 Days Returns</h4>
        <p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
        
        </div>
        </div>
        </div>
        </div>
        <div class="social-sharing">
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        </div>
        </div>
        </div>
        </section>
        <script>
        function onsubmit(form){
    var ajax = new XMLHttpRequest()

    ajax.open('POST', form.getAttribute("action"),true)
    ajax.onreadystatechange=function(){
        if(this.readyState == 4 && this.status ==200){
            var data =  JSON.parse(this.responseText)
            alert(data.status - '-' - data.message)
        }
        if(this.status==500){
            alert(this.responseText)
        }
    }
    var formData= new FormData(form )
        ajax.send(formData)
    return false
}
        </script>
 
@endsection

