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


    public function addCertGwa($data) {
        $this->db->query('INSERT INTO cert_gwa (firstname, middlename, lastname, suffix, honorific, address, course, purpose, date_graduated, over_all_gwa, cert_no, res_no, series_of, or_no) VALUES (:firstname,:middlename, :lastname, :suffix, :honorific, :address, :course, :purpose, :dateGraduated, :overAllGwa, :certNo, :resNo, :seriesOf, :orNo)');
        
            $this->db->bind(':firstname', $data['firstname']);
            $this->db->bind(':middlename', $data['middlename']);
            $this->db->bind(':lastname', $data['lastname']);
            $this->db->bind(':suffix', $data['suffix']);
            $this->db->bind(':honorific', $data['honorific']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':course', $data['course']);
            $this->db->bind(':purpose', $data['purpose']);
            $this->db->bind(':dateGraduated', $data['dateGraduated']);
            $this->db->bind(':overAllGwa', $data['overAllGwa']);
            $this->db->bind(':certNo', $data['certNo']);
            $this->db->bind(':resNo', $data['resNo']);
            $this->db->bind(':seriesOf', $data['seriesOf']);
            $this->db->bind(':orNo', $data['orNo']);


    
            if($this->db->execute()){
                return true;
            }else {
                return false;
            }
    }


    public function findCertificateById($data) {

        switch($data['cert_type'])
        {  
            case 'gwa':

                $this->db->query('SELECT * FROM cert_gwa WHERE id = :id');
                $this->db->bind(':id', $data['id']);
                break;

            case 'units':

                $this->db->query('SELECT * FROM cert_units WHERE id = :id');
                $this->db->bind(':id', $data['id']);
                break;
        }

        $row = $this->db->single();
        return $row;
    }

    public function getLastId($data){

        switch($data['table_name']){

            case 'cert_gwa':
                $this->db->query('SELECT * FROM cert_gwa ORDER BY id DESC LIMIT 1');

   
                break;
            case 'cert_units':
                $this->db->query('SELECT * FROM cert_units ORDER BY id DESC LIMIT 1');
                break;
        }

        $row = $this->db->single();
        return $row;
    }

    public function getCertificates($data) {
        switch($data['table_name']) {
            case 'gwa':
                $this->db->query('SELECT * FROM cert_gwa');
                break;
            case 'units': 
                $this->db->query('SELECT * FROM cert_units');
                break;
        }
        $result = $this->db->resultSet();
        return $result;
    }

 
}