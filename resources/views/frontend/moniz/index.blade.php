{{-- @dd($moniz->header) --}}
@extends('frontend.moniz.layouts.master')


<!-- Preloader -->  
@includeWhen(false, 'frontend.moniz.components.preloader')
<!-- End Preloader -->

@section('content')

<!-- Header -->
@includeWhen(true, 'frontend.moniz.components.header')
<!-- End Header -->

<!-- Banner -->
@includeWhen(true, 'frontend.moniz.components.banner')
<!-- End Banner -->

<!-- Welcome -->
@includeWhen(true, 'frontend.moniz.components.welcome')
<!-- End Welcome -->

<!-- Counters -->
@includeWhen(true, 'frontend.moniz.components.counters')
<!-- End Counters -->

<!-- Video -->
@includeWhen(true, 'frontend.moniz.components.video')
<!-- End Video -->

<!-- Pricing -->
@includeWhen(true, 'frontend.moniz.components.pricing')
<!-- End Pricing -->

<!-- Testimonial -->
@includeWhen(true, 'frontend.moniz.components.testimonial')
<!-- End Testimonial -->

<!-- We-change -->
@includeWhen(true, 'frontend.moniz.components.we-change')
<!-- End We-change -->


<!-- We-make -->
@includeWhen(true, 'frontend.moniz.components.we-make')
<!-- End We-make -->

<!-- Reasons -->
@includeWhen(true, 'frontend.moniz.components.reasons')
<!-- End Reasons -->

<!-- Blog -->
{{-- @includeWhen(true, 'frontend.moniz.components.blog') --}}
<!-- End Blog -->

<!-- Contact -->
{{-- @includeWhen(true, 'frontend.moniz.components.contact') --}}
<!-- End Contact -->

<!-- Get-in-touch -->
@includeWhen(true, 'frontend.moniz.components.get-in-touch')
<!-- End Get-in-touch -->

<!-- Brand -->
@includeWhen(false, 'frontend.moniz.components.brand')
<!-- End Brand -->

<!-- Cta -->
@includeWhen(true, 'frontend.moniz.components.cta')
<!-- End Cta -->

<!-- Footer -->
@includeWhen(true, 'frontend.moniz.components.footer')
<!-- End Footer -->


@endsection