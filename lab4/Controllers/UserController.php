<?php
namespace Controllers;

use Models\UserModel;
use Views\UserView;

/**
 * Клас UserController
 * 
 * Відповідає за взаємодію між моделлю та відображенням.
 */
class UserController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new UserView();
    }

    public function showUser() {
        $userData = $this->model->getUserData();
        $this->view->displayUser($userData);
    }
}
?>
