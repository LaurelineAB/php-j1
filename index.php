<?php

//Exercices variables et types

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
    echo "$str<br>";
    
//Exercices boucles
    
    //Exercice 5
    $animals = ["Chat", "Chien", "Lapin", "Souris"];
    foreach($animals as $animal)
    {
        echo "$animal<br>";
    }
    
    //Exercice 6
    $numbers = [28, 32, 44, -67, 18, 24, -98];
    foreach($numbers as $number)
    {
        if ($number < 0)
        {
            echo "$number<br>";
        }
    }
    
    //Exercice 7
    $user = [
        "firstName" => "Barack",
        "lastName" => "Obama"
    ];
    echo "Je suis $user[firstName] $user[lastName], le 44ème président des USA.<br>";
    
    //Exercice 8
    $users = [
        [
            "firstName" => "Mari",
            "lastName" => "Doucet"
        ],
        [
            "firstName" => "Hugues",
            "lastName" => "Froger"
        ]
    ];
    foreach($users as $user)
    {
        echo "$user[firstName] $user[lastName]<br>";
    }
?>