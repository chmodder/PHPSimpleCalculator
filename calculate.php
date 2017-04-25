<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculate</title>
</head>
<body>

<h1>Your result</h1>
<?php

$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
$operator = $_POST["operator"];

//defining a variable is not necessary in PHP but if code is converted to for example java or c# it is
//$result;

    switch($operator)
    {
        case "add":
          $result = $number1 + $number2;
          break;
        case "subtract":
            $result = $number1 - $number2;
            break;
        case "multiply":
            $result = $number1 * $number2;
            break;
        case "divide":
            $result = $number1 / $number2;
            break;
    }

echo $result . "<br/>";
?>

<a href="index.html" target="_self">go back</a>

</body>
</html>