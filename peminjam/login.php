<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b32423;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            width: 400px;
            padding: 40px;
            border: 5px solid #C39E5C;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            background-color: white;
            border-radius: 10px ;
            
        }

        label {
            display: block;
            margin-top: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .password-container {
            position: relative;
        }

        #password {
            width:100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .eye-icon {
            position: absolute;
            top: 10px;
            right: 8px;
            cursor: pointer;
            width: 30px;
            
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            margin-top: 30px;
            cursor: pointer;
            border-radius: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form action="homesiswa.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">

        <label for="password" style="margin-top: 20px;">Password:</label>
        <div class="password-container">
            <input type="password" id="password" name="password">
            <img src="/img/eye.png" alt="Toggle Password Visibility" class="eye-icon" onclick="togglePasswordVisibility()">
            <p>Belum Punya Akun <a href="signup.php">Sign Up </a></p>
        </div>
    
        <input type="submit" value="Log In">

        <script>
            function togglePasswordVisibility() {
                var passwordField = document.getElementById("password");
                var eyeIcon = document.querySelector(".eye-icon");

                if (passwordField.type === "password") {
                    passwordField.type = "text";
                    eyeIcon.src = "/img/eye.png"; // Change to your open eye icon image
                } else {
                    passwordField.type = "password";
                    eyeIcon.src = "/img/eyeclose.png"; // Change to your closed eye icon image
                }
            }
        </script>
    </form>
</body>

</html>