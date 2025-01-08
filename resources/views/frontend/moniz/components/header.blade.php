<header class="main-header clearfix">
    <nav class="main-menu clearfix">
        <div class="main-menu-wrapper clearfix">
            <div class="main-menu-wrapper__left clearfix">
                <div class="main-menu-wrapper__logo">
                    <x-editable-image key="header->logo" id="headerLogo">
                        <a href="#">
                            <img src="{{ filePath($moniz->header->logo) }}" alt="">
                        </a>
                    </x-editable-image>
                </div>
                <!-- <div class="main-menu-wrapper__search-box">
                    <a href="#" class="main-menu-wrapper__search search-toggler icon-magnifying-glass"></a>
                </div>
                <div class="main-menu-wrapper__social">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="clr-dri"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                </div> -->
            </div>
            <div class="main-menu-wrapper__main-menu">
                <a href="#" class="mobile-nav__toggler">
                    <span></span>
                </a>
                <ul class="main-menu__list one-page-scroll-menu">
                    @foreach ($moniz->header->navlinks as $key => $link)
                        <li class="dropdown scrollToLink {{ $key == 'home' ? 'current' : '' }}">
                            <a href="#{{ $key }}">
                                <x-editable :route="route('moniz.update')" id="id-{{ $key }}"
                                    key="header->navlinks->{{ $key }}">
                                    {{ $link }}
                                </x-editable>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="main-menu-wrapper__right">
                <!-- <div class="main-menu-wrapper__right-contact-box">
                    <div class="main-menu-wrapper__right-contact-icon">
                        <span class="icon-phone-call"></span>
                    </div>
                    <div class="main-menu-wrapper__right-contact-number">
                        <a href="tel:92-666-888-0000">92 666 888 0000</a>
                    </div>
                </div> -->
                @auth
                <a href="/dashboard" class="thm-btn"><span>Dashboard</span></a>
                @else
                                <a href="/register" class="thm-btn mr-10"><span>Get Started</span></a>
                <a href="/login" class="thm-btn"><span>Login</span></a>
                @endauth
            </div>
    
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->