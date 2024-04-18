slip03.html
<html>
     <title>Home Page</title>
     <form action="slip03.php" method="GET">
     <br>Enter Username:<input type='text' name="uname">
       <br><input type="checkbox" name="che" value="checked">
     <br>Enter Passwod:<input type="text" name="pswd">
     <br><input type="radio" name="che">
<br><input type="submit" name="Submit">
</form>
</html>

slip03.php
<?php
    session_start();
    if(!isset($_SESSION['cnt']))
        $_SESSION['cnt']=0;
        
    $uname=$_GET['uname'];
    $pswd=$_GET['pswd'];
    
    if($uname==" " && pswd==" ")
    {
       echo "ERROE...";
    }  
    if($uname=="pandey" && $pswd="2002")
    {
        echo"Correct username and password";
        echo "<br> Welcome";
        $_SESSION['cnt']=0;
    }
    else
    {
        $_SESSION['cnt']=$_SESSION['cnt']+1;
        if($_SESSION['cnt']>=3)
        {
            echo "Error! You used all chance";
            $_SESSION['cnt']=0;
        }
        else
        {
            echo "Login Failed".$_SESSION['cnt']."attempts made";
            include("slip03.html");
        }
    }
?>