<!-- Banner One Start -->
<section class="main-slider" id="home">
    <div class="swiper-container thm-swiper__slider"
        data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
     "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
    }{{auth()?->user()?->user_type != 'Admin' ? ',"autoplay":{"delay": 5000}':''}}
}'>
        <div class="swiper-wrapper">
            @forelse ($moniz->banners as $key => $banner)
                <div class="swiper-slide">
                    <x-editable-image key="banners->{{$key}}->image" style="position: absolute; right:20%; top:20%;" id="banner-image-{{$key}}">
                        <div class="image-layer" style="background-image: url({{ filePath($banner->image) }});">
                        </div>
    
                    </x-editable-image>
                    
                    <div class="image-layer-overlay"></div>
                    <div class="main-slider-shape-1"></div>
                    <div class="main-slider-shape-2"></div>
                    <div class="main-slider-shape-3"></div>
                    <div class="main-slider-shape-4"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider__content">
                                    <p>
                                        <x-editable :route="route('moniz.update')" id="banner-subtitle-{{ $key }}"
                                            key="banners->{{ $key }}->subtitle">{{ $banner->subtitle }}</x-editable>
                                    </p>
                                    <h2>
                                        <x-editable :route="route('moniz.update')" id="banner-title-{{ $key }}"
                                            key="banners->{{ $key }}->title">{{ $banner->title }}</x-editable>

                                    </h2>
                                    <a href="#contact" class="thm-btn">
                                        <x-editable :route="route('moniz.update')" id="banner-ctalabel-{{ $key }}"
                                            key="banners->{{ $key }}->ctaLabel">{{ $banner->ctaLabel }}</x-editable>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url({{ filePath('frontend/moniz/assets/images/backgrounds/main-slider-1-1.jpg') }});">
                    </div>

                    <div class="image-layer-overlay"></div>
                    <div class="main-slider-shape-1"></div>
                    <div class="main-slider-shape-2"></div>
                    <div class="main-slider-shape-3"></div>
                    <div class="main-slider-shape-4"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider__content">
                                    <p>welcome to Moniz Web agency</p>
                                    <h2 style="max-width:15ch;">Smart web design agency</h2>
                                    <a href="#contact" class="thm-btn"><span>Free consultation</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url({{ filePath('frontend/moniz/assets/images/backgrounds/main-slider-1-2.jpg') }});">
                    </div>

                    <div class="image-layer-overlay"></div>
                    <div class="main-slider-shape-1"></div>
                    <div class="main-slider-shape-2"></div>
                    <div class="main-slider-shape-3"></div>
                    <div class="main-slider-shape-4"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider__content">
                                    <p>welcome to Moniz Web agency</p>
                                    <h2 style="max-width:15ch;">Smart web design agency</h2>
                                    <a href="#contact" class="thm-btn"><span>Free consultation</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url({{ filePath('frontend/moniz/assets/images/backgrounds/main-slider-1-3.jpg') }});">
                    </div>

                    <div class="image-layer-overlay"></div>
                    <div class="main-slider-shape-1"></div>
                    <div class="main-slider-shape-2"></div>
                    <div class="main-slider-shape-3"></div>
                    <div class="main-slider-shape-4"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider__content">
                                    <p>welcome to Moniz Web agency</p>
                                    <h2 style="max-width:15ch;">Smart web design agency</h2>
                                    <a href="#contact" class="thm-btn"><span>Free consultation</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse


        </div>
        <!-- If we need navigation buttons -->
        <div class="slider-bottom-box clearfix">

            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i
                        class="icon-right-arrow icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="icon-right-arrow"></i>
                </div>
            </div>
            <div class="swiper-pagination" id="main-slider-pagination"></div>
        </div>
    </div>
</section>
<!--Banner One End-->
