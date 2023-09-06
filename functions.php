<?php

function hello(){
    echo 'Hello World<br>';
}
hello();
echo '<hr>';
hello();
echo '<hr>';

// ---------------------------
function circumference($radius)
{
    $circumference = 2 * 3.14 * $radius;
    // echo $circumference;
    return $circumference;
}
echo circumference(7);

echo '<hr>';

function CylinderVolume($radius, $height){
    $volume = 3.14*$radius*$radius*$height;
    echo $volume;
}

CylinderVolume(7, 10);

echo '<hr>';

function sayHello($name = 'World'){
    echo 'Hello '.$name.'<br>';
}

sayHello();
sayHello('Nuwan');
