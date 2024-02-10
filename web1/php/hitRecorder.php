<?php
    function hitRecord($x, $y, $r): bool{
        return ($x*$x+$y*$y<=$r*$r/4 && ($x <= 0 && $y <= 0)) ||
            ($y<=$r/2 && $y>=0 && $x>=-$r && $x<=0) ||
            ($y<=-$x+$r/2 && $y>=0 && $x>=0 && $x<=$r/2);
    }