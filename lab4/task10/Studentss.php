<?php

require_once 'Humanss.php';
require_once 'Cleaning.php';


class Studentss extends Humanss {
    private $university;
    private $course;

    public function __construct($name, $age, $university, $course) {
        parent::__construct($name, $age);
        $this->university = $university;
        $this->course = $course;
    }

    public function getUniversity() {
        return $this->university;
    }

    public function getCourse() {
        return $this->course;
    }

    public function promoteToNextCourse() {
        $this->course++;
        echo "{$this->name} переведений на {$this->course}-й курс.\n";
    }

    protected function notifyChildBirth() {
        echo "Студент {$this->name} отримав вітання з народженням дитини від університету {$this->university}.\n";
    }
}
