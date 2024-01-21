@extends('layouts.app')

@section('content')
<style>
    <link href="{{ secure_asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/templatemo-chain-app-dev.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/animated.css') }}">
     <link rel="stylesheet" href="{{ secure_asset('assets/css/owl.css') }}">
</style>

<div id="pricing" class="pricing-tables">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4>We Have The Best Pre-Order <em>Prices</em> You Can Get</h4>
                    <img src="{{ secure_asset('assets/images/heading-line-dec.png') }}" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut
                        labore et dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-item-regular">
                    <span class="price">$12</span>
                    <h4>Standard Plan App</h4>
                    <div class="icon">
                        <img src="{{ secure_asset('assets/images/pricing-table-01.png') }}" alt="">
                    </div>
                    <ul>
                        <li>Logirem Ipsum Dolores</li>
                        <li>20 TB of Storage</li>
                        <li class="non-function">Life-time Support</li>
                        <li class="non-function">Premium Add-Ons</li>
                        <li class="non-function">Fastest Network</li>
                        <li class="non-function">More Options</li>
                    </ul>
                    <div class="border-button">
                        <a href="#">Purchase This Plan Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-item-pro">
                    <span class="price">$25</span>
                    <h4>Business Plan App</h4>
                    <div class="icon">
                        <img src="{{ secure_asset('assets/images/pricing-table-01.png') }}" alt="">
                    </div>
                    <ul>
                        <li>Lorem Ipsum Dolores</li>
                        <li>50 TB of Storage</li>
                        <li>Life-time Support</li>
                        <li>Premium Add-Ons</li>
                        <li class="non-function">Fastest Network</li>
                        <li class="non-function">More Options</li>
                    </ul>
                    <div class="border-button">
                        <a href="#">Purchase This Plan Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-item-regular">
                    <span class="price">$66</span>
                    <h4>Premium Plan App</h4>
                    <div class="icon">
                        <img src="{{ secure_asset('assets/images/pricing-table-01.png') }}" alt="">
                    </div>
                    <ul>
                        <li>Lorem Ipsum Dolores</li>
                        <li>120 TB of Storage</li>
                        <li>Life-time Support</li>
                        <li>Premium Add-Ons</li>
                        <li>Fastest Network</li>
                        <li>More Options</li>
                    </ul>
                    <div class="border-button">
                        <a href="#">Purchase This Plan Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ secure_asset('assets/js/owl-carousel.js') }}"></script>
<script src="{{ secure_asset('assets/js/animation.js') }}"></script>
<script src="{{ secure_asset('assets/js/imagesloaded.js') }}"></script>
<script src="{{ secure_asset('assets/js/popup.js') }}"></script>
<script src="{{ secure_asset('assets/js/custom.js') }}"></script>
@endsection