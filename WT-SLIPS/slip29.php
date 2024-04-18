slip29.html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series & Sum of Digits</title>
</head>
<body>
    <h2>Fibonacci Series & Sum of Digits</h2>
    <form method="post" action="slip29.php">
        Enter a number: <input type="number" name="number" required>
        <button type="submit">Calculate</button>
    </form>    
</body>
</html>

slip29.php 
<?php
    function fibonacci($n) 
    {
        $fib = [0, 1];
        for ($i = 2; $i < $n; $i++) 
        {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }
        return $fib;
    }
    function sumOfDigits($number) 
    {
        $sum = 0;
        while ($number != 0) 
        {
            $sum += $number % 10;
            $number = (int)($number / 10);
        }
        return $sum;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $number = $_POST['number'];
        $fibonacciSeries = fibonacci($number);

        $sumOfDigits = sumOfDigits($number);

        echo "<h3>Fibonacci Series:</h3>";
        echo implode(", ", $fibonacciSeries);

        echo "<h3>Sum of Digits:</h3>";
        echo $sumOfDigits;
    }
    ?>