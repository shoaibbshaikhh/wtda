<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Login</title>
</head>
<body>
    <h2>User Login</h2>
    <form onsubmit="return validateForm()">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" value="Login">
    </form>

    <script>
        function validateForm() 
        {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username.trim() === "") 
            {
                alert("Please enter a username.");
                return false;
            }

            if (password.trim() === "") 
            {
                alert("Please enter a password.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>