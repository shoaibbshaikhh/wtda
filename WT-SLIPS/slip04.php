slip04.html -
<html>
    <head>
        <title> first page </title>
    </head>

    <form action="slip04.php" method="POST">
        Enter employee no : <input type="text" name="no"><br><br>
        Enter employee name : <input type="text" name="name"><br><br>
        Enter employee address : <input type="text" name="address"><br><br>
        <input type="submit" value="submit">
    </form>
</html>



slip04.php -
<?php
      $no=$_POST['no'];
      $name=$_POST['name'];
      $address=$_POST['address'];
      setcookie('no',$no);
      setcookie('name',$name);
      setcookie('address',$address);
?>
<html>
    <head>
        <title>Second page</title>
    </head>
    <body>

    <?php
        echo"<br>Employee No : ".$no."<br>";
        echo"Employee Name : ".$name."<br>";
        echo"Employee Address : ".$address."<br><br>";
    ?>    
    <form action="second.php" method="POST">
        Enter salary :<input type="number" name="sal"><br><br>
        Enter DA :<input type="number" name="da"><br><br>
        Enter HRA :<input type="number" name="hra"><br><br>
        <input type="submit" value="Send">
    </form>
</body>
</html>




second.php-
<?php
    $sal=$_POST['sal'];
    $da=$_POST['da'];
    $hra=$_POST['hra'];

$total=$sal+$da+$hra;
  if (isset($_COOKIE['no']))
  {
    $eno=$_COOKIE['no'];
  }
  if (isset($_COOKIE['name']))
  {
    $ename=$_COOKIE['name'];
  }
  if (isset($_COOKIE['address']))
  {
    $eadd=$_COOKIE['address'];
  }
?>

<html>
    <head>
        <title>Third page</title>
    </head>

    <body>
    <?php
        echo"<br>Employee No : ".$eno."<br><br>";
        echo"Employee Name : ".$ename."<br>";
        echo"Employee Address : ".$eadd."<br>";
        echo"Employee Salary : ".$sal."<br>";
        echo"Employee DA : ".$da."<br>";
        echo"Employee HRA : ".$hra."<br>";
        echo"Employee's Total salary  : ".$total."<br><br>";
        ?>
    </body>
</html>