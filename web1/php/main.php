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
            $answer = sprintf("<tr>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%d</td>
    </tr>", $x, $y, $r, $current_time, $end, $hit);
            echo $answer;
        }
    }




