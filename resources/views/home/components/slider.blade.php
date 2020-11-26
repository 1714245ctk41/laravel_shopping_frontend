@php
    $baseurl = config('app.base_url');
@endphp


        <!-- header slide -->
        <div class="header">
            <div class="header-wrap">


                <div class="owl-three owl-carousel owl-theme">
                    @foreach ($sliders as $slider)
                        
                    <div class="header-slider item">
                        <!-- Start blog 1 -->
                        <div class="header-slider-item">
                            <div class="header-box-img">
                                <img src="{{$baseurl.$slider->image_path}}">
                            </div>
                            <div class="header-box-content">
                                <p class="header-box-c-cat">
                                    <a href="#">{{$slider->name}}</a>
                                </p>

                                <p class="header-box-c-title">
                                    {{$slider->description}}

                                </p>
                            </div>
                        </div>
                        <!-- end blog 1 -->
                    </div>
                    @endforeach

                   


                </div>
            </div>
        </div>
        <!-- end header slide -->