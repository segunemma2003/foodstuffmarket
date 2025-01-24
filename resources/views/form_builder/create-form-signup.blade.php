@extends('layout.' . layout())

@section('subhead')
    <title>@translate(Email Templates)</title>
@endsection

@section('subcontent')
<div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
    <h2 class="mr-auto text-lg font-medium">Setup Your Signup Form</h2>
</div>

<div class="w-full mt-6 ">
    <div class="w-1/2 p-6 bg-white rounded-lg shadow-lg">
        <form action="{{ route('form.store') }}" method="POST">
            @csrf

            <input type="hidden" name="form_type" value="signup" />
            <!-- Form Name -->
            <div class="mb-4">
                <label for="form_name" class="block mb-2 font-medium text-gray-700">Form Name</label>
                <input
                    type="text"
                    name="form_name"
                    id="form_name"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter form name"
                    required
                >
            </div>

            <!-- Select Group -->
            <div class="mb-4">
                <label for="form_group" class="block mb-2 font-medium text-gray-700">Select Group</label>
                <select
                name="form_group"
                id="form_group"
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 form-control"
                required
            >
                <option value="" disabled selected>Select a group</option>
                @foreach($emailGroups as $group)
                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                @endforeach
            </select>

            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button
                    type="submit"
                    class="px-6 py-2 text-white transition bg-blue-500 rounded-lg hover:bg-blue-600"
                >
                    Next
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
@endsection
