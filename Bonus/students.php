<?php
    $students = [
        [
            "firstName" => "James",
            "lastName" => "Fields",
            "grades" => [12, 11, 15],
            "average" => -1
        ],
        [
            "firstName" => "Richard",
            "lastName" => "Stein",
            "grades" => [18, 12, 13],
            "average" => -1
        ],
        [
            "firstName" => "Mark",
            "lastName" => "Hartoff",
            "grades" => [9, 11, 10],
            "average" => -1
        ],
        [
            "firstName" => "Thomas",
            "lastName" => "Nestle",
            "grades" => [9, 8, 5],
            "average" => -1
        ],
        [
            "firstName" => "Jeremy",
            "lastName" => "Brent",
            "grades" => [18, 15, 16],
            "average" => -1
        ]
    ];
    $students_encode = json_encode($students);
    echo $students_encode;
    
?>