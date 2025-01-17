@extends('layout.' .  layout())

@section('subhead')
    <title>@translate(Email Templates)</title>
@endsection

@section('subcontent')

<div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
    <h2 class="mr-auto text-lg font-medium"> Form Builder
        {{-- ({{ $templateCount }}) --}}
    </h2>
    <div class="flex w-full mt-4 sm:w-auto sm:mt-0">
        <a href="{{ route('form-builder.create') }}" class="mr-2 text-white shadow-md button bg-theme-1">
            {{-- @translate(Add New Email Templates)
             --}}
             Create Form
        </a>

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
