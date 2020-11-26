<!-- làm sạch float khi qua khối khách với clear:both -->

@extends('layouts.master')

@section('title')
<title>Home Page</title>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('elessi_custom/fontawesome-free-5.12.1-web/css/all.min.css')}}">
         <link rel="stylesheet" type="text/css" href="{{asset('elessi_custom/owlcarousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('elessi_custom/owlcarousel/owl.theme.default.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('elessi_custom/slider_header.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/bootstrap.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('elessi_custom/index.css')}}">

@endsection

@section('js')
<script type="text/javascript" src="{{asset('elessi_custom/owlcarousel/owl.carousel.min.js')}}"></script>

<script src="{{asset('elessi_custom/index.js')}}"></script>
<script src="{{asset('assets/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/popper.min.js')}}"></script>

@endsection


@section('content')

@include('components.alert')

{{-- start tab product --}}
<div class="trendy-tab-block-wrap">
    
     {{-- begin tap title --}}
     <div class="trendy-item-wrap">
        <div class="trendy-item-wrap-title">
            <h1>{{$categoryNameTitle->name}}</h1>
        </div>
       
    </div>
{{-- end tap title --}}
                
            <!-- begin tab 1 -->
        <div class="row list-product" >
         

            {{-- {{dd($categoryChildrentItem->products)}} --}}
           
            @foreach ($products as $product)

           
            
                <!-- start product  -->
                {{-- <div class="trendyItem-product-item columns large-3 medium-4 small-6"> --}}
                <div class="trendyItem-product-item columns columns-flex">

                    <div class="trendyItem-product-item-wrap">
                        <div class="product-item-img-qv-add">
                            <div class="pi-img-box">
                                <a href="#">
                                    <div class="pi-img-box-main">
                                        <img src="{{config('app.base_url').$product->feature_image_path}}">
                                    </div>
                                </a>
                                {{-- <a href="#">
                                    <div class="pi-img-box-sup">
                                        <img src="{{config('app.base_url').$product->productImages[1]->image_path}}">
                                    </div>
                                </a> --}}
                            </div>
                            <div class="pi-badges-wrap">
                            <div class="badge hot-label">HOT</div>
                            </div>
    
                            <div class="pi-nav-tools">
                                <div class="pi-nav-tools-wrap">
                                    <a href="#" class="pi-heart"><i class="far fa-heart"></i></a>
                                    <a href="#" class="pi-quick-view move-left"><i class="far fa-eye"></i></a>
                                    <a href="#" class="pi-compare move-left"><i class="fas fa-sync-alt"></i></a>
                                </div>
                            </div>
                            <div class="pi-add-to-cart move-left">
                                <a href="#" class="add_to_cart" id="add_to_cart"
                            data-url="{{route('addToCart', ['id' => $product->id])}}"
                                
                                >
                                    <span>ADD TO CART</span>
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-item-info">
                            <div class="pi-info-wrap">
                                <div class="pi-info-name">
                                    <a href="#">{{$product->name}}</a>
                                </div>
                                <div class="pi-star-and-color">
                                    <div class="pi-star-and-color-wrap">
                                        <a href="#" class="pi-star">
                                            <i class="fas fa-star"></i>
                                        </a>
                                        <a href="#" class="pi-star">
                                            <i class="fas fa-star"></i>
                                        </a>
                                        <a href="#" class="pi-star">
                                            <i class="fas fa-star"></i>
                                        </a>
                                        <a href="#" class="pi-star">
                                            <i class="fas fa-star"></i>
                                        </a>
                                        <a href="#" class="pi-star">
                                            <i class="fas fa-star"></i>
                                        </a>
                                        <a href="#" class="pi-star">
                                            <i class="fas fa-star"></i>
                                        </a>
                                    </div>
                                    <div class="pi-color">
                                        <div class="pi-color-wrap">
                                            <a href="#">
                                                <span></span>
                                            </a>
                                            <a href="#">
                                                <span></span>
                                            </a>
                                            <a href="#">
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pi-info-price">
                                   {{number_format($product->price)}} <sup>vnđ</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end product  -->
            @endforeach
    
        
    
                <!-- b4-nav-tabs -->
            </div>
            <!-- end tab 1 -->
         
          
            
        </div>

</div>
        <div class="clear-float"></div>
        {{-- end tab product --}}
  



@endsection




