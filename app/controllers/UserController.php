<?php

require_once 'app/models/User.php';

class UserController {
    protected $userModel;

    public function __construct($database) {
        $this->userModel = new User($database);
    }

    public function index() {
        $users = $this->userModel->getAllUsers();
        view('user/index', ['users' => $users]);
    }

    public function create() {
        if (is_post_request()) {
            $this->userModel->createUser($_POST);
            redirect('user/index');
        } else {
            view('user/create');
        }
    }

    public function edit($id) {
        if (is_post_request()) {
            $this->userModel->updateUser($id, $_POST);
            redirect('user/index');
        } else {
            $user = $this->userModel->getUserById($id);
            view('user/edit', ['user' => $user]);
        }
    }

    public function delete($id) {
        $this->userModel->deleteUser($id);
        redirect('user/index');
    }
}
