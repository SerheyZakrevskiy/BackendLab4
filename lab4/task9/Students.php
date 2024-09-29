<?php

require_once 'Humans.php';

class Students extends Humans {
    private $university;
    private $course;

    public function __construct($height, $weight, $age, $university, $course) {
        parent::__construct($height, $weight, $age);
        $this->university = $university;
        $this->course = $course;
    }

    public function getUniversity() {
        return $this->university;
    }

    public function setUniversity($university) {
        $this->university = $university;
    }

    public function getCourse() {
        return $this->course;
    }

    public function setCourse($course) {
        $this->course = $course;
    }

    public function nextCourse() {
        $this->course++;
        echo "Студента переведено на новий курс: $this->course\n";
    }


    protected function notifyChildBirth() {
        echo "У студента народилася дитина!\n";
    }
}
