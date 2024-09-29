<?php
namespace Views;

class UserView {
    public function displayUser($data) {
        echo "Ім'я: " . $data['name'] . "<br>";
        echo "Email: " . $data['email'] . "<br>";
    }
}
?>
