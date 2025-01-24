<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Preview</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .save-button { position: fixed; top: 10px; right: 10px; }
    </style>
</head>
<body>
    <button class="save-button" onclick="saveForm()">Save</button>
    <h1>{{ $form->title }}</h1>
    <div>{!! $form->design !!}</div>

    <script>
        function saveForm() {
            alert('Form saved successfully!'); // Replace with save logic if necessary
        }
    </script>
</body>
</html>
