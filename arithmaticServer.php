<?php
    if(isset($_POST['btn_submit']))
    {
        $num1 =$_POST['num1'];
        $num2 =$_POST['num2'];

        switch($_REQUEST['btn_submit'])
        {
            case "ADD": $result = $num1 + $num2;
                        echo "sum  = ".$result;
                        break;
            case "SUB": $result = $num1 - $num2;
                        echo "difference  = ".$result;
                        break;
            case "MUL": $result = $num1 * $num2;
                        echo "product  = ".$result;
                        break;
            case "DIV": $result = $num1 / $num2;
                        echo "quotient  = ".$result;
                        break;
        }
    }
?>