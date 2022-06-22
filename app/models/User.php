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

    public function getUser() {
        $this->db->query('SELECT * FROM user WHERE id = 1');

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

    public function getSettingsDetails() {
        $this->db->query('SELECT * FROM settings');
        
        $result =  $this->db->resultSet();
        return $result;
    }

    public function updateSettings($data){
        $this->db->query("UPDATE settings SET course_no =   '".$data['courseNo1']."'  , course_desc = '" .$data['courseDesc1'] . "', units = ' " . $data['units1'] . "' WHERE id = 1 ");
        $this->db->execute();
        $this->db->query("UPDATE settings SET course_no =   '".$data['courseNo2']."'  , course_desc = '" .$data['courseDesc2'] . "', units = ' " . $data['units2'] . "' WHERE id = 2 ");
        $this->db->execute();
        $this->db->query("UPDATE settings SET course_no =   '".$data['courseNo3']."'  , course_desc = '" .$data['courseDesc3'] . "', units = ' " . $data['units3'] . "' WHERE id = 3 ");
        $this->db->execute();
        $this->db->query("UPDATE settings SET course_no =   '".$data['courseNo4']."'  , course_desc = '" .$data['courseDesc4'] . "', units = ' " . $data['units4'] . "' WHERE id = 4 ");
        $this->db->execute();
        $this->db->query("UPDATE settings SET course_no =   '".$data['courseNo5']."'  , course_desc = '" .$data['courseDesc5'] . "', units = ' " . $data['units5'] . "' WHERE id = 5 ");
        $this->db->execute();
        $this->db->query("UPDATE settings SET course_no =   '".$data['courseNo6']."'  , course_desc = '" .$data['courseDesc6'] . "', units = ' " . $data['units6'] . "' WHERE id = 6 ");
        $this->db->execute();
        $this->db->query("UPDATE settings SET course_no =   '".$data['courseNo7']."'  , course_desc = '" .$data['courseDesc7'] . "', units = ' " . $data['units7'] . "' WHERE id = 7 ");


        if($this->db->execute()){
            return true;
        }else {
            return false;
        }

    }

    public function updateUser($data) {
        $this->db->query('UPDATE user SET name = :name, user_code = :userCode WHERE id = 1');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':userCode', $data['userCode']);

        
        if($this->db->execute()){
            return true;
        }else {
            return false;
        }

    }

    public function addCertUnits($data) {
        $this->db->query('INSERT INTO cert_units (firstname, middlename, lastname, suffix, honorific, address, course, purpose, cert_no, or_no, rating_no1, rating_no2, rating_no3, rating_no4, rating_no5, rating_no6, rating_no7) 
        VALUES (:firstname,:middlename, :lastname, :suffix, :honorific, :address, :course, :purpose,  :certNo, :orNo, :ratingNo1, :ratingNo2, :ratingNo3, :ratingNo4, :ratingNo5, :ratingNo6, :ratingNo7 )');
        
            $this->db->bind(':firstname', $data['firstname']);
            $this->db->bind(':middlename', $data['middlename']);
            $this->db->bind(':lastname', $data['lastname']);
            $this->db->bind(':suffix', $data['suffix']);
            $this->db->bind(':honorific', $data['honorific']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':course', $data['course']);
            $this->db->bind(':purpose', $data['purpose']);
            $this->db->bind(':certNo', $data['certNo']);
            $this->db->bind(':orNo', $data['orNo']);
            $this->db->bind(':ratingNo1', $data['rating1']);
            $this->db->bind(':ratingNo2', $data['rating2']);
            $this->db->bind(':ratingNo3', $data['rating3']);
            $this->db->bind(':ratingNo4', $data['rating4']);
            $this->db->bind(':ratingNo5', $data['rating5']);
            $this->db->bind(':ratingNo6', $data['rating6']);
            $this->db->bind(':ratingNo7', $data['rating7']);
    
            if($this->db->execute()){
                return true;
            }else {
                return false;
            }
    }

 
}