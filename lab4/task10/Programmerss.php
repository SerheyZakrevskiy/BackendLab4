<?php

require_once 'Humanss.php';
require_once 'Cleaning.php';


class Programmerss extends Humanss {
    private $programmingLanguages;
    private $experience;

    public function __construct($name, $age, $programmingLanguages, $experience) {
        parent::__construct($name, $age);
        $this->programmingLanguages = $programmingLanguages;
        $this->experience = $experience;
    }

    public function getProgrammingLanguages() {
        return $this->programmingLanguages;
    }

    public function getExperience() {
        return $this->experience;
    }

    public function addProgrammingLanguage($language) {
        $this->programmingLanguages[] = $language;
        echo "{$this->name} вивчив нову мову програмування: {$language}.\n";
    }

    protected function notifyChildBirth() {
        echo "Програміст {$this->name} отримав вітання з народженням дитини від IT-спільноти.\n";
    }
}
