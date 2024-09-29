<?php
require_once __DIR__ . '/autoload.php';

use Controllers\UserController;

$controller = new UserController();
$controller->showUser();

echo('<br><br><br>');


require_once 'Circle.php';

$circle1 = new Circle(0, 0, 5);
$circle2 = new Circle(3, 4, 5);
$circle3 = new Circle(10, 10, 3);

echo $circle1 . PHP_EOL;
echo $circle2 . PHP_EOL;
echo $circle3 . PHP_EOL;

if ($circle1->intersects($circle2)) {
    echo "Коло 1 і Коло 2 перетинаються." . PHP_EOL;
} else {
    echo "Коло 1 і Коло 2 не перетинаються." . PHP_EOL;
}

if ($circle1->intersects($circle3)) {
    echo "Коло 1 і Коло 3 перетинаються." . PHP_EOL;
} else {
    echo "Коло 1 і Коло 3 не перетинаються." . PHP_EOL;
}

?>