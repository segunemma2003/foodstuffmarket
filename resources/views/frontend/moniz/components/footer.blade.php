<!--Site Footer One Start-->
<footer class="site-footer">
    <div class="site-footer__top">
        <div class="site-footer-top-bg"
            style="background-image: url({{ filePath('frontend/moniz/assets/images/backgrounds/site-footer-bg.jpg') }})"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__about-logo">
                            <a href="/">
                                <x-editable-image key="footer->logo">
                                    <img src="{{ filePath( $moniz->footer?->logo ?? 'frontend/moniz/assets/images/Logo FullLogo - Small.png') }}" alt=""></a>
                                </x-editable-image>
                        </div>
                        <p class="footer-widget__about-text">
                            <x-editable key="footer->tagline">
                                {{ $moniz->footer?->tagline ?? 'An email marketing platform designed for the cannabis industry.' }}
                            </x-editable>
                            </p>
                        <div class="footer-widget__about-social-list">
                            @foreach ($moniz->socials as $icon => $link)
                            <a href="{{$link}}"><i class="fab fa-{{$icon}}"></i></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__explore clearfix">
                        <h3 class="footer-widget__title">Explore</h3>
                        <ul class="footer-widget__explore-list list-unstyled">
                            <li><a href="about.html">About</a></li>
                            <li><a href="team.html">Meet our team</a></li>
                            <li><a href="#">Case stories</a></li>
                            <li><a href="blog.html">Latest news</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__contact">
                        <h3 class="footer-widget__title">Contact</h3>
                        <p class="footer-widget__contact-text">
                            <x-editable key="footer->address">
                                {{ $moniz->footer?->address ?? '401 Pine Street, Suite 420, Saint Louis,  MO 63102' }}
                            </x-editable>
                            </p>
                        <div class="footer-widget__contact-info">
                            <p>
                                <a href="tel:{{$moniz->contact?->phone ?? '92 666 888 000'}}" class="footer-widget__contact-phone">
                                    <x-editable key="contact->phone">
                                        {{ $moniz->contact?->phone ?? '92 666 888 000' }}
                                    </x-editable>
                                </a>
                                <a href="mailto:{{$moniz->contact?->email ?? "needhelp@company.com"}}"
                                    class="footer-widget__contact-mail">
                                    <x-editable key="contact->email">
                                        {{ $moniz->contact?->email ?? 'needhelp@company.com' }}
                                    </x-editable>    
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__newsletter">
                        <h3 class="footer-widget__title">Sign up for newsletter</h3>
                        <form class="footer-widget__newsletter-form">
                            <div class="footer-widget__newsletter-input-box">
                                <input type="email" placeholder="Email Address" name="email">
                                <button type="submit" class="footer-widget__newsletter-btn"><i
                                        class="fas fa-paper-plane"></i></button>
                            </div>
                        </form>
                        <div class="footer-widget__newsletter-bottom">
                            <div class="footer-widget__newsletter-bottom-icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="footer-widget__newsletter-bottom-text">
                                <p>I agree to all terms and policies</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer-bottom__inner">
                        <p class="site-footer-bottom__copy-right">© Copyright {{now()->format('Y')}} KushMail | Property of <a
                                href="/">Kush Creative</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer One End-->