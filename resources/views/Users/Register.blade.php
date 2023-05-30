@extends('UserAppLayOut.layout')

@section('content')
<div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="p-3">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <div class="auth-logo">
                        <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="22">
                            </span>
                        </a>
    
                        <a href="index.html" class="logo logo-light text-center">
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="22">
                            </span>
                        </a>
                    </div>
                </div>

                <!-- title-->
                <h4 class="mt-0">Sign Up</h4>
                <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute</p>

                <!-- form -->
                <form action="/register" method='post'>
                    @csrf
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input class="form-control" type="text" id="fullname" name='fullname' placeholder="Enter your name" >
                     </div>
                     <div>
                            @error('fullname')
                            <p class="text-danger">{{$message}}</p>
                            @endError
                     </div>

                    
                    <div class="mb-3">
                        <label for="username" class="form-label">UserName</label>
                        <input class="form-control" type="text"  name='username' placeholder="Enter your UserName" >
                    </div>
                    <div>
                            @error('username')
                            <p class="text-danger">{{$message}}</p>
                            @endError
                     </div>

                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Email address</label>
                        <input class="form-control" type="email" name='email' id="emailaddress"  placeholder="Enter your email">
                    </div>
                    <div>
                            @error('email')
                            <p class="text-danger">{{$message}}</p>
                            @endError
                     </div>
                     <div class="mb-3">
                            <label for="gender" class="form-label">Male</label>
                            <input  type="radio" name='gender'  value="male">
                            <label for="gender" class="form-label">Female</label>
                            <input  type="radio" name='gender' value="female">
                        </div>
                        <div>
                                @error('gender')
                                <p class="text-danger">{{$message}}</p>
                                @endError
                         </div>
                         {{-- <div class="mb-3">
                                <label for="Gender" class="form-label">F</label>
                                <input  type="radio" name='gender'>
                            </div> --}}
                            {{-- <div>
                                    @error('gender')
                                    <p class="text-danger">{{$message}}</p>
                                    @endError
                             </div> --}}
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" name='password' class="form-control" placeholder="Enter your password">
                            <div class="input-group-text" data-password="false">
                                <span class="password-eye"></span>
                            </div>           
                        </div>
                    </div>
                    <div>
                            @error('password')
                            <p class="text-danger">{{$message}}</p>
                            @endError
                     </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Confirm Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" name='password_confirmation' class="form-control" placeholder="Enter your password">
                            <div class="input-group-text" data-password="false">
                                <span class="password-eye"></span>
                            </div>         
                        </div>
                    </div>
                    <div>
                            @error('password')
                            <p class="text-danger">{{$message}}</p>
                            @endError
                     </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" name='checkBox' class="form-check-input" id="checkbox-signup">
                            <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                            @error('checkBox')
                            <p class="text-danger">{{$message}}</p>
                            @endError
                        </div>
                    </div>
                    <div class="text-center d-grid">
                        <button class="btn btn-primary waves-effect waves-light" type="submit"> Sign Up </button>
                    </div>
                    <!-- social-->
                    <div class="text-center mt-4">
                        <p class="text-muted font-16">Sign in with</p>
                        <ul class="social-list list-inline mt-3 mb-0">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </form>
                <!-- end form-->

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">Already have account? <a href="/login" class="text-muted ms-1"><b>Log In</b></a></p>
                </footer>

            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->

    <!-- Auth fluid right content -->
    <div class="auth-fluid-right text-center">
        <div class="">
            <h2 class="mb-3 text-white">I love KinxShop</h2>
            <p class="lead"><i class="mdi mdi-format-quote-open"></i> . <i class="mdi mdi-format-quote-close"></i>
            </p>
            {{-- <h5 class="text-white">
                - Fadlisaad (Kinx Admin User)
            </h5> --}}
        </div> <!-- end auth-user-testimonial-->
    </div>
    <!-- end Auth fluid right content -->
</div>
<!-- end auth-fluid-->
@endSection