<?php
function getOperatorSymbol($operator)
{
    if (isset($operator))
    {

        switch ($operator)
        {
            case "add":
                $operatorSym = "+";
                break;
            case "subtract":
                $operatorSym = "-";
                break;
            case "multiply":
                $operatorSym = "*";
                break;
            case "divide":
                $operatorSym = "/";
                break;
        }
    } else
    {
        $operatorSym = "";
    }
    return $operatorSym;
}

function calculateNumbers($number1, $number2, $operator)
{
    if (isset($number1) && isset($number2))
    {

        switch ($operator)
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
    } else
    {
        $result = "";
    }


    return $result;


}

?>