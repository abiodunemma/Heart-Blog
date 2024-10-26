
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>

  <style>
    /* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Upload Container Styling */
.upload-container {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

/* File Input Styling */
input[type="file"] {
    display: block;
    margin: 20px auto;
}

/* Submit Button */
button {
    padding: 10px 20px;
    background-color: #28a745;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

  </style>
</head>
<body>

    <div class="upload-container">
        <h2>Upload an Image</h2>

        <!-- Image Upload Form -->
        <form action="/Upload/view" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="userid" name="userid" value="{{ Auth::user()->id  }}">
            <!-- Hidden fields for userid and quote -->

            <input type="text" name="quote" value="quote" ID="qoute"> <!-- Replace with dynamic quote -->

            <!-- File input -->
            <input type="file" name="image" id="image" accept="image/*" required>

            <!-- Submit button -->
            <button type="submit">Upload</button>
        </form>
    </div>

</body>
</html>
