@extends('layout.' .  layout())

@section('subhead')
    <title>@translate(Email Templates)</title>
@endsection

@section('subcontent')

<div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
    <h2 class="mr-auto text-lg font-medium"> Choose Form Builder Type
        {{-- ({{ $templateCount }}) --}}
    </h2>
    <div class="flex w-full mt-4 sm:w-auto sm:mt-0">

        <div class="container px-4 mx-auto mt-10">
            <h1 class="mb-8 text-2xl font-bold text-center">Create a New Form Builder</h1>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <!-- Card 1: Create Embedded Form -->
                <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <img src="https://digitalasset.intuit.com/render/content/dam/intuit/mc-fe/en_us/images/forms-landing-pages/form-type-cards/embed_186h_jasmine.png" alt="Create Embedded Form" class="object-cover w-full h-48">
                    <div class="p-6">
                        <h5 class="mb-2 text-lg font-semibold">Create Embedded Form</h5>
                        <p class="mb-4 text-gray-700">Create a form that can be embedded on your website. Simple and easy to use.</p>
                        <a href="{{ route('form.create.embedded') }}"
                           class="inline-block px-4 py-2 text-white transition bg-blue-500 rounded hover:bg-blue-600">
                            Create Embedded Form
                        </a>
                    </div>
                </div>

                <!-- Card 2: Create Pop-up Form -->
                <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <img src="https://digitalasset.intuit.com/render/content/dam/intuit/mc-fe/en_us/images/forms-landing-pages/form-type-cards/popup_186h_jasmine.png" alt="Create Pop-up Form" class="object-cover w-full h-48">
                    <div class="p-6">
                        <h5 class="mb-2 text-lg font-semibold">Create Pop-up Form</h5>
                        <p class="mb-4 text-gray-700">Create a pop-up form that appears on your site based on user actions.</p>
                        <a href="{{ route('form.create.popup') }}"
                           class="inline-block px-4 py-2 text-white transition bg-blue-500 rounded hover:bg-blue-600">
                            Create Pop-up Form
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Signup Landing Page -->
            <div class="mt-6">
                <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <img src="https://digitalasset.intuit.com/render/content/dam/intuit/mc-fe/en_us/images/forms-landing-pages/form-type-cards/LP_186h_jasmine.png" alt="Signup Landing Page" class="object-cover w-full h-48">
                    <div class="p-6">
                        <h5 class="mb-2 text-lg font-semibold">Signup Landing Page</h5>
                        <p class="mb-4 text-gray-700">Create a full landing page that collects user information with a stylish design.</p>
                        <a href="{{ route('form.create.signup') }}"
                           class="inline-block px-4 py-2 text-white transition bg-blue-500 rounded hover:bg-blue-600">
                            Create Signup Page
                        </a>
                    </div>
                </div>
            </div>
        </div>




        {{-- @if (env('SAMPLE_TEMPLATES') == 'YES')
        <a href="{{ route('import.template') }}" class="mr-2 text-white shadow-md button bg-theme-1">@translate(Sample Templates)</a>
        @endif --}}

    </div>
</div>
{{-- <div class="intro-y {{ $templates->count() != 0 ? 'grid grid-cols-12 gap-6' : '' }} mt-5"> --}}
    <!-- BEGIN: Blog Layout -->


    <!-- END: Blog Layout -->
        {{-- {{ $templates->links('vendor.pagination.custom') }} --}}
</div>


@endsection

@section('script')


@endsection
