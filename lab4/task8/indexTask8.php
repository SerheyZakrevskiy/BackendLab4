<?php

require_once 'Student.php';
require_once 'Programmer.php';


$student = new Student(180, 70, 20, "КНУ ім. Тараса Шевченка", 2);
echo "Студент: Зріст - " . $student->getHeight() . ", Вага - " . $student->getWeight() . "\n";
$student->setHeight(182);
$student->nextCourse();
echo "Новий зріст студента: " . $student->getHeight() . "\n";


$programmer = new Programmer(175, 68, 25, ["PHP", "JavaScript"], 3);
echo "Програміст: Зріст - " . $programmer->getHeight() . ", Вага - " . $programmer->getWeight() . "\n";
$programmer->setWeight(70);
$programmer->addLanguage("Python");
echo "Новий ваг програміста: " . $programmer->getWeight() . "\n";
?>
