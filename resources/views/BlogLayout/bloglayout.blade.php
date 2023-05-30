<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/Kinx/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 11:34:14 GMT -->
<head>
<title>Kinx </title>
<meta charset="UTF-8">
<meta name="description" content=" Kinx | eCommerce Template">
<meta name="keywords" content="Kinx, eCommerce, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="{{asset('blog/img/favicon.ico')}}" rel="shortcut icon" />

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

<link rel="stylesheet" href="{{asset('blog/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('blog/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('blog/css/flaticon.css')}}" />
<link rel="stylesheet" href="{{asset('blog/css/slicknav.min.css')}}" />
<link rel="stylesheet" href="{{asset('blog/css/jquery-ui.min.css')}}" />
<link rel="stylesheet" href="{{asset('blog/css/owl.carousel.min.css')}}" />
<link rel="stylesheet" href="{{asset('blog/css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('blog/css/style.css')}}" />
<link rel="stylesheet" href="{{asset('blog/css/mine.css')}}" />
<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<script nonce="8342f2d5-c5ae-4bdf-82cc-4e2c042ce6d6">(function(w,d){!function(bv,bw,bx,by){bv[bx]=bv[bx]||{};bv[bx].executed=[];bv.zaraz={deferred:[],listeners:[]};bv.zaraz.q=[];bv.zaraz._f=function(bz){return function(){var bA=Array.prototype.slice.call(arguments);bv.zaraz.q.push({m:bz,a:bA})}};for(const bB of["track","set","debug"])bv.zaraz[bB]=bv.zaraz._f(bB);bv.zaraz.init=()=>{var bC=bw.getElementsByTagName(by)[0],bD=bw.createElement(by),bE=bw.getElementsByTagName("title")[0];bE&&(bv[bx].t=bw.getElementsByTagName("title")[0].text);bv[bx].x=Math.random();bv[bx].w=bv.screen.width;bv[bx].h=bv.screen.height;bv[bx].j=bv.innerHeight;bv[bx].e=bv.innerWidth;bv[bx].l=bv.location.href;bv[bx].r=bw.referrer;bv[bx].k=bv.screen.colorDepth;bv[bx].n=bw.characterSet;bv[bx].o=(new Date).getTimezoneOffset();if(bv.dataLayer)for(const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ,bK)=>({...bJ[1],...bK[1]})))))zaraz.set(bI[0],bI[1],{scope:"page"});bv[bx].q=[];for(;bv.zaraz.q.length;){const bL=bv.zaraz.q.shift();bv[bx].q.push(bL)}bD.defer=!0;for(const bM of[localStorage,sessionStorage])Object.keys(bM||{}).filter((bO=>bO.startsWith("_zaraz_"))).forEach((bN=>{try{bv[bx]["z_"+bN.slice(7)]=JSON.parse(bM.getItem(bN))}catch{bv[bx]["z_"+bN.slice(7)]=bM.getItem(bN)}}));bD.referrerPolicy="origin";bD.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(bv[bx])));bC.parentNode.insertBefore(bD,bC)};["complete","interactive"].includes(bw.readyState)?zaraz.init():bv.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>

<div id="preloder">
<div class="loader"></div>
</div>

<header class="header-section">
<div class="header-top">
<div class="container">
<div class="row">
<div class="col-lg-2 text-center text-lg-left">

<a href="/" class="site-logo">
<img src="{{asset('blog/img/X_origin5.png')}}" alt="">
</a>
</div>
<div class="col-xl-6 col-lg-5">
<form action='/' class="header-search-form">
<input type="text" placeholder="Search on Kinx (Dog Name, Dog Type, Breed)...." name='search'>
<button><i class="flaticon-search"></i></button>
</form>
</div>
<div class="col-xl-4 col-lg-5">
<div class="user-panel">
<div class="up-item">

@if(session('loggedUser'))
<i><a href="/logout">Sign Out</a> </i>
<i><a href="/dashboard">My account</a> </i>
 @else

<i class="flaticon-profile"><a href="/register">Create Account</a></i> or
<i class="flaticon-profile"><a href="/login">Login</a></i>
  @endif

</div>
<div class="up-item">
<div class="shopping-card">
<i class="flaticon-bag"></i>
<a href='/cart'>
  <span>{{$count}}</span>
</a>
</div>
<a href="/cart">Shopping Cart</a>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</nav>
</header>

<main>
    @yield('blog')
</main>


<section class="footer-section">
<div class="container">
<div class="footer-logo text-center">
<a href="/"><img src="{{asset('blog/img/logo-light.png')}}" alt=""></a>
</div>
<div class="row">
<div class="col-lg-3 col-sm-6">
<div class="footer-widget about-widget">
<h2>About</h2>
<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
<img src="img/cards.png" alt="">
</div>
</div>
<div class="col-lg-3 col-sm-6">

</div>
<div class="col-lg-3 col-sm-6">
<div class="footer-widget about-widget">
<h2>Latest Products</h2>
@foreach($latest as $latestProduct)

<div class="fw-latest-post-widget">
<div class="lp-item">
<div class="lp-thumb set-bg" data-setbg="{{asset('cover/'.$latestProduct->Image)}}"></div>
<div class="lp-content">
<h6>trending</h6>
<span>{{$latestProduct->created_at}}</span>
<a href="/product/{{$latestProduct->id}}" class="readmore">Read More</a>
</div>
</div>
</div>
@endForeach
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="footer-widget contact-widget">
<h2>Contact Us</h2>
<div class="con-info">
<span>C.</span>
<p>Your Company Ltd </p>
</div>
<div class="con-info">
<span>B.</span>
<p>Nigeria </p>
</div>
<div class="con-info">
<span>T.</span>
<p>+2348162942636</p>
</div>

</div>
</div>
</div>
</div>
</div>
<div class="social-links-warp">
<div class="container">
<div class="social-links">
<a href="#" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
<a href="#" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
<a href="#" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
</div>

<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>

</div>
</div>
</section>


<script src="{{asset('blog/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('blog/js/bootstrap.min.js')}}"></script>
<script src="{{asset('blog/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('blog/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('blog/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('blog/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('blog/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('blog/js/main.js')}}"></script>
<script src="{{asset('blog/js/my.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://checkout.flutterwave.com/v3.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


</body>

</html>

