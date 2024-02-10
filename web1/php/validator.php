<?php

function checkInput($x, $y): bool {

    if (!is_numeric($x) && !is_numeric($y)){
        return false;
    }
    if (!isset($y)){
        return false;
    }
    if ($x < -5 || $x > 3){
        return false;
    }
    return true;
}
