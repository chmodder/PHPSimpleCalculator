
<?php
if(isset($_POST['number1']) && isset($_POST['number2']))
{
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $operator = $_POST["operator"];

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

}
else
{
    $result = "";
}

//defining a variable is not necessary in PHP but if code is converted to for example java or c# it is
//$result;


?>

<!--<a href="index.html" target="_self">go back</a>-->
