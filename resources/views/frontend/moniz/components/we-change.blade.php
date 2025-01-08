<!--We Change Start-->
<section class="we-change" id="faq">
    <div class="container">
        <div class="row" >
            <div class="col-xl-6">
                <div class="we-change__left-faqs">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">
                            <x-editable key="faq_extra->subtitle">
                                {{ $moniz->faq_extra->subtitle }}
                            </x-editable>
                        </span>
                        <h2 class="section-title__title">
                            <x-editable key="faq_extra->title">
                                {{ $moniz->faq_extra->title }}
                            </x-editable>
                        </h2>
                    </div>
                    <div class="we-change__faqs">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            @foreach ($moniz->faqs as $key => $faq)
                            <div class="accrodion {{$loop->first ? 'active' : ''}} {{$loop->last ? 'last-child' : ''}}">
                                <div class="accrodion-title">
                                    <h4>
                                        <x-editable key="faqs->{{$key}}->question">
                                            {{ $faq->question }}
                                        </x-editable>
                                    </h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            <x-editable key="faqs->{{$key}}->answer">
                                                {{ $faq->answer }}
                                            </x-editable>
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            @endforeach
                            {{-- <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Few resons why you should choose us</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum
                                            leo ligula, vitae commodo nisl.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion last-chiled">
                                <div class="accrodion-title">
                                    <h4>Few resons why you should choose us</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum
                                            leo ligula, vitae commodo nisl.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="we-change__right">
                    <div class="we-change__right-img">
                        <x-editable-image :icon-center="true" :icon-size="46" key="faq_extra->image">
                            <img src="{{ filePath($moniz->faq_extra->image) }}" alt="">
                        </x-editable-image>
                        
                        <div class="we-change__agency">
                            <div class="we-change__agency-icon">
                                <span class="icon-development"></span>
                            </div>
                            <div class="we-change__agency-text">
                                <h3 style="max-width:30ch;">
                                    <x-editable key="faq_extra->imageText">
                                        {{ $moniz->faq_extra->imageText }}
                                    </x-editable>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--We Change End-->