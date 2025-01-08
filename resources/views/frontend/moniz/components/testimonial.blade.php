<!--Testimonial One Start-->
<section class="testimonial-one" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="testimonial-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">
                            <x-editable key="testimonial_extra->subtitle">
                                {{$moniz->testimonial_extra->subtitle}}
                            </x-editable>
                        </span>
                        <h2 class="section-title__title">
                            <x-editable key="testimonial_extra->title">
                                {{$moniz->testimonial_extra->title}}
                            </x-editable>
                        </h2>
                    </div>
                    <div class="testimonial-one__btn-box">
                        <a href="#contact" class="thm-btn testimonial-one__btn"><span>
                            <x-editable key="testimonial_extra->cta">
                                {{$moniz->testimonial_extra->cta}}
                            </x-editable></span></a>
                        <div class="testimonial-one__btn-shape"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="testimonial-one__slider">


                    <div class="swiper-container" id="testimonials-one__thumb">
                        <div class="swiper-wrapper">
                            @foreach ($moniz->testimonials as $key => $testimonial)
                            <div class="swiper-slide">
                                <div class="testimonial-one__img-holder">
                                    <x-editable-image key="testimonials->{{$key}}->avatar" :icon-center="true">
                                        <img src="{{ filePath($testimonial->avatar) }}" alt="">
                                    </x-editable-image>
                                    <div class="testimonial-one__quote">

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div><!-- /.swiper-wrapper -->
                    </div><!-- /#testimonials-one__thumb.swiper-container -->

                    <div class="testimonials-one__main-content">
                        <div class="swiper-container" id="testimonials-one__carousel">
                            <div class="swiper-wrapper">
                                @foreach ($moniz->testimonials as $key => $testimonial)
                                <div class="swiper-slide">
                                    <div class="testimonial-one__conent-box">
                                        <p class="testimonial-one__text">
                                            <x-editable key="testimonials->{{$key}}->comment">
                                                {{$testimonial->comment}}
                                            </x-editable>
                                        </p>
                                        <div class="testimonial-one__client-details">
                                            <h4 class="testimonial-one__client-name">
                                                <x-editable key="testimonials->{{$key}}->name">
                                                    {{$testimonial->name}}
                                                </x-editable>
                                            </h4>
                                            <span class="testimonial-one__clinet-title"><x-editable key="testimonials->{{$key}}->status">
                                                {{$testimonial->status}}
                                            </x-editable></span>
                                        </div>
                                    </div>
                                </div><!-- /.swiper-slide -->
                                @endforeach
                                {{-- <div class="swiper-slide">
                                    <div class="testimonial-one__conent-box">
                                        <p class="testimonial-one__text">This is due to their excellent service,
                                            competitive pricing and customer support. It’s throughly refresing
                                            to
                                            get such a personal touch. Duis aute lorem ipsum is simply.</p>
                                        <div class="testimonial-one__client-details">
                                            <h4 class="testimonial-one__client-name">Aleesha brown</h4>
                                            <span class="testimonial-one__clinet-title">Satisfied
                                                customers</span>
                                        </div>
                                    </div>
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-one__conent-box">
                                        <p class="testimonial-one__text">This is due to their excellent service,
                                            competitive pricing and customer support. It’s throughly refresing
                                            to
                                            get such a personal touch. Duis aute lorem ipsum is simply.</p>
                                        <div class="testimonial-one__client-details">
                                            <h4 class="testimonial-one__client-name">Aleesha brown</h4>
                                            <span class="testimonial-one__clinet-title">Satisfied
                                                customers</span>
                                        </div>
                                    </div>
                                </div><!-- /.swiper-slide --> --}}
                            </div><!-- /.swiper-wrapper -->
                            <div id="testimonials-one__carousel-pagination"></div>
                            <!-- /#testimonials-one__carousel-pagination -->
                        </div><!-- /#testimonials-one__thumb.swiper-container -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial One End-->