<?php

$students = [
    [
        'name' => 'John Doe',
        'marks' => 75,
    ],
    [
        'name' => 'Jane Doe',
        'marks' => 65,
    ],
    [
        'name' => 'Jim Doe',
        'marks' => 55,
    ],
    [
        'name' => 'Jill Doe',
        'marks' => 45,
    ],
    [
        'name' => 'Janet Doe',
        'marks' => 35,
    ],
];

foreach ($students as $student) {

    if ($student['marks'] >= 70) {
        echo $student['name'] . " is " . "Grade A <br>";
    } elseif ($student['marks'] >= 60) {
        echo $student['name'] . " is " . "Grade B <br>";
    } elseif ($student['marks'] >= 50) {
        echo $student['name'] . " is " . "Grade C <br>";
    } else {
        echo $student['name'] . " is " . "Failed <br>";
    }
}
