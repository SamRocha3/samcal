<?php

if($_POST["first_number"] != null && $_POST["second_number"] != null && !empty($_POST["operation"])){

    $first_number = floatval($_POST["first_number"]);
    $second_number = floatval($_POST["second_number"]);
    $operation = $_POST["operation"];

    switch($operation){
        case '-':
            $total = $first_number - $second_number;
            echo $first_number." - ".$second_number." = ". $total;
            break;
        case '+':
            $total = $first_number + $second_number;
            echo $first_number." + ".$second_number." = ". $total;
            break;
        case '*':
            $total = $first_number * $second_number;
            echo $first_number." * ".$second_number." = ". $total;
            break;
        case '/':
            if ($_POST["second_number"] == 0){
                echo "Não é possível dividir por zero";
            }else {
                $total = $first_number / $second_number;
                echo $first_number." / ".$second_number." = ". $total;  
            }
            break;
        }
} else {
    header("Location:index.php");
}
