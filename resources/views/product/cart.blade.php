<!-- làm sạch float khi qua khối khách với clear:both -->

@extends('layouts.master')

@section('title')
<title>Show Cart</title>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('elessi_custom/fontawesome-free-5.12.1-web/css/all.min.css')}}">
         {{-- <link rel="stylesheet" type="text/css" href="{{asset('elessi_custom/owlcarousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('elessi_custom/owlcarousel/owl.theme.default.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('elessi_custom/slider_header.css')}}"> --}}

<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('elessi_custom/index.css')}}">



@endsection

@section('js')
{{-- <script type="text/javascript" src="{{asset('elessi_custom/owlcarousel/owl.carousel.min.js')}}"></script> --}}

<script src="{{asset('elessi_custom/index.js')}}"></script>
<script src="{{asset('assets/bootstrap/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/popper.min.js')}}"></script>


@endsection


@section('content')

<div class="cart-show">
    {{-- start tab product --}}
<div class="trendy-tab-block-wrap">
    
    {{-- begin tap title --}}
    <div class="trendy-item-wrap" style="margin-bottom: 30px">
       <div class="trendy-item-wrap-title">
           <h1>Giỏ hàng</h1>
       </div>
      
   </div>
{{-- end tap title --}}    

<div class="container" >   
   @include('product.components.cart_component')
</div>
</div>
</div>



@endsection




