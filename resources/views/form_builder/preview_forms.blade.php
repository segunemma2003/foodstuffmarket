<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Preview</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .save-button { position: fixed; top: 10px; right: 10px; }

        /* Loading Overlay Styles */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            display: none; /* Hidden by default */
            justify-content: center;
            align-items: center;
        }

        .loading-overlay.visible {
            display: flex; /* Show when active */
        }

        .loading-spinner {
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-top: 4px solid white;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="h-screen bg-gray-100">

    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loading-overlay">
        <div class="loading-spinner"></div>
    </div>

    <div class="flex items-center justify-between p-4 border-b shadow bg-gray-50">
        <!-- Logo -->
        <div class="flex items-center">
            <img src="http://foodstuff.store/latest/image/FSSLOGO1-2.png" alt="Logo" class="h-10">
        </div>

        <!-- Buttons -->
        <div class="flex items-center space-x-4">
            <button
                onclick="saveForm()"
                class="px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700"
            >
                Save Form
            </button>
            <a
                href="{{ route('form.updateForm', $form->id) }}"
                class="px-4 py-2 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-100"
            >
                Back to Playground
            </a>
        </div>
    </div>

    <main class="flex items-center justify-center h-[calc(100vh-64px)]  mt-24">
        <div class="w-1/2 p-8 bg-white border rounded-lg shadow">
            <h1 class="text-2xl font-bold">{{ $form->title }}</h1>
            <div class="mt-4">{!! html_entity_decode($form->design) !!}</div>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        function toggleLoadingOverlay(show) {
            const overlay = document.getElementById('loading-overlay');
            if (show) {
                overlay.classList.add('visible');
            } else {
                overlay.classList.remove('visible');
            }
        }

        function saveForm() {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Show the loading overlay
            toggleLoadingOverlay(true);

            axios.post('/api/save/form', {
                form_id: {{ $form->id }},
                status: 'saved', // Update status to 'saved'
            }, {
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
            })
            .then(response => {
                if (response.status === 200) {
                    toastr.success('Form saved successfully!');
                    window.open(`/form-builder`);
                } else {
                    toastr.error('Failed to save form.');
                }
            })
            .catch(error => {
                console.error('Error saving form:', error);
                toastr.error('Error saving form. Please try again.');
            })
            .finally(() => {
                // Hide the loading overlay
                toggleLoadingOverlay(false);
            });
        }
    </script>
</body>
</html>
