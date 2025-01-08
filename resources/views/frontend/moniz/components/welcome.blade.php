<!--Welcome One Start-->
<section class="welcome-one" id="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="welcome-one__left wow fadeInLeft" data-wow-duration="1500ms">
                    <div class="welcome-one__img-box">
                        <div class="welcome-one__img">
                            <x-editable-image :icon-size="30" :icon-center="true" key="welcome->image">
                                <img src="{{ filePath($moniz->welcome->image) }}" alt="">
                            </x-editable-image>
                            <div class="welcome-one__shape-1"></div>
                            <div class="welcome-one__shape-2"></div>
                        </div>
                        {{-- <div class="welcome-one__trusted">
                            <p>Trusted by</p>
                            @can('Admin')
                                <style>
                                    .welcome-one__trusted::before {
                                        position: relative;
                                        display: none;
                                    }
                                </style>
                                <h2>
                                    <x-editable key="welcome->trustedByCount">
                                        {{ $moniz->welcome->trustedByCount }}
                                    </x-editable>
                                </h2>
                            @else
                                <h2 class="odometer" data-count="{{ $moniz->welcome->trustedByCount }}">
                                    00
                                </h2>
                            @endcan
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="welcome-one__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">
                            <x-editable key="welcome->subtitle">
                                {{ $moniz->welcome->subtitle }}
                            </x-editable>
                        </span>
                        <h2 class="section-title__title">
                            <x-editable key="welcome->title">
                                {{ $moniz->welcome->title }}
                            </x-editable>
                        </h2>
                    </div>
                    <div class="welcome-one__solutions">
                        <div class="welcome-one__solutions-single">
                            <div class="welcome-one__solutions-icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="welcome-one__solutions-text-box">
                                <p style="max-width: 15ch;">
                                    <x-editable key="welcome->cta1">
                                        {{ $moniz->welcome->cta1 }}
                                    </x-editable>
                                </p>
                            </div>
                        </div>
                        <div class="welcome-one__solutions-single">
                            <div class="welcome-one__solutions-icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="welcome-one__solutions-text-box">
                                <p style="max-width: 15ch;">
                                    <x-editable key="welcome->cta2">
                                        {{ $moniz->welcome->cta2 }}
                                    </x-editable>
                                </p>
                            </div>
                        </div>
                    </div>
                    <p class="welcome-one__right-text-1">
                        <x-editable key="welcome->description1">
                            {{ $moniz->welcome->description1 }}
                        </x-editable>
                    </p>
                    {{-- <p class="welcome-one__right-text-2">
                        <x-editable key="welcome->description2">
                            {{ $moniz->welcome->description2 }}
                        </x-editable>
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--Welcome One End-->
