<?php

require_once 'Students.php';
require_once 'Programmers.php';


$students = new Students(180, 70, 20, "Житомирська політехніка", 2);
$students->birthChild();


$programmers = new Programmers(175, 68, 25, ["PHP", "JavaScript"], 3);
$programmers->birthChild();
?>
