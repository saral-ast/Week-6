<?php

namespace Core;
class Validator{
    public static function string($value,$min = 1,$max = INF){
         $value = trim($value);
        //  dd(strlen($value) >= $min && strlen($value) <= $max);
         return strlen($value) >= $min && strlen($value) <= $max;
    }
}