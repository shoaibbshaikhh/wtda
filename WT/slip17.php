slip17.html-
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Registration</title>
</head>
<body onload="showMessage()">
<script>
    function showMessage() 
      {
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var message = "";

        if (hours < 12) 
         {
            message = "Good Morning!";
         } 
         else if (hours < 18) 
         {
            message = "Good Afternoon!";
         } 
         else 
         {
            message = "Good Evening!";
         }   
        alert("Hello, " + message);
      }
</script>

<h2>Student Registration Form</h2>
<form>
    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName"><br><br>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob"><br><br>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select><br><br>

    <input type="submit" value="Register">
</form>
</body>
</html>
