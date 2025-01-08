<!--CTA One Start-->
<section class="cta-one">
    <x-editable-image key="footer->cta->image" style="position: absolute; right:20%; top:20%;">
        <div class="cta-one-bg" style="background-image: url({{ filePath($moniz->footer->cta->image ?? 'frontend/moniz/assets/images/backgrounds/cta-one-bg.jpg') }})"></div>
    </x-editable-image>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-one__inner">
                    {{-- <p class="cta-one__tagline">We can help you stand out your business</p> --}}
                    <h2 class="cta-one__title">
                        <x-editable key="footer->cta->text">
                            {{$moniz->footer->cta->text ?? 'Breaking Barriers to Success With Cannabis Email Marketing'}}
                        </x-editable>
                    </h2>
                    {{-- <a href="#contact" class="thm-btn cta-one__btn thm-btn--dark--light-hover"><span>Free
                            consultation</span></a> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->