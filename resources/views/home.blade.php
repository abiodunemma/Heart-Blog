<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
  <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background: url('/img/profile.jpg') no-repeat center center fixed;

        background-size: cover;
        transition: background-color 0.3s;
    }

    .container {
        display: flex;
    }

    .sidebar {
        width: 250px;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        transition: background-color 0.3s;
    }

    .sidebar h2 {
        margin-bottom: 20px;
    }

    .sidebar ul {
        list-style: none;
    }

    .sidebar li {
        margin: 15px 0;
    }

    .sidebar a {
        text-decoration: none;
        color: #333;
    }

    .sidebar a:hover {
        color: #007BFF;
    }

    .main-content {
        flex: 1;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.9);
        transition: background-color 0.3s, color 0.3s;
    }

    .profile-info {
        display: flex;
        align-items: center;
    }

    .profile-info img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 20px;
    }

    /* Dark Mode */
    body.dark-mode {
        background-color: #121212;
    }

    .sidebar.dark-mode {
        background-color: #1F1F1F;
    }

    .main-content.dark-mode {
        background-color: #1E1E1E;
        color: #FFFFFF;
    }

    .sidebar.dark-mode a {
        color: #FFFFFF;
    }

    .sidebar.dark-mode a:hover {
        color: #007BFF;
    }


    .toggle-container {
        width: 60px;
        height: 30px;
        background-color: #ccc;
        border-radius: 30px;
        position: relative;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .toggle {
        width: 28px;
        height: 28px;
        background-color: white;
        border-radius: 50%;
        position: absolute;
        top: 1px;
        left: 1px;
        transition: transform 0.3s;
    }

    .toggle-container.active {
        background-color: #4caf50;
    }

    .toggle-container.active .toggle {
        transform: translateX(30px);
    }

  </style>

</head>
<body>
    <div class="container">
        <nav class="sidebar">
            <h2>Profile</h2>
            <ul>




                <li><a href="{{ url('/Upload/home') }}">Home</a></li>
                <li><a href="{{ url('User/edit-profile')}}">Edit profile</a></li>
                <li><a href="{{ url('/Upload/upload') }}">Upload</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>

        </nav>
        <main class="main-content">
            <h4>Welcome, {{  Auth::User()->name  }}</h4>
            <div class="profile-info">
                <img src="{{  Auth::User()->photo  }}" alt="Profile Picture">
                <p>Bio:  {{  Auth::User()->bio  }}
                    <br>
                </br>
                <br>
                    <p>email:  {{  Auth::User()->email  }}


                </p>

            </div>
        </main>
    </div>
    <script>  const toggleButton = document.getElementById('toggle-theme');

        toggleButton.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            document.querySelector('.sidebar').classList.toggle('dark-mode');
            document.querySelector('.main-content').classList.toggle('dark-mode');
        });
        const toggleContainer = document.getElementById('toggle-theme');
        toggleButton.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        toggleContainer.addEventListener('click', function() {
            toggleContainer.classList.toggle('dark-mode');
        })
        });
        <button id="toggle-theme" class="toggle">Toggle Dark Mode</button>

        <div class="toggle-container">
            <div class="toggle" id="toggle-theme"></div>
        </div>

    </script>
</body>
</html>

