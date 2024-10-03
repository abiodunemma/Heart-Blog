<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #dab4c6;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #d5006d; /* Feminine color */
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #d1a4d8;
            border-radius: 4px;
        }

        input[type="file"] {
            display: block;
        }

        .submit-button {
            background-color: #d5006d; /* Feminine color */
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        .submit-button:hover {
            background-color: #a0004f; /* Darker shade on hover */
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>
        <form>
            <div class="form-group">
                <label for="profile-pic">Profile Picture:</label>
                <input type="file" id="profile-pic" name="profile-pic">
            </div>
            <div class="form-group">
                <label for="name">Name:</label>

                <input type="text" id="name" name="name" placeholder="{{  Auth::User()->name  }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder=":{{  Auth::User()->email  }}" required>
            </div>
            <div class="form-group">
                <label for="bio">Bio:</label>
                <textarea id="bio" name="bio"  placeholder="wow! what on your mind"rows="4"></textarea>
            </div>
            <button type="submit" class="submit-button">Save Changes</button>
        </form>
    </div>
</body>
</html>
