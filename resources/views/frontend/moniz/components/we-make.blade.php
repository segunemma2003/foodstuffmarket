<!--We Make Start-->
<section class="we-make">
    <div class="we-make-bg"
        style="background-image: url({{ filePath('frontend/moniz/assets/images/backgrounds/we-make-bg.jpg') }})"></div>
    <div class="container">
        <div class="row">
            <div class="">
                <div class="we-make__left">
                    <div class="section-title text-left">
                        {{-- <span class="section-title__tagline">Corporate business theme</span> --}}
                        <h2 class="section-title__title" style="font-size: 24px!important; line-height:2rem!important;">
                        <x-editable key="quote->quote">
                            {{$moniz?->quote?->quote ?? '”In
                            the ever-shifting landscape of the cannabis industry, where social media
                            presence can be fragile, building an email list is not just a strategy, but a lifeline. It\'s
                            a
                            powerful asset that keeps you connected with your audience, immune to the whims
                            of social platforms. With every email address, you secure a direct line to your
                            hard-earned following, ensuring that your voice is heard, your promotions are seen,
                            and your community stays informed and engaged.”'}}
                        </x-editable>
                        </h2>
                    </div>
                    <div style="margin-top: -2rem;font-weight:400!important;">
                        <h4 class="section-title__title" style="font-size: 20px!important; line-height:2rem!important;">
                            <x-editable key="quote->name">
                                {{$moniz?->quote?->name ?? '- David Morton,'}}
                            </x-editable>
                            
                        </h4>
                        <h5 class="section-title__title" style="font-size: 18px!important; line-height:2rem!important;">
                            <x-editable key="quote->designation">
                                {{$moniz?->quote?->designation ?? '- CEO, Kushmail Creative'}}
                            </x-editable>
                        </h5>
                    </div>
                    <div class="we-make__person gap-4">
                        <div class="we-make__person-img">
                            <x-editable-image :icon-center="true" key="quote->avatar">
                                <img src="{{ filePath($moniz?->quote?->avatar ?? 'frontend/moniz/assets/images/company-face.png') }}" alt="">
                            </x-editable-image>
                            
                        </div>
                        <div class="we-make__person-img">
                            <x-editable-image :icon-center="true" key="quote->signature">
                                <img src="{{ filePath($moniz?->quote?->signature ??'frontend/moniz/assets/images/comapny-face-signature.png') }}" alt="">
                            </x-editable-image>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-5 col-lg-6">
                <div class="we-make__right">
                    <div class="we-make__progress">
                        @foreach ($moniz->progresses as $key => $progress)
                        <div class="we-make__progress-single">
                            <h4 class="we-make__progress-title">
                                <x-editable key="progresses->{{$key}}->label">
                                    {{$progress->label}}
                                </x-editable>
                            </h4>
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="{{str($progress->percent)->replace('%', '')}}%">
                                    <div class="count-text">
                                        <x-editable key="progresses->{{$key}}->percent">
                                            {{$progress->percent}}
                                        </x-editable></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!--We Make End-->
