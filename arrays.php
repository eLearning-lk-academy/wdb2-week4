<?php
// Indexed arrays

$colors = ['red', 'green', 'blue', 'yellow'];
$colors2 = array('red', 'green', 'blue', 'yellow');

$colors[] = 'black';
$colors[1] = 'orange';

echo '<pre>';
print_r($colors);
print_r($colors[1]);
echo '</pre>';
echo '<hr>';

$car = [];

$car[] = 'BMW';
$car[] = 'Toyota';

echo '<pre>';
print_r($car);
echo '</pre>';

echo '<hr>';

echo '<ul>';
$colorsLength = count($colors);
for($i = 0; $i < $colorsLength; $i++){
    echo '<li>'.$colors[$i].'</li>';
}
echo '</ul>';

echo '<hr>';
// Associative arrays

$person = [
    'name' => 'John',
    'surname' => 'Doe',
    'age' => 50
];

echo '<pre>';
print_r($person);
echo $person['name'].' '.$person['surname'] .' is '.$person['age'].' years old.<br>';

$persons =['John', 'Jane', 'Jim'];

$favoriteColors = [
    'John' => 'blue',
    'Jane' => 'red',
    'Jim' => 'green'
];

print_r($favoriteColors);
echo '</pre>';

echo '<ul>';
for($i = 0; $i < count($persons); $i++){
    echo '<li>'.$persons[$i].' - '.$favoriteColors[$persons[$i]].'.</li>';
}
echo '</ul>';

echo '<hr>';

$person['age'] = 51;
$person['car'] = 'BMW';
echo '<pre>';
print_r($person);
echo '</pre>';

// Multidimensional arrays

$students = [
    [
        'name' => 'John',
        'surname' => 'Doe',
        'age' => 50
    ],
    [
        'name' => 'Jane',
        'surname' => 'Doe',
        'age' => 30
    ],
    [
        'name' => 'Jim',
        'surname' => 'Doe',
        'age' => 20
    ]
];

// for($i = 0; $i < count($students); $i++){
//     echo $students[$i]['name'].' '.$students[$i]['surname'].' is '.$students[$i]['age'].' years old.<br>';
// }

// foreach loop

foreach($students as $student){
    echo $student['name'].' '.$student['surname'].' is '.$student['age'].' years old.<br>';
}