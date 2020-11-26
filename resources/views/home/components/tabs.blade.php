

     

        {{-- begin tap title --}}
        <div class="trendy-item-wrap">
            <div class="trendy-item-wrap-title">
                <h1>Trendy item</h1>
            </div>
            <div class="trendy-item-tabs-title">
                <div class="trendy-item-tabs-title-wrap">
                    <ul class="tit-tab-list">
                        @foreach ($categories as $indexCategory=>$categoryItem)
                    <li class="tit-tab-item {{$indexCategory == 0 ? "tit-active" : ""}}" onclick="openCity(event, 'category_tab_{{$categoryItem->id}}')">
                            <a>
                            <h5>{{$categoryItem->name}}</h5>
                            </a>
                        </li>
                        @endforeach
                      
            
                    </ul>
                </div>
            </div>
        </div>
{{-- end tap title --}}
    


{{-- start tab product --}}
    <div class="trendy-tab-block-wrap">
@php
    $i =0;
@endphp
        @foreach ($categories as $indexCategoryProduct=>$categoryItemProduct)

            
        <!-- begin tab 1 -->
    <div class="row trendy-tab-block" id="category_tab_{{$categoryItemProduct->id}}">
       
        {{-- @foreach ($categoryItemProduct->categoryChildrent as $categoryChildrentItem) --}}
        {{-- {{dd($categoryChildrentItem->products)}} --}}
       
        @foreach ($categoryItemProduct->products as $categoryChildrentItemProduct)
       
        
            <!-- start product  -->
            {{-- <div class="trendyItem-product-item columns large-3 medium-4 small-6"> --}}

            <div class="trendyItem-product-item columns columns-flex">
                <div class="trendyItem-product-item-wrap">
                    <div class="product-item-img-qv-add">
                        <div class="pi-img-box">
                            <a href="#">
                                <div class="pi-img-box-main">
                                    <img src="{{config('app.base_url').$categoryChildrentItemProduct->feature_image_path}}">
                                </div>
                            </a>
                            <a href="#">
                                <div class="pi-img-box-sup">
                                    <img src="{{config('app.base_url').$categoryChildrentItemProduct->productImages[1]->image_path}}">
                                </div>
                            </a>
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
                            <a href="#" class="add_to_cart" 
                        {{-- data-id="{{$categoryChildrentItemProduct->id}}" --}}
                        data-url="{{route('addToCart', ['id' => $categoryChildrentItemProduct->id])}}"
                        {{-- id="myBtn{{$categoryChildrentItemProduct->id}}" --}}
                            >
                                <span>ADD TO CART</span>
                                <i class="fas fa-plus"></i>
                                
                            </a>
                        </div>
                    </div>
                   
                    <div class="product-item-info">
                        <div class="pi-info-wrap">
                            <div class="pi-info-name">
                                
                                <a href="#">{{$categoryChildrentItemProduct->name}}</a>
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
                               {{number_format($categoryChildrentItemProduct->price)}} <sup>vnđ</sup>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end product  -->
        @endforeach

        {{-- @endforeach --}}

            <!-- b4-nav-tabs -->
        </div>
        <!-- end tab 1 -->
        @endforeach
      
        
    </div>
    {{-- <button type="button" class="btn btn-primary" id="myBtn">Show Toast</button> --}}
     

<div class="clear-float"></div>
    {{-- end tab product --}}
