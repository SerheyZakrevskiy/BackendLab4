<?php

require_once 'Human.php';

class Programmer extends Human {
    private $languages;
    private $experience;

    public function __construct($height, $weight, $age, $languages, $experience) {
        parent::__construct($height, $weight, $age);
        $this->languages = $languages;
        $this->experience = $experience;
    }

    public function getLanguages() {
        return $this->languages;
    }

    public function setLanguages($languages) {
        $this->languages = $languages;
    }

    public function getExperience() {
        return $this->experience;
    }

    public function setExperience($experience) {
        $this->experience = $experience;
    }

    public function addLanguage($language) {
        $this->languages[] = $language;
        echo "Додано нову мову програмування: $language\n";
    }
}
