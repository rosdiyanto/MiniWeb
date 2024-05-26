<?php

class User {
    protected $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function getAllUsers() {
        return $this->database->select('users', '*');
    }

    public function getUserById($id) {
        return $this->database->get('users', '*', ['id' => $id]);
    }

    public function createUser($data) {
        return $this->database->insert('users', [
            'name' => $data['name'],
            'email' => $data['email']
        ]);
    }

    public function updateUser($id, $data) {
        return $this->database->update('users', [
            'name' => $data['name'],
            'email' => $data['email']
        ], ['id' => $id]);
    }

    public function deleteUser($id) {
        return $this->database->delete('users', ['id' => $id]);
    }
}
