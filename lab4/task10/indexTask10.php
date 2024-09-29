<?php

require_once 'Studentss.php';
require_once 'Programmerss.php';

$studentss = new Studentss("Іван", 21, "Житомирська політехніка", 3);
$studentss->cleanRoom();
$studentss->cleanKitchen();


$programmerss = new Programmerss("Олексій", 30, ["PHP", "JavaScript"], 5);
$programmerss->cleanRoom();
$programmerss->cleanKitchen();
?>
