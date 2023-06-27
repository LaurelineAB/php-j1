<?php

    //Exercice 1
    $nb = 42;
    echo $nb;
    
    $string = '42';
    echo $string;
    
    $nbstr = "$nb";
    echo $nbstr;
    
    //Exercice 2
    $nb_tab = [1, 5, 34.5, 16.07];
    $str_tab = ['2', '43', '23.4','34.4'];
    print_r($nb_tab);
    print_r($str_tab);
    
    //Exercice 3
    $animal =
    [
        "species" => "Chat",
        "name" => "Ciel",
        "age" => 5];
    print_r($animal);
    
    //Exercice 4
    $data = 42;
    $float = (float) $data;
    $str = (string) $float;
    echo $data;
    echo $float;
    echo $str;
?>