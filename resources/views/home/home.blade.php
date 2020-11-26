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
    
    {{-- <div class="container-fluid large-12"> --}}

     @include('components.alert')
        @include('home.components.slider')

@include('home.components.tabs')


    @include('home.components.recommend')


 {{-- begin blog --}}
    <div class="divide"></div>
    <div class="blog-latest">
        <div class="blog-latest-wrap">
            <div class="row">
                <div class="blog-latest-title">
                    <h1>Latest blog</h1>
                    <span>The freshest and most exciting news</span>
                </div>
            </div>
            <div class="row">
                <div class="owl-one owl-carousel owl-theme">
                    <div class="blog-latest item">
                        <!-- Start blog 1 -->
                        <div class="blog-latest-item">
                            <div class="bli-box-img">
                                <div class="bli-box-img-wrap">
                                    <img src="{{asset('images/bag-blog-2-380x380.jpg')}}">
                                </div>
                            </div>
                            <div class="bli-box-content">
                                <p class="bli-box-c-cat">
                                    <a href="#">BAGS</a>
                                </p>

                                <h5 class="bli-box-c-title"><a href="#">
                                        Walk With A Bag
                                    </a>
                                </h5>

                                <div class="bli-readmore">
                                    <i class="far fa-newspaper"></i><span>Read more</span>
                                </div>
                            </div>
                        </div>
                        <!-- end blog 1 -->
                    </div>
                    <div class="blog-latest item">
                        <!-- Start blog 1 -->
                        <div class="blog-latest-item">
                            <div class="bli-box-img">
                                <div class="bli-box-img-wrap">
                                    <img src="{{asset('images/bag-blog-2-380x380.jpg')}}">
                                </div>
                            </div>
                            <div class="bli-box-content">
                                <p class="bli-box-c-cat">
                                    <a href="#">BAGS</a>
                                </p>

                                <h5 class="bli-box-c-title"><a href="#">
                                        Walk With A Bag
                                    </a>
                                </h5>

                                <div class="bli-readmore">
                                    <i class="far fa-newspaper"></i><span>Read more</span>
                                </div>
                            </div>
                        </div>
                        <!-- end blog 1 -->
                    </div>
                    <div class="blog-latest item">
                        <!-- Start blog 1 -->
                        <div class="blog-latest-item">
                            <div class="bli-box-img">
                                <div class="bli-box-img-wrap">
                                    <img src="{{asset('images/bag-blog-2-380x380.jpg')}}">
                                </div>
                            </div>
                            <div class="bli-box-content">
                                <p class="bli-box-c-cat">
                                    <a href="#">BAGS</a>
                                </p>

                                <h5 class="bli-box-c-title"><a href="#">
                                        Walk With A Bag
                                    </a>
                                </h5>

                                <div class="bli-readmore">
                                    <i class="far fa-newspaper"></i><span>Read more</span>
                                </div>
                            </div>
                        </div>
                        <!-- end blog 1 -->
                    </div>
                    <div class="blog-latest item">
                        <!-- Start blog 1 -->
                        <div class="blog-latest-item">
                            <div class="bli-box-img">
                                <div class="bli-box-img-wrap">
                                    <img src="{{asset('images/bag-blog-2-380x380.jpg')}}">
                                </div>
                            </div>
                            <div class="bli-box-content">
                                <p class="bli-box-c-cat">
                                    <a href="#">BAGS</a>
                                </p>

                                <h5 class="bli-box-c-title"><a href="#">
                                        Walk With A Bag
                                    </a>
                                </h5>

                                <div class="bli-readmore">
                                    <i class="far fa-newspaper"></i><span>Read more</span>
                                </div>
                            </div>
                        </div>
                        <!-- end blog 1 -->
                    </div>
                    <div class="blog-latest item">
                        <!-- Start blog 1 -->
                        <div class="blog-latest-item">
                            <div class="bli-box-img">
                                <div class="bli-box-img-wrap">
                                    <img src="{{asset('images/bag-blog-2-380x380.jpg')}}">
                                </div>
                            </div>
                            <div class="bli-box-content">
                                <p class="bli-box-c-cat">
                                    <a href="#">BAGS</a>
                                </p>

                                <h5 class="bli-box-c-title"><a href="#">
                                        Walk With A Bag
                                    </a>
                                </h5>

                                <div class="bli-readmore">
                                    <i class="far fa-newspaper"></i><span>Read more</span>
                                </div>
                            </div>
                        </div>
                        <!-- end blog 1 -->
                    </div>
                    <div class="blog-latest item">
                        <!-- Start blog 1 -->
                        <div class="blog-latest-item">
                            <div class="bli-box-img">
                                <div class="bli-box-img-wrap">
                                    <img src="{{asset('images/bag-blog-2-380x380.jpg')}}">
                                </div>
                            </div>
                            <div class="bli-box-content">
                                <p class="bli-box-c-cat">
                                    <a href="#">BAGS</a>
                                </p>

                                <h5 class="bli-box-c-title"><a href="#">
                                        Walk With A Bag
                                    </a>
                                </h5>

                                <div class="bli-readmore">
                                    <i class="far fa-newspaper"></i><span>Read more</span>
                                </div>
                            </div>
                        </div>
                        <!-- end blog 1 -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- end blog --}}
  
 {{-- begin trademark --}}
 <div class="trademark">
    <div class="trademark-wrap row">
        <div class="owl-two owl-carousel owl-theme">
            <div class="item">
                <div class="trademark-box-img">
                    <div class="trademark-box-img-wrap">
                        <img src="{{asset('images/brand-1.jpg')}}">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="trademark-box-img">
                    <div class="trademark-box-img-wrap">
                        <img src="{{asset('images/brand-2.jpg')}}">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="trademark-box-img">
                    <div class="trademark-box-img-wrap">
                        <img src="{{asset('images/brand-3.jpg')}}">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="trademark-box-img">
                    <div class="trademark-box-img-wrap">
                        <img src="{{asset('images/brand-4.jpg')}}">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="trademark-box-img">
                    <div class="trademark-box-img-wrap">
                        <img src="{{asset('images/brand-5.jpg')}}">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="trademark-box-img">
                    <div class="trademark-box-img-wrap">
                        <img src="{{asset('images/brand-6.jpg')}}">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- end trademark --}}

@endsection




