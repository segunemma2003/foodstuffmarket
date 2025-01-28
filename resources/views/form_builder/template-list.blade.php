@extends('layout.' . layout())

@section('subhead')
    <title>@translate(Form Builder)</title>
@endsection

@section('subcontent')
    <div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">Form Builder</h2>
        <div class="flex w-full mt-4 sm:w-auto sm:mt-0">
            <a href="{{ route('form-builder.create') }}" class="mr-2 text-white shadow-md button bg-theme-1">
                Create Form
            </a>
        </div>
    </div>

    <!-- Form List Table -->
    <div class="mt-5 intro-y">
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Form Name</th>
                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Group</th>
                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Subtitle</th>
                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Link</th>
                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($forms as $form)
                        <tr>
                            <td class="border-b dark:border-dark-5">{{ $form->name }}</td>
                            <td class="border-b dark:border-dark-5">{{ $form->group->name ?? 'N/A' }}</td> <!-- Assuming a 'group' relationship -->
                            <td class="border-b dark:border-dark-5">{{ $form->subtitle ?? 'N/A' }}</td>
                            <td class="border-b dark:border-dark-5">{{ $form->status=="save"? env('APP_URL')."/form/".$form->slug : "Draft" }}</td>
                            <td class="border-b dark:border-dark-5 whitespace-nowrap">
                                <a href="{{ route('form.updateForm', $form->id) }}" class="text-blue-600 hover:text-blue-900">
                                    Edit
                                </a>
                                <span class="mx-2">|</span>
                                <a href="{{ route('form.responses', $form->id) }}" class="text-green-600 hover:text-green-900">
                                    View Responses
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center border-b dark:border-dark-5">No forms found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <!-- Add any necessary scripts here -->
@endsection
