slip09.html
<html>
<body>
<p> Enter your userId and Password </p>
<input type = "text" name = "userId" id = "Id" >
<input type = "password" name = "Pass" id = "pass" >
<script type = "text/javascript">
function Fun() {
var userid = document.getElementById("Id").value;
var pass = document.getElementById("pass").value;
if(userid === "modi" && pass === "2024")
alert("Correct UserId and Password");
else
alert("Wrong Password");
}
</script>
<button onclick = "Fun()"> check id and password </button>
</body>
</html>
