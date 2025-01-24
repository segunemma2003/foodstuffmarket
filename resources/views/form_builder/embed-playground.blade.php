<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Builder</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                <!-- Form Fields Checkboxes -->
                <div>
                    <label class="block mb-2 font-medium text-gray-700">Choose Fields</label>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-2">
                            <input
                                type="checkbox"
                                value="email"
                                class="form-field-checkbox"
                                checked
                            >
                            <span>Email</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input
                                type="checkbox"
                                value="first_name"
                                class="form-field-checkbox"
                            >
                            <span>First Name</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input
                                type="checkbox"
                                value="last_name"
                                class="form-field-checkbox"
                            >
                            <span>Last Name</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input
                                type="checkbox"
                                value="address"
                                class="form-field-checkbox"
                            >
                            <span>Address</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input
                                type="checkbox"
                                value="phone"
                                class="form-field-checkbox"
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
                        value="Subscribe"
                    >
                </div>

                <div>
                    <label for="formButton" class="block mb-1 text-gray-700">Form Button</label>
                    <input
                        type="text"
                        id="formButton"
                        class="w-full px-4 py-2 text-gray-700 border rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                        placeholder="Form Title"
                        value="Submit"
                    >
                </div>

                <div>
                    <label for="formDescription" class="block mb-1 text-gray-700">Form Button</label>
                    <input
                        type="text"
                        id="formDescription"
                        class="w-full px-4 py-2 text-gray-700 border rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                        placeholder="Form Title"
                        value="Form Description"
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
                <!-- Logo -->
                <div class="mb-4 text-center">
                    <img src="http://foodstuff.store/latest/image/FSSLOGO1-2.png" alt="Logo" class="h-8 mx-auto">
                </div>
                <div class="flex flex-col">
                    <h2 id="formTitleDisplay" class="text-xl font-bold">Subscribe</h2>
                    <p id="formDescriptionDisplay" class="mb-4 text-xs">type description</p>
                </div>

                <!-- Form Fields -->
                <form>
                    @csrf
                <div id="formFieldsDisplay" class="space-y-4">
                    <!-- Default Email Field -->
                    <div id="email">
                        <label for="email" class="block mb-1 text-gray-700">Email Address</label>
                        <input
                            type="email"
                            id="emailInput"
                            class="w-full px-4 py-2 border rounded-lg"
                            placeholder="Enter your email"
                        >
                    </div>
                </div>
                <!-- Submit Button -->
                <button
                    id="formButtonDisplay"
                    class="w-full px-4 py-2 mt-6 text-white bg-red-600 rounded-lg hover:bg-red-700"
                >
                    Submit
                </button>
                </form>
            </div>
        </main>
    </div>

    <!-- Script for Real-time Updates -->
    <script>
        const formFields = ["email"];

        function toggleLoading(show) {
            const loadingIndicator = document.getElementById('loadingIndicator');
            loadingIndicator.classList.toggle('hidden', !show);
        }

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
                } else {
                    // Remove the field
                    const fieldToRemove = document.getElementById(fieldId);
                    if (fieldToRemove) {
                        fieldToRemove.remove();
                    }
                    const index = formFields.indexOf(fieldId);
                    if (index !== -1) formFields.splice(index, 1);
                }
            });
        });

        // Update the form title in real-time
        document.getElementById('formTitle').addEventListener('input', function () {
            document.getElementById('formTitleDisplay').textContent = this.value;
        });

        document.getElementById('formDescription').addEventListener('input', function () {
            document.getElementById('formDescriptionDisplay').textContent = this.value;
        });


        document.getElementById('formButton').addEventListener('input', function () {
            document.getElementById('formButtonDisplay').textContent = this.value;
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
                form_design: document.getElementById('formTemplate').innerHTML,
            };
            console.log(formData);
            console.log(csrfToken);

            try {
                const response = await fetch('/saveForm', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json',
                    // 'X-CSRF-TOKEN': csrfToken,
                 },
                    body: JSON.stringify(formData),
                });

                const result = await response.json();
                console.log(result);
                if (response.ok) {
                    // alert('Form saved successfully!');
                    window.open(`/previewForm/${result.id}`, '_blank');
                } else {
                    alert(`Error: ${result.message}`);
                }
            } catch (error) {
                alert(`Failed to save form: ${error.message}`);
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
                const response = await fetch('/saveForm', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(formData),
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
