@extends('layouts.app')

@section('content')
<div id="pricing" class="pricing-tables">
    <div class="container">
        <div class="row">
        <div class="icon">
              <img src="{{ secure_asset('assets/images/pricing-table-01.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ secure_asset('assets/js/owl-carousel.js') }}"></script>
<script src="{{ secure_asset('assets/js/animation.jss') }}"></script>
<script src="{{ secure_asset('assets/js/imagesloaded.jss') }}"></script>
<script src="{{ secure_asset('assets/js/popup.jss') }}"></script>
<script src="{{ secure_asset('assets/js/custom.jss') }}"></script>
@endsection