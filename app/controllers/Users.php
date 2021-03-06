<?php
class Users extends Controller {
    public $session;
    public function __construct() {
        $this->userModel = $this->model('User');
        $this->session = new Session;
    }

    public function index() {
        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }



        $data = [

            'title' => 'Home',   

        ];

        $this->view('users/index', $data);
    }



    public function login() {
        if(isLoggedIn()) {
            header("Location: " .URLROOT . "/");
        }
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            $findUser = $this->userModel->findUser($data);
            //Validate username
            if(empty($data['username'])){
                $data['usernameError'] = 'Please enter a username.';
            }else if($findUser === false){
                $data['usernameError'] = "Invalid username";
            }

            //Validate username
            if(empty($data['password'])){
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if(empty($data['usernameError']) && empty($data['passwordError'])){
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                if($loggedInUser){
                    $this->createUserSession($loggedInUser);
                }else {
                    $data['passwordError'] = 'Password is incorrect. Please try again.';

                    $this->view('users/login',$data);
                }
            }
            
        }else{
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }


        $this->view('users/login', $data);
    }

    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['user_code'] = $user->user_code;
        

        $this->session->setFlash('status','Login Successfully');
        $this->session->setFlash('status_text','Welcome');
        $this->session->setFlash('status_icon','success');
        header('location:' . URLROOT . '/users/index');
    

    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['user_code']);
        header('location:' .URLROOT . '/users/login');
        
    }


    public function modalCertGwa() {

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'table_name' =>  'cert_gwa'
            ];

            $lastId = $this->userModel->getLastId($data);

            if($lastId->cert_no) {

                $certNo = $lastId->cert_no;

                $year = $certNo[10].$certNo[11].$certNo[12].$certNo[13];

                if($year == date('Y')) {
                    $dateId = date('Y');   
                }else {
                    $dateId = date('Y') -1;
                    $certNo = 'GWA 0000s.'.$dateId;
                }

            }else {
                $dateId = date('Y');
                $certNo = 'GWA 0000s.'.date('Y');
            }

            $get_number = str_replace(['GWA ', 's.', $dateId], '', $certNo);
            $get_increase = $get_number+1;
            $get_string = str_pad($get_increase, '4', '0', STR_PAD_LEFT);

            $data = [
                'firstname' => trim($_POST['firstname']),
                'middlename' => trim($_POST['middlename']),
                'lastname' => trim($_POST['lastname']),
                'suffix' => trim($_POST['suffix']),
                'honorific' => trim($_POST['honorific']),
                'address' => trim($_POST['address']),
                'course' => trim($_POST['course']),
                'purpose' => trim($_POST['purpose']),
                'dateGraduated' => trim($_POST['dateGraduated']),
                // 'certNo' => trim($_POST['certNo']),
                'certNo' => 'GWA '.$get_string.'s.'.date('Y'),
                'overAllGwa' => trim($_POST['overAllGwa']),
                'resNo' => trim($_POST['resNo']),
                'seriesOf' => trim($_POST['seriesOf']),
                'orNo' => trim($_POST['orNo']),
                'table_name' => 'cert_gwa'

            ];

                if($this->userModel->addCertGwa($data)){
                    $lastId = $this->userModel->getLastId($data);
                    $this->session->setFlash('status', 'Added successfully!');
                    $this->session->setFlash('status_icon', 'success');
                    header('location: '. URLROOT . "/users/generate_cert_gwa/$lastId->id");
                }else {
                    $this->session->setFlash('status', 'Error! ');
                    $this->session->setFlash('status_icon', 'error');
                    header('location: '. URLROOT . '/users/student');
                }
 
        }
    }


    public function generate_cert_gwa($id = ''){

        $data = [
            'id' => $id,
            'cert_type' => 'gwa'
        ];

        $certificate = $this->userModel->findCertificateById($data);
        // $detail = $this->userModel->getSettingsDetails();

        $user = $this->userModel->getUser();

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }

        $totalRatings = $certificate->over_all_gwa;

        switch(true) {
            case $totalRatings <= 1.03: 
                $percent = 100;
                break;
            case $totalRatings <= 1.06:
                $percent = 99;
                break;
            case $totalRatings <= 1.09:
                $percent = 98;
                break;
            case $totalRatings <= 1.12:
                $percent = 97;
                break;
            case $totalRatings <= 1.20: 
                $percent = 96;
                break;
            case $totalRatings <= 1.29:
                $percent = 95;
                break;
            case $totalRatings <= 1.37:
                $percent = 94;
                break;
            case $totalRatings <= 1.45:
                $percent = 93;
                break;
            case $totalRatings <= 1.54:
                $percent = 92;
                break;
            case $totalRatings <= 1.62:
                $percent = 91;
                break;
            case $totalRatings <= 1.70:
                $percent = 90;
                break;
            case $totalRatings <= 1.79:
                $percent = 89;
                break;
            case $totalRatings <= 1.87: 
                $percent = 88;
                break;
            case $totalRatings <= 1.95:
                $percent = 87;
                break;
            case $totalRatings <= 2.04:
                $percent = 86;
                break;
            case $totalRatings <= 2.12:
                $percent = 85;
                break;
            case $totalRatings <= 2.20:
                $percent = 84;
                break;
            case $totalRatings <= 2.29:
                $percent = 83;
                break;
            case $totalRatings <= 2.37:
                $percent = 82;
                break;
            case $totalRatings <= 2.45:
                $percent = 81;
                break;
            case $totalRatings <= 2.54: 
                $percent = 80;
                break;
            case $totalRatings <= 2.62:
                $percent = 79;
                break;
            case $totalRatings <= 2.70:
                $percent = 78;
                break;
            case $totalRatings <= 2.79:
                $percent = 77;
                break;
            case $totalRatings <= 2.87:
                $percent = 76;
                break;
            case $totalRatings <= 3.45:
                $percent = 75;
                break;
            case $totalRatings <= 4.54:
                $percent = 74;
                break;
            default :
                $percent = 73;
        }

        $data = [
            'certificate' => $certificate,
            'user' => $user,
            'percent' => $percent      
        ];

        $this->view('users/generate_cert_gwa', $data);
    }

    public function generate_cert_units($id = ''){

        $data = [
            'id' => $id,
            'cert_type' => 'units'
        ];

        $certificate = $this->userModel->findCertificateById($data);
        $detail = $this->userModel->getSettingsDetails();
        $user = $this->userModel->getUser();

        $totalUnits = 0;
        foreach($detail as $item){
            $totalUnits = $totalUnits + $item->units;
        }

        $totalUnits = $totalUnits - $detail[6]->units;

        $totalRatings = ($certificate->rating_no1*$detail[0]->units) + ($certificate->rating_no2*$detail[1]->units) + ($certificate->rating_no3*$detail[2]->units) + ($certificate->rating_no4*$detail[3]->units) + ($certificate->rating_no5*$detail[4]->units) + ($certificate->rating_no6*$detail[5]->units);

        $totalRatings = $totalRatings / $totalUnits;

        switch(true) {
            case $totalRatings <= 1.03: 
                $percent = 100;
                break;
            case $totalRatings <= 1.06:
                $percent = 99;
                break;
            case $totalRatings <= 1.09:
                $percent = 98;
                break;
            case $totalRatings <= 1.12:
                $percent = 97;
                break;
            case $totalRatings <= 1.20: 
                $percent = 96;
                break;
            case $totalRatings <= 1.29:
                $percent = 95;
                break;
            case $totalRatings <= 1.37:
                $percent = 94;
                break;
            case $totalRatings <= 1.45:
                $percent = 93;
                break;
            case $totalRatings <= 1.54:
                $percent = 92;
                break;
            case $totalRatings <= 1.62:
                $percent = 91;
                break;
            case $totalRatings <= 1.70:
                $percent = 90;
                break;
            case $totalRatings <= 1.79:
                $percent = 89;
                break;
            case $totalRatings <= 1.87: 
                $percent = 88;
                break;
            case $totalRatings <= 1.95:
                $percent = 87;
                break;
            case $totalRatings <= 2.04:
                $percent = 86;
                break;
            case $totalRatings <= 2.12:
                $percent = 85;
                break;
            case $totalRatings <= 2.20:
                $percent = 84;
                break;
            case $totalRatings <= 2.29:
                $percent = 83;
                break;
            case $totalRatings <= 2.37:
                $percent = 82;
                break;
            case $totalRatings <= 2.45:
                $percent = 81;
                break;
            case $totalRatings <= 2.54: 
                $percent = 80;
                break;
            case $totalRatings <= 2.62:
                $percent = 79;
                break;
            case $totalRatings <= 2.70:
                $percent = 78;
                break;
            case $totalRatings <= 2.79:
                $percent = 77;
                break;
            case $totalRatings <= 2.87:
                $percent = 76;
                break;
            case $totalRatings <= 3.45:
                $percent = 75;
                break;
            case $totalRatings <= 4.54:
                $percent = 74;
                break;
            default :
                $percent = 73;
        }

  

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }

        $data = [
            'certificate' => $certificate,
            'user' => $user,
            'detail' => $detail,    
            'totalUnits' => $totalUnits,
            'totalRatings' => $totalRatings,
            'percent' => $percent 
        ];

        $this->view('users/generate_cert_units', $data);
    }

    public function cert_units() {
        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }

        $data = [
            'table_name' => 'units',
        ];

        $certificate = $this->userModel->getCertificates($data);

        $data = [

            'title' => 'Home',   
            'certificates' => $certificate

        ];

        $this->view('users/cert_units', $data);
    }

    public function cert_gwa() {
        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }

        $data = [
            'table_name' => 'gwa',
        ];

        $certificate = $this->userModel->getCertificates($data);

        $data = [

            'title' => 'Home',   
            'certificates' => $certificate

        ];

        $this->view('users/cert_gwa', $data);
    }

    public function settings() {
        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }



        $settings = $this->userModel->getSettingsDetails();
        $user = $this->userModel->getUser();

        $data = [

            'settings' => $settings,
            'user' => $user

        ];

        $this->view('users/settings', $data);
    }

    public function updateSettings() {
        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'courseNo1' => trim($_POST['courseNo1']),
                'courseNo2' => trim($_POST['courseNo2']),
                'courseNo3' => trim($_POST['courseNo3']),
                'courseNo4' => trim($_POST['courseNo4']),
                'courseNo5' => trim($_POST['courseNo5']),
                'courseNo6' => trim($_POST['courseNo6']),
                'courseNo7' => trim($_POST['courseNo7']),

                'courseDesc1' => trim($_POST['courseDesc1']),
                'courseDesc2' => trim($_POST['courseDesc2']),
                'courseDesc3' => trim($_POST['courseDesc3']),
                'courseDesc4' => trim($_POST['courseDesc4']),
                'courseDesc5' => trim($_POST['courseDesc5']),
                'courseDesc6' => trim($_POST['courseDesc6']),
                'courseDesc7' => trim($_POST['courseDesc7']),
                
                'units1' => trim($_POST['units1']),
                'units2' => trim($_POST['units2']),
                'units3' => trim($_POST['units3']),
                'units4' => trim($_POST['units4']),
                'units5' => trim($_POST['units5']),
                'units6' => trim($_POST['units6']),
                'units7' => trim($_POST['units7']),

                'name' => trim($_POST['name']),
                'userCode' => trim($_POST['userCode']),
            ];

                if($this->userModel->updateSettings($data) && $this->userModel->updateUser($data)){
                    $this->session->setFlash('status', 'Settings saved!');
                    $this->session->setFlash('status_icon', 'success');
                    header('location: '. URLROOT . "/users/settings");
                }else {
                    $this->session->setFlash('status', 'Error! ');
                    $this->session->setFlash('status_icon', 'error');
                    header('location: '. URLROOT . '/users/settings');
                }
 
        }
    }

    public function add_units_cert() {



        $settings = $this->userModel->getSettingsDetails();

        // if(!isLoggedIn()) {
        //     header("Location: " .URLROOT . "/users/login");
        // }


         echo json_encode($settings);
    }

    public function modalCertUnits() {
        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'table_name' =>  'cert_units'
            ];

            $lastId = $this->userModel->getLastId($data);

            if($lastId->cert_no) {

                $certNo = $lastId->cert_no;

                $year = $certNo[10].$certNo[11].$certNo[12].$certNo[13];

                if($year == date('Y')) {
                    $dateId = date('Y');   
                }else {
                    $dateId = date('Y') -1;
                    $certNo = 'ACC-0000s.'.$dateId;
                }

            }else {
                $dateId = date('Y');
                $certNo = 'ACC-0000s.'.date('Y');
            }

            $get_number = str_replace(['ACC-', 's.', $dateId], '', $certNo);
            $get_increase = $get_number+1;
            $get_string = str_pad($get_increase, '4', '0', STR_PAD_LEFT);

            $data = [
                'firstname' => trim($_POST['firstname']),
                'middlename' => trim($_POST['middlename']),
                'lastname' => trim($_POST['lastname']),
                'suffix' => trim($_POST['suffix']),
                'honorific' => trim($_POST['honorific']),
                'address' => trim($_POST['address']),
                'course' => trim($_POST['course']),
                'purpose' => trim($_POST['purpose']),
                'certNo' => 'ACC-'.$get_string.'s.'.date('Y'),
                'orNo' => trim($_POST['orNo']),
                'rating1' => trim($_POST['rating1']),
                'rating2' => trim($_POST['rating2']),
                'rating3' => trim($_POST['rating3']),
                'rating4' => trim($_POST['rating4']),
                'rating5' => trim($_POST['rating5']),
                'rating6' => trim($_POST['rating6']),
                'rating7' => trim($_POST['rating7']),

                'table_name' => 'cert_units',


            ];

                if($this->userModel->addCertUnits($data)){
                    $lastId = $this->userModel->getLastId($data);
                    $this->session->setFlash('status', 'Added successfully!');
                    $this->session->setFlash('status_icon', 'success');
                    header('location: '. URLROOT . "/users/generate_cert_units/$lastId->id");
                }else {
                    $this->session->setFlash('status', 'Error! ');
                    $this->session->setFlash('status_icon', 'error');
                    header('location: '. URLROOT . '/users/student');
                }
 
        }

    }
   
}