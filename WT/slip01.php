slip01.html
<html>
     <head>
           <title>Access</title>
     </head>
     <body>
           <form action="S01.php" method="POST">
           Visit page<br>
           <input type="submit" value="submit">
     </body>
</html>


slip01.php
<?php
    session_start();
    if (isset($_SESSION['cnt']))
       $_SESSION['cnt']+=1;
    else
       $_SESSION['cnt']=1;
    echo "Web Page Access ".$_SESSION['cnt']," Times";
?>