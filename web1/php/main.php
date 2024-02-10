<?php
    require_once "validator.php";
    require_once "hitRecorder.php";
    $current_time = date("H:i:s");
    $res = false;
    if (isset($_POST['x']) && isset($_POST['y']) && isset($_POST['r'])){
        $x = $_POST['x'];
        $y = $_POST['y'];
        $r = $_POST['r'];
        if (checkInput($x, $y)){
            $res = hitRecord($x, $y, $r);
            $hit = "false";
            if ($res){
                $hit = "true";
            }
            $end = round(microtime(true) -  $_SERVER["REQUEST_TIME_FLOAT"], 5);
            $answer = "<tr>
        <td>" . $x . "</td>
        <td>" . $y . "</td>
        <td>" . $r . "</td>
        <td>" . $current_time . "</td>
        <td>" . $end . "</td>
        <td>" . $hit . "</td>
    </tr>";
            echo $answer;
        }
    }




