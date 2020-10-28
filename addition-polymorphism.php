<?php
    function addition($num1 ,$num2) {

        if (is_int($num1) == 1 && is_int($num2) == 1 ) {
            return $num1 + $num2;
        }

        else if (is_int($num1) == 1 && is_float($num2) == 1) {
            return $num1 + $num2;
        }

        else if (is_float($num1) == 1 && is_int($num2) == 1) {
            return $num1 + $num2;
        }

        else if (is_float($num1) == 1 && is_float($num2) == 1) {
            return $num1 + $num2;
        }

        else if (is_string($num1) == 1 && is_string($num2) == 1) {
            return $num1 ." ". $num2;
        }

        else if (is_string($num1) == 1 && is_int($num2) == 1) {
            return $num1 ." ". $num2;
        }

        else if (is_float($num1) == 1 && is_string($num2) == 1) {
            return $num1 ." ". $num2;
        }

        else if (is_string($num1) == 1 && is_float($num2) == 1) {
            return $num1 ." ". $num2;
        }

        else if (is_int($num1) == 1 && is_string($num2) == 1) {
            return $num1 ." ". $num2;
        }

        else if (is_string($num1) == 1 && is_int($num2) == 1) {
            return $num1 ." ". $num2;
        }

        else {
            return "Invalid Operation";
        }
    }
   
    $result = addition(4 , "hguyg" );
    echo "The result of following operation is : $result";
?>

