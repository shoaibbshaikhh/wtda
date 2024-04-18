<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fibonacci Numbers</title>
</head>
<body>
    <h2>Click the button to print Fibonacci numbers:</h2>
    <button onclick="printFibonacci()">Print Fibonacci Numbers</button>
    <p id="fibonacciOutput"></p>

    <script>
        function printFibonacci() 
        {
            var num1 = 0, num2 = 1;
            var count = parseInt(prompt("Enter the number of Fibonacci numbers to generate:"));
            var fibonacciSeries = "";

            for (var i = 0; i < count; i++) 
            {
                fibonacciSeries += num1 + ", ";
                var nextNum = num1 + num2;
                num1 = num2;
                num2 = nextNum;
            }
            document.getElementById("fibonacciOutput").textContent = fibonacciSeries.slice(0, -2); 
        }
    </script>
</body>
</html>