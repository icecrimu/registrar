<?php
class User {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getUsers() {
        $this->db->query("SELECT * FROM user");
        $result = $this->db->resultSet();

        return $result;
    }

    public function findUser($data) {
        $this->db->query('SELECT username FROM user WHERE username = :username');

        //Bind value
        $this->db->bind(':username', $data['username']);

        $row = $this->db->single();

        return $row;
    }


    public function login($username, $password) {
        $this->db->query('SELECT * FROM user WHERE username = :username');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashedPassword = !empty($row) ? $row->password:'';

        if(password_verify($password, $hashedPassword)){
            return $row;
        }else {
            return false;
        }
    }
}