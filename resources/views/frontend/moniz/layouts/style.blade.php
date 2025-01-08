<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/animate/animate.min.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/animate/animate.min.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/fontawesome/css/all.min.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/jarallax/jarallax.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/jarallax/jarallax.css') }}" />
<link rel="stylesheet"
    href="{{ filePath('frontend/moniz/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/nouislider/nouislider.min.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/nouislider/nouislider.pips.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/odometer/odometer.min.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/swiper/swiper.min.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/moniz-icons/style.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/reey-font/stylesheet.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/twentytwenty/twentytwenty.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/bxslider/jquery.bxslider.css') }}" />
<link rel="stylesheet"
    href="{{ filePath('frontend/moniz/assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/vegas/vegas.min.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/jquery-ui/jquery-ui.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/vendors/timepicker/timePicker.css') }}" />

<!-- template styles -->
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/css/moniz.css') }}" />
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/css/moniz-responsive.css') }}" />

<!-- RTL Styles -->
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/css/moniz-rtl.css') }}" />

<!-- color css -->
<link rel="stylesheet" id="jssDefault" href="{{ filePath('frontend/moniz/assets/css/colors/color-default.css') }}">
<link rel="stylesheet" id="jssMode" href="{{ filePath('frontend/moniz/assets/css/modes/moniz-normal.css') }}">

<!-- toolbar css -->
<link rel="stylesheet" href="{{ filePath('frontend/moniz/assets/css/moniz-toolbar.css') }}" />

<!-- Crimson Pro -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&display=swap"
    rel="stylesheet">
<!-- Crimson Pro -->
@css
    @font-face {
        font-family: "Nexa";
        font-weight: bold;
        src: url({{filePath('frontend/moniz/assets/fonts/nexa/Nexa-Heavy.ttf')}}) format("truetype");
    }
@endcss

<style>
    [contenteditable="true"]:focus {
        outline: none;
        border-bottom: 2px;
        border-bottom-color: var(--moniz-primary);
        border-bottom-style: solid;
    }
</style>

<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<style>
    .filepond--root.filepond--hopper {
        width: 100% !important;
        height: 100% !important;
    }

    .filepond--drop-label {
        height: 100%;
    }
</style>
@auth
    @can('Admin')
        <link rel="stylesheet" href="{{ filePath('frontend/argon/assets/css/style.css') }}">
    @endcan
@endauth

@stack('styles')
