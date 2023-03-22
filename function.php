<?php

function getPassword($length) 
{
    $chars = 'abcdefghilmnopqrstuvz';
    $numbers = '123456789';
    $simbols = '.,!?&£()*+§';

    $chars .= strtoupper($chars);
    $chars .= $numbers;
    $chars .= $simbols;

    for($i = 0; $i < $length; $i++) {

        $max = strlen($chars) - 1;
        $random_index = rand(0, $max);

        $char = $chars[$i];
        // var_dump($char);

        $password .= $char;
    }

    return $password;

}