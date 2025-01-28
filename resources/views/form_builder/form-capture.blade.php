<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$form->form_title}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Toastr Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .loader {
            border: 4px solid #fff;
            border-top-color: transparent;
            border-radius: 50%;
            width: 64px;
            height: 64px;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .save-button { position: fixed; top: 10px; right: 10px; }
    </style>
</head>
<body class="h-screen bg-gray-100">
    <!-- Loading Overlay -->
    <div id="loadingOverlay" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50 hidden">
        <div class="loader"></div>
    </div>

    <main class="flex items-center justify-center h-[calc(100vh-64px)] mt-12">
        <div class="w-1/2 p-8 bg-white border rounded-lg shadow">
            <!-- Success or Error Messages -->
            @if(session('success'))
                <div class="p-4 mb-4 text-green-800 bg-green-100 border border-green-300 rounded">
                    {{ session('success') }}
                </div>
            @elseif(session('error'))
                <div class="p-4 mb-4 text-red-800 bg-red-100 border border-red-300 rounded">
                    {{ session('error') }}
                </div>
            @endif

            <form method="post" action="{{ route('form.capture', ['uuid' => $form->slug]) }}">
                @csrf
                <input type="hidden" name="form_id" value="{{ $form->id }}" />

                <!-- Dynamic Form Design -->
                <div class="mt-4">
                    {!! html_entity_decode($form->design) !!}
                </div>
            </form>
        </div>
    </main>

    <!-- Toastr Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('form');
            const overlay = document.getElementById('loadingOverlay');

            // Display Toastr Messages
            @if(session('success'))
                toastr.success("{{ session('success') }}");
            @elseif(session('error'))
                toastr.error("{{ session('error') }}");
            @endif

            // Show the loading overlay on form submit
            form.addEventListener('submit', function (e) {
                overlay.classList.remove('hidden');
            });
        });
    </script>
</body>
</html>
