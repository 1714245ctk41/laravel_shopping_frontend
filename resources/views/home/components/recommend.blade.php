    {{-- begin recommend  --}}
    <div class="trendy-item-wrap">
        <div class="trendy-item-wrap-title">
            <h1>Recommend</h1>
        </div>
        <div class="row ">
            <div class="owl-four owl-carousel owl-theme">

                @foreach ($productsRecommend as $productRecommend)
                    
                <div class="item">
                  <!-- start product  -->
            {{-- <div class="trendyItem-product-item columns large-3 large-slider-3  medium-4 small-6"> --}}
            <div class="trendyItem-product-item columns ">

                <div class="trendyItem-product-item-wrap">
                    <div class="product-item-img-qv-add">
                        <div class="pi-img-box">
                            <a href="#">
                                <div class="pi-img-box-main">
                                    <img src="{{config('app.base_url').$productRecommend->feature_image_path}}">
                                </div>
                            </a>
                            <a href="#">
                                <div class="pi-img-box-sup">
                                    <img src="{{config('app.base_url').$productRecommend->productImages[1]->image_path}}">
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
                            <a href="#" class="add_to_cart" id="add_to_cart"
                            data-url="{{route('addToCart', ['id' => $productRecommend->id])}}"
                                
                                >
                                <span>ADD TO CART</span>
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-item-info">
                        <div class="pi-info-wrap">
                            <div class="pi-info-name">
                                <a href="#">{{$productRecommend->name}}</a>
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
                                {{number_format($productRecommend->price)}} <sup>vnđ</sup>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end product  -->
                </div>
         
                @endforeach

            </div>
        </div>
    </div>
{{-- end recommend  --}}