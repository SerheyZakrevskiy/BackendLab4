<?php
require_once 'Cleaning.php';

abstract class Humanss implements Cleaning {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function birthChild() {
        echo "У {$this->name} народилася дитина!\n";
        $this->notifyChildBirth();
    }

    protected abstract function notifyChildBirth();


    public function cleanRoom() {
        echo "{$this->name} прибирає кімнату.\n";
    }

    public function cleanKitchen() {
        echo "{$this->name} прибирає кухню.\n";
    }
}
