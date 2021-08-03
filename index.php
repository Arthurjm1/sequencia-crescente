<?php

function SequenciaCrescente(array $array):bool
{
    $aux = [];
    $aux[0] = 1;
    for ($i = 1; $i < count($array); $i++) {
        $aux[$i] = 1;
        for ($j = 0; $j < $i; $j++) {
            if ($array[$i] > $array[$j] && $aux[$i] < $aux[$j] + 1) {
                $aux[$i] = $aux[$j] + 1;
            }
        }
    }   
    if(count($array) - max($aux)>= 2){
        return false;
    }
    return true;
}