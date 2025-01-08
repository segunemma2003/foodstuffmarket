<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <link href="{{ favIcon() }}" rel="icon" type="image/png">
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
    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "url": "https://staging.maildoll.com/",
          "logo": "{{ favIcon() }}"
        }
    </script>

    <title>{{ orgName() }}</title>

    @notifyCss

    {{-- CSS --}}
    @include('frontend.argon.layouts.style')
    {{-- CSS::END --}}


    {!! seo('google_analytics') ?? null !!}

    {{-- CHAT PROVIDERS --}}
    @if (checkDBConnection() == true && Schema::hasTable('chatproviders'))
        @forelse (chatProviders() as $chatProviders)
            @php
                echo $chatProviders->body;
            @endphp
        @empty
        @endforelse
    @endif
    {{-- CHAT PROVIDERS::END --}}


</head>

<body id="home" dir="{{ themeDirection() == 'ltr' ? 'ltr' : 'rtl' }}">

    <!-- Preloader -->
    @includeWhen(true, 'frontend.argon.components.preloader')
    <!-- End Preloader -->

    <!-- Header -->
    @includeWhen(true, 'frontend.argon.components.header')
    <!-- End Header -->

    @yield('content')

    <!-- Footer -->
    @includeWhen(true, 'frontend.argon.components.footer')
    <!-- End Footer -->

    {{-- SCRIPT --}}
    @include('frontend.argon.layouts.script')
    {{-- SCRIPT::END --}}

    @yield('scripts')

    @include('sweetalert::alert')
    <x-notify::notify />
    @notifyJs

    @stack('scripts')
    <!-- ToTop Button -->
    <button class="scrollup" type="button" onclick=scrollToTop()>
        <i class="ri-arrow-up-fill"></i>
    </button>
</body>

</html>
