<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Builder</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen bg-gray-100">
    <div
        id="loadingIndicator"
        class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-50"
    >
        <div class="w-16 h-16 border-4 border-blue-500 rounded-full border-t-transparent animate-spin"></div>
    </div>

    <!-- Navbar -->
    <div class="flex items-center justify-between p-4 border-b shadow bg-gray-50">
        <!-- Logo -->
        <div class="flex items-center">
            <img src="http://foodstuff.store/latest/image/FSSLOGO1-2.png" alt="Logo" class="h-10">
        </div>

        <!-- Buttons -->
        <div class="flex items-center space-x-4">
            <button
            id="saveDraft"
                class="px-4 py-2 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-100"
            >
              Save Draft
            </button>
            <button
               id="previewForm"
                class="px-6 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700"
            >
                Preview Form
            </button>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex h-[calc(100vh-64px)]">
        <!-- Sidebar -->
        <aside class="w-1/4 p-4 bg-white border-r">
            <h2 class="mb-4 text-lg font-semibold text-gray-700">Form Fields</h2>
            <div class="space-y-2">
                @php
                // Decode the JSON fields from the database
                $savedFields = $form->fields ? json_decode($form->fields, true) : [];
            @endphp
                <!-- Form Fields Checkboxes -->
                <div>
                    <label class="block mb-2 font-medium text-gray-700">Choose Fields</label>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-2">
                            <input
                                type="checkbox"
                                value="email"
                                class="form-field-checkbox"
                                {{-- {{ in_array('email', $savedFields) ? 'checked' : '' }} --}}
                                checked
                            >
                            <span>Email</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input
                                type="checkbox"
                                value="first_name"
                                class="form-field-checkbox"
                                {{ in_array('first_name', $savedFields) ? 'checked' : '' }}
                            >
                            <span>First Name</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input
                                type="checkbox"
                                value="last_name"
                                class="form-field-checkbox"
                                {{ in_array('last_name', $savedFields) ? 'checked' : '' }}
                            >
                            <span>Last Name</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input
                                type="checkbox"
                                value="address"
                                class="form-field-checkbox"
                                {{ in_array('address', $savedFields) ? 'checked' : '' }}
                            >
                            <span>Address</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input
                                type="checkbox"
                                value="phone"
                                class="form-field-checkbox"
                                {{ in_array('phone', $savedFields) ? 'checked' : '' }}
                            >
                            <span>Phone Number</span>
                        </label>
                    </div>
                </div>

                <!-- Settings -->
                <h2 class="mt-6 mb-2 text-lg font-semibold text-gray-700">Settings</h2>
                <div>
                    <label for="formTitle" class="block mb-1 text-gray-700">Form Title</label>
                    <input
                        type="text"
                        id="formTitle"
                        class="w-full px-4 py-2 text-gray-700 border rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                        placeholder="Form Title"
                         value="{{ $form->title ?? 'Subscribe' }}"
                    >
                </div>

                <div>
                    <label for="formButton" class="block mb-1 text-gray-700">Form Button</label>
                    <input
                        type="text"
                        id="formButton"
                        class="w-full px-4 py-2 text-gray-700 border rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                        placeholder="Form Title"
                        value="{{ $form->button_text ?? 'Submit' }}"
                    >
                </div>

                <div>
                    <label for="formDescription" class="block mb-1 text-gray-700">Form Button</label>
                    <input
                        type="text"
                        id="formDescription"
                        class="w-full px-4 py-2 text-gray-700 border rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                        placeholder="Form Title"
                        value="{{ $form->subtitle ?? 'Form Description' }}"
                    >
                </div>
            </div>
        </aside>

        <!-- Main Pane -->
        <main class="flex-1 p-8 bg-white">
           <div
                id="formTemplate"
                class="w-[600px] border border-gray-300 rounded-lg p-4 mx-auto"
            >
            <div class="mb-4 text-center">
                <img src="http://foodstuff.store/latest/image/FSSLOGO1-2.png" alt="Logo" class="h-8 mx-auto">
            </div>
            <div class="flex flex-col">
                <h2 id="formTitleDisplay" class="text-xl font-bold">Subscribe</h2>
                <p id="formDescriptionDisplay" class="mb-4 text-xs">type description</p>
            </div>

            <!-- Form Fields -->

            <div id="formFieldsDisplay" class="space-y-4">
                <!-- Default Email Field -->
                {{-- <div id="email">
                    <label for="email" class="block mb-1 text-gray-700">Email Address</label>
                    <input
                        type="email"
                        id="emailInput"
                        class="w-full px-4 py-2 border rounded-lg"
                        placeholder="Enter your email"
                    >
                </div> --}}
            </div>
            <!-- Submit Button -->
            <button
                id="formButtonDisplay"
                type="submit"
                class="w-full px-4 py-2 mt-6 text-white bg-red-600 rounded-lg hover:bg-red-700"
            >
                Submit
            </button>
                <!-- Logo -->

            </div>
        </main>
    </div>

    <!-- Script for Real-time Updates -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        // Check if it's an array
        console.log(@json($form->fields)); // logs the fields correctly
        let formFields = @json($form->formFields); // This is the JSON string

        // Parse it to an actual JavaScript array
        formFields = JSON.parse(formFields) ?? ['email'];
        console.log(Array.isArray(formFields));

        function toggleLoading(show) {
            const loadingIndicator = document.getElementById('loadingIndicator');
            loadingIndicator.classList.toggle('hidden', !show);
        }


        document.addEventListener('DOMContentLoaded', function () {
            // Get all checked checkboxes
            const checkedCheckboxes = document.querySelectorAll('.form-field-checkbox:checked');

            // Add fields for checked checkboxes
            checkedCheckboxes.forEach((checkbox) => {
                const fieldId = checkbox.value;
                const fieldDisplay = document.getElementById('formFieldsDisplay');

                // Create the field wrapper
                const fieldWrapper = document.createElement('div');
                fieldWrapper.id = fieldId;

                // Create the label
                const label = document.createElement('label');
                label.textContent = fieldId.split('_')
                    .map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase())
                    .join(' ');
                label.classList.add('block', 'text-gray-700', 'mb-1');

                // Create the input
                const input = document.createElement('input');
                input.type = fieldId === 'phone' ? 'tel' :fieldId === 'email'? "email": 'text';
                input.name = fieldId;
                input.placeholder = `Enter your ${fieldId.replace('_', ' ')}`;
                input.classList.add('w-full', 'px-4', 'py-2', 'border', 'rounded-lg');

                // Append label and input to the wrapper
                fieldWrapper.appendChild(label);
                fieldWrapper.appendChild(input);

                // Append the wrapper to the form fields display
                fieldDisplay.appendChild(fieldWrapper);
            });
        });
        // Handle adding/removing fields
        document.querySelectorAll('.form-field-checkbox').forEach((checkbox) => {
            checkbox.addEventListener('change', function () {
                const fieldDisplay = document.getElementById('formFieldsDisplay');
                const fieldId = this.value;

                if (this.checked) {
                    // Add the field
                    const fieldWrapper = document.createElement('div');
                    fieldWrapper.id = fieldId;

                    const label = document.createElement('label');
                    label.textContent = fieldId.split('_')
  .map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase())
  .join(' ');
                    label.classList.add('block', 'text-gray-700', 'mb-1');

                    const input = document.createElement('input');
                    input.type = fieldId=="phone"?'tel':'text';
                    input.name = fieldId;
                    input.placeholder = `Enter your ${fieldId.replace('_', ' ')}`;
                    input.classList.add('w-full', 'px-4', 'py-2', 'border', 'rounded-lg');

                    fieldWrapper.appendChild(label);
                    fieldWrapper.appendChild(input);
                    fieldDisplay.appendChild(fieldWrapper);

                    formFields.push(fieldId);
                    console.log(formFields);
                } else {
                    // Remove the field
                    const fieldToRemove = document.getElementById(fieldId);
                    if (fieldToRemove) {
                        fieldToRemove.remove();
                    }
                    const index = formFields.indexOf(fieldId);
                    if (index !== -1) formFields.splice(index, 1);
                    console.log(formFields);
                }
            });
        });

        const formTitle = "<?php echo $form->title ?? ''; ?>";
        const formSubtitle = "<?php echo $form->subtitle ?? ''; ?>";
        const formButtonText = "<?php echo $form->button_text ?? ''; ?>";

        // Set default display values if not null
        if (formTitle) {
            document.getElementById('formTitleDisplay').textContent = formTitle;
            document.getElementById('formTitle').value = formTitle;
        }

        if (formSubtitle) {
            document.getElementById('formDescriptionDisplay').textContent = formSubtitle;
            document.getElementById('formDescription').value = formSubtitle;
        }

        if (formButtonText) {
            document.getElementById('formButtonDisplay').textContent = formButtonText;
            document.getElementById('formButton').value = formButtonText;
        }

        // Update the form title in real-time
        document.getElementById('formTitle').addEventListener('input', function () {
            document.getElementById('formTitleDisplay').textContent = this.value;
        });

        // Update the form subtitle/description in real-time
        document.getElementById('formDescription').addEventListener('input', function () {
            document.getElementById('formDescriptionDisplay').textContent = this.value;
        });

        // Update the form button text in real-time
        document.getElementById('formButton').addEventListener('input', function () {
            document.getElementById('formButtonDisplay').textContent = this.value;
        });

        document.getElementById('saveDraft').addEventListener('click', async () => {
            toggleLoading(true);
            const formTitle = document.getElementById('formTitle').value;
            const formButton = document.getElementById('formButton').value;
            const formDescription = document.getElementById('formDescription').value;
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
console.log(formFields);
            const formData = {
                title: formTitle,
                form_id: {{ $form->id }},
                subtitle: formDescription,
                button_text: formButton,
                fields: formFields,
                form_design: document.getElementById('formTemplate').innerHTML,
                status: 'draft', // Ensure the status remains 'draft'
            };

            try {
                const response = await axios.post('/api/saveForm', formData, {
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                });

                if (response.status === 200) {
                    toastr.success('Draft saved successfully!');
                } else {
                    toastr.error('Failed to save draft.');
                }
            } catch (error) {
                console.error('Error saving draft:', error);
                toastr.error('Error saving draft. Please try again.');
            } finally {
                toggleLoading(false);
            }
        });

        document.getElementById('previewForm').addEventListener('click', async () => {
            toggleLoading(true);
            const formTitle = document.getElementById('formTitle').value;
            const formButton = document.getElementById('formButton').value;
            const formDescription = document.getElementById('formDescription').value;
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            const formData = {
                title: formTitle,
                form_id: {{$form->id}},
                subtitle: formDescription,
                button_text: formButton,
                fields: formFields,
                status: 'draft',
                form_design: document.getElementById('formTemplate').innerHTML,
            };
            console.log(formData);
            console.log(csrfToken);

            try {

                const response = await axios.post('/api/saveForm', formData, {
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            }});

                if (response.status == 200) {
                    toastr.success('Form saved successfully!');
                    console.log(response.data);
                    window.open(`/previewForm/${response.data.id}`, '_blank');
                } else {
                    console.log(`Error: ${response.data.message}`);
                    toastr.error(`Error: Unable to preview builder`);
                }


            } catch (error) {
                console.log(`Failed to save form: ${error.message}`);
                toastr.error('Error in preview, contact administrator');
                // alert(`Failed to save form: ${error.message}`);
            }finally {
                toggleLoading(false);
            }
        });


        // Save form to DB
        document.getElementById('submitForm').addEventListener('click', async () => {
            const formTitle = document.getElementById('formTitle').value;
            const formData = {
                title: formTitle,
                fields: formFields,
                form_design: document.getElementById('formTemplate').innerHTML,
            };

            try {
                const response = await fetch('/api/saveForm', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: formData,
                });

                const result = await response.json();
                if (response.ok) {
                    alert('Form saved successfully!');
                } else {
                    alert(`Error: ${result.message}`);
                }
            } catch (error) {
                alert(`Failed to save form: ${error.message}`);
            }
        });
    </script>
</body>
</html>
