<?php
// controllers/UserController.php
require_once __DIR__ . '/../models/User.php';

class UserController {
    public function showUser($name) {
        $user = new User($name);
        require __DIR__ . '/../views/user_view.php';
    }

    public function showWelcome($name) {
        $user = new User($name);
        require __DIR__ . '/../views/welcome_view.php';
    }

    public function showAbout() {
        require __DIR__ . '/../views/about_view.php';
    }

    public function showContact() {
        require __DIR__ . '/../views/contact_view.php';
    }
}
