@extends('layout.' . layout())

@section('subhead')
    <title>@translate(Form Responses)</title>
@endsection

@section('subcontent')
    <div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">Responses for {{ $form->name }}</h2>
    </div>

    <!-- Responses Table -->
    <div class="mt-5 intro-y">
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Response ID</th>
                        @if ($form->fields)
                            @foreach(json_decode($form->fields) as $field)
                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">
                                    {{ ucfirst($field) }}
                                </th>
                            @endforeach
                        @endif
                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($form->responses as $response)
                        <tr>
                            <td class="border-b dark:border-dark-5">{{ $response->id }}</td>
                            @if ($form->fields)
                                @foreach(json_decode($form->fields) as $field)
                                    <td class="border-b dark:border-dark-5">
                                        @php
                                            $responseData = json_decode($response->data, true);
                                        @endphp
                                        {{ $responseData[$field] ?? 'N/A' }}
                                    </td>
                                @endforeach
                            @endif
                            <td class="border-b dark:border-dark-5">{{ $response->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="{{ $form->fields ? count(json_decode($form->fields)) + 2 : 2 }}" class="text-center border-b dark:border-dark-5">
                                No responses found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
