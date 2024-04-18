slip08.html
<html>
<body>
	<input type=button value=alert onclick="Alert()">
	<input type=button value=prompt onclick="Prompt()">
	<input type=button value=confirm onclick="Confirm()">
<script>
	function Alert()
	{
	    alert("Exam are near,have you start preparing for ?");
	}
	function Prompt()
	{
	    var ans=prompt("Have you Start preparing: ? YES ");
	    if(ans=="yes")
	    	alert("Good Student");
	    else
	       alert("Bad Student");
	}
	function Confirm()
	{
	    var chk=confirm("Are You Ready For Exam ?");
	    if(chk=="true")
	       alert("All The Best");
	    else
	       alert("Then Start Studing");
	}
</script>
</body>
</html>