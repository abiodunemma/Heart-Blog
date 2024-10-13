<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #030303;
        margin: 0;
        padding: 20px;
    }

    .container {
        max-width: 600px;
        margin: auto;
        background: rgb(215, 186, 228);
        padding: 100px;
        border-radius: 20px;
        box-shadow: 0 5px 2px 10px rgba(0, 0, 0, 0.1, 0.5, 0.7, 0.3, 0.7);
    }

    h1 {
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="file"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #5cb85c;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #4cae4c;
    }

    .preview-container {
        margin-top: 20px;
        text-align: center;
    }

    .thumbnail {
        max-width: 100%;
        border-radius: 8px;
    }

   </style>
    <title>Thumbnail and Quote Uploader</title>
</head>
<body>
    <div class="container">
        <h1>Upload Your Thumbnail and Quote</h1>
        <form id="uploadForm" action="{{ url('/Upload/home') }}" method="POST">
@csrf
input type="hidden" placeholder=""  name="userid" id="userid" value="{{ Auth::user()->id  }}">
        <input type="hidden" placeholder=""  name="name" id="username" value="{{ Auth::user()->name  }}">
            <div class="form-group">
                <label for="thumbnail">Thumbnail:</label>
                <input type="file" id="image" name="image"required>
            </div>
            <div class="form-group">
                <label for="quote">Quote:</label>
                <textarea id="quote" name="quote" required></textarea>
            </div>
            <button type="submit">Upload blog</button>
        </form>
        <div id="previewContainer" class="preview-container"></div>
    </div>
    <script>
        document.getElementById('uploadForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const thumbnailInput = document.getElementById('thumbnail');
            const quoteInput = document.getElementById('quote');
            const previewContainer = document.getElementById('previewContainer');

            // Clear previous previews
            previewContainer.innerHTML = '';

            // Get the uploaded file
            const file = thumbnailInput.files[0];
            const reader = new FileReader();

            // Create image element
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'thumbnail';

                // Create quote element
                const quoteText = document.createElement('p');
                quoteText.textContent = quoteInput.value;

                // Append to preview container
                previewContainer.appendChild(img);
                previewContainer.appendChild(quoteText);
            };

            // Read the file as a data URL
            if (file) {
                reader.readAsDataURL(file);
            } else {
                alert('Please upload a thumbnail.');
            }
        });

    </script>
</body>
</html>
