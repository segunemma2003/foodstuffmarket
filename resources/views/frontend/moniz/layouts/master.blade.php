<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <link href="{{ $moniz->header->favicon }}" rel="shortcut icon">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ seo('description') ?? null }}">
    <meta name="keywords" content="{{ seo('keywords') ?? null }}">
    <meta name="author" content="{{ env('AUTHOR') }}">
    <meta name="copyright" content="{{ env('AUTHOR') }}">
    <meta name="version" content="{{ env('VERSION') }}">

    {{-- OPEN GRAPH --}}
    <meta property="og:title" content="@yield('head')">
    <meta property="og:url" content="{{ org('company_name') ?? 'Maildoll' }}">
    <meta property="og:image" content="{{ logo() }}">
    <meta property="og:type" content="website">
    <meta name="og:description" content="{{ seo('description') ?? null }}">

    <title>{{ orgName() }}</title>

    @notifyCss

    {{-- CSS --}}
    @include('frontend.moniz.layouts.style')
    {{-- CSS::END --}}

    @htmx()
    @alpineJs()
    <style>
        .modal-backdrop {
            z-index: 150 !important;
        }

        .notify {
            z-index: 30000 !important;
        }
    </style>

</head>

<body id="home" dir="{{ themeDirection() == 'ltr' ? 'ltr' : 'rtl' }}" x-data>

    <div class="page-wrapper">
        @stack('modals')
        @yield('content')
    </div>

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img
                        src="{{ filePath('frontend/moniz/assets/images/resources/logo.png') }}" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@moniz.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    {{-- SCRIPT --}}
    @include('frontend.moniz.layouts.script')
    {{-- SCRIPT::END --}}


    @stack('scripts')
    <x-notify::notify />
    @notifyJs

    <script>
        const inputs = $('.filepond-input')
        inputs.each((i, input) => {
            let pond = FilePond.create(input);
            FilePond.setOptions({
                server: {
                    url: "{{ url('/filepond/upload/moniz') }}",
                    method: 'post',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }
            });
            pond.on('processfile', (e) => {
                console.log(e)
            })
        })
    </script>


</body>

</html>
