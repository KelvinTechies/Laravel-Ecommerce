@extends('bloglayout.bloglayout')

@section('blog')

<iv class="page-top-info">
<div class="container">
<h4>Your cart</h4>
<div class="site-pagination">
<a href="#">Home</a> /
<a href="#">Your cart</a>
</div>
</div>
</div>

@if(Session::get('good'))
<div class="site-btn">
  {{ Session::get('good') }}
</div>
@endif
<section class="checkout-section spad">
<div class="container">
<div class="row">
<div class="col-lg-8 order-2 order-lg-1">
<form  action='/order' method="POST"  class="checkout-form">
  @csrf
<div class="cf-title">Billing Address</div>
<div class="row">
<div class="col-md-7">
<p>*Billing Information</p>
</div>
<div class="col-md-5">
<div class="cf-radio-btns address-rb">

</div>
</div>
</div>
<div class="row address-inputs">
<div class="col-md-12">
<input type="text" placeholder="Address" required name='address'>
<input type="text" placeholder="Address line 2" required name='address2'>
<input type="text" placeholder="Country" required name='country'>
</div>
<div class="col-md-6">
<input type="text" placeholder="Zip code" required name='zip'>
</div>
<div class="col-md-6">
    <input type="text" placeholder="fullName" id='name' readonly value={{ $user->FullName }}  name='name'>
    </div>

    <div class="col-md-6">
        <input type="email" placeholder="Email" id='email' readonly value={{ $user->Email }} name='email'>
        </div>
<div class="col-md-6">
<input type="text" placeholder="Phone no." required id='fone' name='fone'>
</div>
</div>
<button class="site-btn submit-order-btn">Place Order</button>
</form>
</div>
<div class="col-lg-4 order-1 order-lg-2">
<div class="checkout-cart">
<h3>Your Cart</h3>
<ul class="product-list">
    @foreach($checkOut as $check)
<li>
<div class="pl-thumb"><img src="{{'cover/'. $check['products_models']['Image']}}" alt=""></div>
<h6>{{$check['products_models']['DogName']}}</h6>
<p>${{$check['products_models']['Price']}}.00</p>
</li>
@endforeach
</ul>
<ul class="price-list">
<li>Total<span>$99.90</span></li>
<li>Shipping<span>free</span></li>
<li class="total">Total<span>$99.90</span></li>
</ul>
</div>
</div>
</div>
</div>
</section>

<script src=''>



{{-- <script>
        function sumbitCheckOut(form){

            const name= document.querySelector('#name').value
            const email= document.querySelector('#email').value
            const fone= document.querySelector('#fone').value
            const amount= document.querySelector('#amount').value
            // console.log(name, email, amount, fone)
    // var ajax = new XMLHttpRequest()

    // ajax.open('POST', form.getAttribute("action"),true)
    // ajax.onreadystatechange=function(){
    //     if(this.readyState == 4 && this.status ==200){
    //         var data =  JSON.parse(this.responseText)
    //         alert(data.status - '-' - data.message)
    //     }
    //     if(this.status==500){
    //         alert(this.responseText)
    //     }
    // }
    // var formData= new FormData(form )
    //     ajax.send(formData)
    makePayment(amount, email, fone, name)
    return false
}

    function makePayment(amount, email, fone, name) {
      FlutterwaveCheckout({
        public_key: "FLWPUBK_TEST-18018d8f44d09d57d9826f0b5a936cad-X",
        tx_ref: "RX1_{{subStr(rand(0, time()), 0, 7)}}",
        amount ,
        currency: "NGN",
        payment_options: "",
        callback: function(payment) {
          // Send AJAX verification request to backend
        //   verifyTransactionOnBackend(payment.id);
        console.log(payment)
        },
        onclose: function() {
        //   if (incomplete || window.verified === false) {
        //     document.querySelector("#payment-failed").style.display = 'block';
        //   } else {
        //     document.querySelector("form").style.display = 'none';
        //     if (window.verified == true) {
        //       document.querySelector("#payment-success").style.display = 'block';
        //     } else {
        //       document.querySelector("#payment-pending").style.display = 'block';
        //     }
        //   }
        },
        // meta: {
        //   consumer_id: 23,
        //   consumer_mac: "92a3-912ba-1192a",
        // },
        customer: {
          email,
          fone,
          name,
        },
        customizations: {
          title: "KinxDogz",
          description: "Payment for an awesome cruise",
          logo: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQInmMNPi-PMRp8TuuQCvXLR5EcoO9-a7T-yQ&usqp=CAU",
        },
      });
    }
  
    function verifyTransactionOnBackend(transactionId) {
      // Let's just pretend the request was successful
      setTimeout(function() {
        window.verified = true;
      }, 200);
    }
  </script> --}}
@endSection