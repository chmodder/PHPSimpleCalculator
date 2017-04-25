<?php include 'calculate.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post">
    <label for="number1">Number 1: </label>
    <input type="number" name="number1"><br>
    <label for="number2">Number 2: </label>
    <input type="number" name="number2"><br>

    <label for="operator">Math operation</label>
    <select name="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide" selected>/</option>
    </select>

    <input type="submit" value="calculate">
</form>

<h1>Your result</h1>

<?php
echo $result . "<br/>";
?>


</body>
</html>