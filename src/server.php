<?php
error_reporting(E_ALL);

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
    echo "Хочу загрузить $class_name.\n";
    throw new Exception("Невозможно загрузить $class_name.");
});

//require_once 'Models/Lead.php';

//use cy322666\amoCRM\Models;

echo 'start';

function info($array) {
    echo '<pre>'; print_r($array); '</pre>';
}

$lead = new \cy322666\amoCRM\Models\Lead();

$lead->setId('123');
info($lead);