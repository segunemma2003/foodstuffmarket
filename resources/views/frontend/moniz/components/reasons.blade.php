<!--Reasons One Start-->
<section class="reasons-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="reasons-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">
                            <x-editable key="benefits->subtitle">
                                {{$moniz?->benefits?->subtitle ?? 'Our benefits'}}
                            </x-editable>
                        </span>
                        <h2 class="section-title__title">
                            <x-editable key="benefits->title">
                            {{$moniz?->benefits?->title ?? 'Why Choose KushMail?'}}
                        </x-editable>
                    </h2>
                    </div>
                    <ul class="list-unstyled reasons-one__icon-box">
                        <li>
                            <span class="icon-training"></span>
                            <p class="reasons-one__text">
                                <x-editable key="benefits->items->one">
                                    {{$moniz?->benefits?->items->one ?? 'The best user interfaces'}}
                                </x-editable>
                            </p>
                        </li>
                        <li>
                            <span class="icon-strategy"></span>
                            <p class="reasons-one__text">
                                <x-editable key="benefits->items->two">
                                    {{$moniz?->benefits?->items->two ?? 'Quick & smooth user experience'}}
                                </x-editable>
                                </p>
                        </li>
                    </ul>
                    <p class="reasons-one__text-1">
                        <x-editable key="benefits->description">
                            {{$moniz?->benefits?->description ?? 'KushMail is an email marketing platform as unique as our industry with a focus on cannabis
                            businesses. This specialization enables us to fully understand the needs and demands of
                            our clients so that you can take your marketing to a new level. KushMail is not simply
                            cannabis-friendly, but fully cannabis-focused. This means that we know the challenges and
                            intricacies of the cannabis world and offer you streamlined ways to engage your customers
                            by providing you tools to create and send innovative marketing communications.'}}
                        </x-editable>
                    </p>
                    <a href="#contact" class="thm-btn"><span>
                        <x-editable key="benefits->cta">
                            {{$moniz?->benefits?->cta ?? 'Discover more'}}
                        </x-editable>    
                    </span></a><!-- /.thm-btn -->
                </div>
            </div>
            <div class="col-xl-8">
                <div class="reasons-one__img-box">
                    <div class="reasons-one-img-box-bg"></div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="reasons-one__img-one">
                               <x-editable-image :icon-center="true" key="benefits->images->one">
                                <img src="{{ filePath($moniz?->benefits?->images?->one ?? 'frontend/moniz/assets/images/resources/reasons-one-img-1.jpg') }}" alt="">
                               </x-editable-image>
                                <div class="reasons-one__shape-1"></div>
                                <div class="reasons-one__shape-2"></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="reasons-one__img-two">
                                <x-editable-image :icon-center="true" key="benefits->images->two">
                                    <img src="{{ filePath($moniz?->benefits?->images?->two ?? 'frontend/moniz/assets/images/resources/reasons-one-img-2.jpg') }}" alt="">
                                   </x-editable-image>
                            </div>
                            <div class="reasons-one__img-three reasons-one__img-two">
                                <x-editable-image :icon-center="true" key="benefits->images->three">
                                    <img src="{{ filePath($moniz?->benefits?->images?->three ?? 'frontend/moniz/assets/images/resources/reasons-one-img-3.jpg') }}" alt="">
                                   </x-editable-image>
                                <div class="reasons-one__shape-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Reasons One End-->