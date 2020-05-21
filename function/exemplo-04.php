.<?php

function ola(){
    $arguments = func_get_args();
    return $arguments;
}

var_dump(ola('flavio', 42,90,1.79));
/*
array (size=4)
  0 => string 'flavio' (length=6)
  1 => int 42
  2 => int 90
  3 => float 1.79
*/
?>