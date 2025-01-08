<!--Pricing Section Start-->
<section class="pricing-section services-one" id="pricing">
    <div class="services-one-bg"
        style="background-image: url({{ filePath('frontend/moniz/assets/images/backgrounds/services-one-bg.jpg') }})">
    </div>
    <div class="container">
        <div class="text-center">
            <span class="section-title__tagline">
                <x-editable key="package->subtitle">
                    {{ $moniz->package->subtitle}}
                </x-editable>
            </span>
            <h2 class="section-title__title">
                <x-editable key="package->title">
                    {{ $moniz->package->title}}
                </x-editable>    
            </h2>
        </div>
        <div class="row">
            @foreach (displaySubscriptions() as $i => $package)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="single-price {{ $i == 1 ? 'active' : '' }}">
                        <h4>
                            <x-editable key="package->names->{{spell($i)}}">
                                <?= $moniz->package->names->{spell($i)}; ?>
                            </x-editable>
                        </h4>
                        <h2 class="margin-top-20">${{$package->price}}/<span>{{$package->duration}} @translate(Months)</span></h2>
                        <div class="sep">
                            <hr>
                        </div>
                        <ul class="list-unstyled">
                            <li>{{ $package->duration }} @translate(Months)</li>
                            <li>{{ $package->emails }} @translate(Emails)</li>
                            <li>{{ $package->sms }} @translate(SMS)</li>
                            {{-- <li>Drag & drop editor</li>
                            <li>10,000 monthly sms</li>
                            <li>Comparative reporting</li>
                            <li>10,000 monthly emails</li>
                            <li class="cm-line-through">24/7 Live chat & email support</li> --}}
                        </ul>
                        <a href="{{ route('frontend.payment', [$package->id, Str::slug($package->name)])}} " class="btn2">Get Started</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--Pricing Section End-->
