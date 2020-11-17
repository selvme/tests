<!--#!/usr/bin/env php-->

<?php

function convertFullName($string) 
{
    $pattern = "/[\s]+/";
    $result = preg_split($pattern, $string, 0, PREG_SPLIT_NO_EMPTY);
    
    if (gettype($string) != 'string' || count($result) < 3) {
        throw new Exception("Wrong format of your string. For example - Ivanov Ivan Ivanovich.");
    }
    
    $result =   $result[0] . " "
                . substr($result[1], 0, 2) . ". "
                . substr($result[2], 0, 2) . ". " . PHP_EOL;

    return $result; // Результат: Фамилия И.О.
}

echo convertFullName('Иванов Иван Иванович');
