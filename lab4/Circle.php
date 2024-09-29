<?php

class Circle {
    private $x;
    private $y;
    private $radius;


    public function __construct($x, $y, $radius) {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }


    public function __toString() {
        return "Коло з центром в ({$this->x}, {$this->y}) і радіусом {$this->radius}";
    }


    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function getRadius() {
        return $this->radius;
    }


    public function setX($x) {
        $this->x = $x;
    }

    public function setY($y) {
        $this->y = $y;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }


    public function intersects(Circle $other) {
        $distance = sqrt(pow($this->x - $other->getX(), 2) + pow($this->y - $other->getY(), 2));
        return $distance < ($this->radius + $other->getRadius());
    }
}


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
