
@extends('livewire.app-layout')
@section('content')
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>Surfside Media</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/theme/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    @livewireStyles
</head>
<body>

 
    <main class="main">
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="/" rel="nofollow">Home</a>                    
                        <span></span> Register
                    </div>
                </div>
            </div>
            <section class="pt-150 pb-150">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 m-auto">
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                        <div class="padding_eight_all bg-white">
                                            <div class="heading_s1">
                                                <h3 class="mb-30">Create an Account</h3>
                                            </div>                                        
                                            <form method="post" action="{{route('register')}}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" required="" name="name" placeholder="Name" :value="old('name')" required autofocus autocomplete="name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required="" name="email" placeholder="Email" :value="old('email')" required>
                                                </div>
                                                <div class="form-group">
                                                    <input required="" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                                                </div>
                                                <div class="form-group">
                                                    <input required="" type="password" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                                                </div>
                                                <div class="login_footer form-group">
                                                    <div class="chek-form">
                                                        <div class="custome-checkbox">
                                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="">
                                                            <label class="form-check-label" for="exampleCheckbox12"><span>I agree to terms &amp; Policy.</span></label>
                                                        </div>
                                                    </div>
                                                    <a href="privacy-policy.html"><i class="fi-rs-book-alt mr-5 text-muted"></i>Lean more</a>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Submit &amp; Register</button>
                                                </div>
                                            </form>                                        
                                            <div class="text-muted text-center">Already have an account? <a href="{{route('login')}}">Sign in now</a></div>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="col-lg-6">
                                <img src="assets/imgs/login.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="main">
            <section class="newsletter p-30 text-white wow fadeIn animated">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 mb-md-3 mb-lg-0">
                            <div class="row align-items-center">
                                <div class="col flex-horizontal-center">
                                    <img class="icon-email" src="assets/imgs/theme/icons/icon-email.svg" alt="">
                                    <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                                </div>
                                <div class="col my-4 my-md-0 des">
                                    <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$25 coupon for first shopping.</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <!-- Subscribe Form -->
                            <form class="form-subcriber d-flex wow fadeIn animated">
                                <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                                <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                            </form>
                            <!-- End Subscribe Form -->
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-padding footer-mid">
                <div class="container pt-15 pb-20">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="widget-about font-md mb-md-5 mb-lg-0">
                                <div class="logo logo-width-1 wow fadeIn animated">
                                    <a href="index.html"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
                                </div>
                                <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                                <p class="wow fadeIn animated">
                                    <strong>Address: </strong>562 Wellington Road
                                </p>
                                <p class="wow fadeIn animated">
                                    <strong>Phone: </strong>+1 0000-000-000
                                </p>
                                <p class="wow fadeIn animated">
                                    <strong>Email: </strong>contact@surfsidemedia.in
                                </p>
                                <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                                <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <h5 class="widget-title wow fadeIn animated">About</h5>
                            <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>                            
                            </ul>
                        </div>
                        <div class="col-lg-2  col-md-3">
                            <h5 class="widget-title wow fadeIn animated">My Account</h5>
                            <ul class="footer-list wow fadeIn animated">
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="#">View Cart</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">Track My Order</a></li>                            
                                <li><a href="#">Order</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 mob-center">
                            <h5 class="widget-title wow fadeIn animated">Install App</h5>
                            <div class="row">
                                <div class="col-md-8 col-lg-12">
                                    <p class="wow fadeIn animated">From App Store or Google Play</p>
                                    <div class="download-app wow fadeIn animated mob-app">
                                        <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active" src="assets/imgs/theme/app-store.jpg" alt=""></a>
                                        <a href="#" class="hover-up"><img src="assets/imgs/theme/google-play.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                                    <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                                    <img class="wow fadeIn animated" src="assets/imgs/theme/payment-method.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container pb-20 wow fadeIn animated mob-center">
                <div class="row">
                    <div class="col-12 mb-20">
                        <div class="footer-bottom"></div>
                    </div>
                    <div class="col-lg-6">
                        <p class="float-md-left font-sm text-muted mb-0">
                            <a href="privacy-policy.html">Privacy Policy</a> | <a href="terms-conditions.html">Terms & Conditions</a>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-lg-end text-start font-sm text-muted mb-0">
                            &copy; <strong class="text-brand">SurfsideMedia</strong> All rights reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>    
        <!-- Vendor JS-->
    <script src="{{asset ('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset ('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset ('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset ('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset ('assets/js/plugins/slick.js')}}"></script>
    <script src="{{asset ('assets/js/plugins/jquery.syotimer.min.js')}}"></script>
    <script src="{{asset ('assets/js/plugins/wow.js')}}"></script>
    <script src="{{asset ('assets/js/plugins/jquery-ui.js')}}"></script>
    <script src="{{asset ('assets/js/plugins/perfect-scrollbar.js')}}"></script>
    <script src="{{asset ('assets/js/plugins/magnific-popup.js')}}"></script>
    <script src="{{asset ('assets/js/plugins/select2.min.js')}}"></script>
    <script src="{{asset ('assets/js/plugins/waypoints.js')}}"></script>
    <script src="{{asset ('assets/js/plugins/counterup.js')}}"></script>
    <script src="{{asset ('assets/js/plugins/jquery.countdown.min.js')}}"></script>
    <script src="{{asset ('assets/js/plugins/images-loaded.js')}}"></script>
    <script src="{{asset ('assets/js/plugins/isotope.js')}}"></script>
    <script src="{{asset ('assets/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset ('assets/js/plugins/jquery.vticker-min.js')}}"></script>
    <script src="{{asset ('assets/js/plugins/jquery.theia.sticky.js')}}"></script>
    <script src="{{asset ('assets/js/plugins/jquery.elevatezoom.js')}}"></script>
    <!-- Template  JS -->
    <script src="{{asset ('assets/js/main.js?v=3.3')}}"></script>
    <script src="{{asset ('assets/js/shop.js?v=3.3')}}"></script>
    @livewireScripts
    </body>
    </html>
    @endsection
