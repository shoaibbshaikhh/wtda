slip13.html
<!DOCTYPE html>
<html>
<head>
    <title>AJAX Example</title>
    <script>
        function sendRequest() 
        {
            var name = document.getElementById("name").value;
            var message = document.getElementById("message");
            if (name == "") 
            {
                message.innerHTML = "Stranger, please tell me your name!";
            } 
            else 
            {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                        var response = this.responseText;
                        if (response == "Hello master !") 
                        {
                          document.getElementById("message").innerHTML = " Hello master " + name + "!";
                        }
                        else 
                            document.getElementById("message").innerHTML = "I Don't Know You! " +name+ "!!";
                        }
                    };
                    xhr.open("GET", "slip13.php?name=" + name, true);
                    xhr.send();
                }
            }
    </script>
</head>
<body>
    <h1>AJAX Example</h1>
    Enter your name : <input type="text" id="name" onkeyup="sendRequest()">
    <p id="message"></p>
</body>
</html>

slip13.php -
<?php
$name = $_GET["name"];
if ($name == "")
{
    echo " ";
}
else if ($name == "Rohit" || $name == "Virat" || $name == "Dhoni" || $name == "Ashwin" || $name == "Harbhajan")
{
    echo "Hello master !";
}
?>