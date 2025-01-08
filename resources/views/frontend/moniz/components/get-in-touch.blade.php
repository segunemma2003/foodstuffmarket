<!--Get in Touch Start-->
<section class="get-in-touch" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="get-in-touch__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">
                            <x-editable key="contact->subtitle">
                                {{ $moniz->contact?->subtitle ?? ' Contact us' }}
                            </x-editable>

                        </span>
                        <h2 class="section-title__title">
                            <x-editable key="contact->title">
                                {{ $moniz->contact?->title ?? 'We Want to Hear from You' }}
                            </x-editable>
                        </h2>
                    </div>
                    <div class="get-in-touch__locations">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="get-in-touch__locations-left">
                                    <p class="get-in-touch__locations-text">
                                        <x-editable key="contact->description">
                                            {{ $moniz->contact?->description ??
                                                'Questions? Get in touch with us! Fill out this form and a representative will be in touch with
                                                                                        you as soon as possible.' }}
                                        </x-editable>

                                    </p>
                                    @can('Admin')
                                        <h3 class="get-in-touch__locatins-count">
                                            <x-editable key="contact->completedCount">
                                                {{ $moniz->contact?->completedCount ?? '35600' }}
                                            </x-editable>
                                        </h3>
                                    @else
                                        <h3 class="odometer get-in-touch__locatins-count" data-count=" {{ $moniz->contact?->completedCount ?? '35600' }}">00</h3>
                                    @endcan
                                    <h4 class="get-in-touch__locatins-count-text">
                                        <x-editable key="contact->completed">
                                            {{ $moniz->contact?->completed ?? 'Projects has been completed' }}
                                        </x-editable>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="get-in-touch__locations-right">
                                    <div class="get-in-touch__locations-carousel owl-theme owl-carousel">
                                        <div class="get-in-touch__locations-single">
                                            <div class="get-in-touch__locations-top">
                                                <div class="get-in-touch__locations-icon">
                                                    <i class="icon-placeholder"></i>
                                                </div>

                                                <div class="get-in-touch__locations-title">
                                                    <h4>
                                                        <x-editable key="contact->address">
                                                            {{ $moniz->contact?->address ?? 'Saint Louis' }}
                                                        </x-editable>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="get-in-touch__locations-bottom">
                                                <p class="get-in-touch__locations-bottom-tagline">
                                                    <x-editable key="contact->street">
                                                        {{ $moniz->contact?->street ?? '401 Pine Street, Suite
                                                        420, MO 63102' }}
                                                    </x-editable>
                                                </p>
                                                <h3>
                                                    <a href="mailto:needhelp@moniz.com"
                                                    class="get-in-touch__locations-mail">
                                                    <x-editable key="contact->email">
                                                        {{ $moniz->contact?->email ?? 'needhelp@moniz.com' }}
                                                    </x-editable>
                                                </a>
                                                <a href="tel:{{$moniz->contact?->phone ?? '92 666 888 000'}}"
                                                    class="get-in-touch__locations-phone">
                                                    <x-editable key="contact->phone">
                                                        {{ $moniz->contact?->phone ?? '92 666 888 000' }}
                                                    </x-editable>
                                                        </a>
                                                </h3>
                                            </div>
                                        </div>
                                        {{-- <div class="get-in-touch__locations-single">
                                            <div class="get-in-touch__locations-top">
                                                <div class="get-in-touch__locations-icon">
                                                    <i class="icon-placeholder"></i>
                                                </div>
                                                <div class="get-in-touch__locations-title">
                                                    <h4>Boston</h4>
                                                </div>
                                            </div>
                                            <div class="get-in-touch__locations-bottom">
                                                <p class="get-in-touch__locations-bottom-tagline">5 Federal
                                                    street boston</p>
                                                <h3>
                                                    <a href="mailto:needhelp@moniz.com"
                                                        class="get-in-touch__locations-mail">needhelp@moniz.com</a>
                                                    <a href="tel:92-666-888-000"
                                                        class="get-in-touch__locations-phone">92 666 888 000</a>
                                                </h3>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="contact-page__form contact-page__form--one-page">
                    <form action="{{route('contact.store')}}" method="post"
                        class="comment-one__form">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Your name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Company" name="company">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Subject" name="subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                </div>
                                <button class="thm-btn"><span>Send a
                                        message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Get in Touch End-->
