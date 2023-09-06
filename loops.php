<?php 
// While loop

$i = 1;
while($i <=5){
    echo 'Hello'.$i;
    echo '<br>';
    $i++;
}

echo '<hr>';

// Do while loop
$j=10;
do {
    echo 'Hello'.$j;
    echo '<br>';
    $j++;
} while($j <= 5);

// For loop

echo '<hr>';

for ($k=0; $k <=5; $k+=2) { 
    echo 'Hello'.$k;
    echo '<br>';
}

echo '<hr>';

for ($l=10; $l >=0; $l--) { 

    if($l == 5){
        continue;
    }
    if($l == 2){
        break;
    }
    echo 'Hello'.$l;


    echo '<br>';
}