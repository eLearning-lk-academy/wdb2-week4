<?php

date_default_timezone_set('Europe/Paris');
echo date_default_timezone_get();
echo time();

echo '<br>';

echo date('D d/M/Y h:i a');
echo '<br>';

echo date('D d/M/Y h:i a', 1093904030);