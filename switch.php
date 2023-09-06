<?php

$role = 'admin';

if ($role == 'admin') {
    echo 'Welcome Admin';
} elseif ($role == 'editor') {
    echo 'Welcome Editor';
} elseif ($role == 'author') {
    echo 'Welcome Author';
} else {
    echo 'Welcome Guest';
}

echo '<br>';

switch ($role) {
    case 'admin':
        echo 'Welcome Admin';
        break;
    case 'editor':
        echo 'Welcome Editor';
        break;
    case 'author':
        echo 'Welcome Author';
        break;
    default:
        echo 'Welcome Guest';
}

echo '<br>';

switch($role){
    case 'admin':
    case 'editor':
        echo 'You are a Staff menber';
        echo '<hr>';
        break;
    case 'author':
        echo 'You are an Author';
        break;
    default:
        echo 'You are a Guest';
    }