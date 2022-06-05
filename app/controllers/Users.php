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
        

        if($_SESSION['account_type'] == 1 ){
            
            $this->session->setFlash('status','Login Successfully');
            $this->session->setFlash('status_text','Welcome');
            $this->session->setFlash('status_icon','success');
           
            header('location:' . URLROOT . '/admins/index');
        }else {
            $this->session->setFlash('status','Login Successfully');
            $this->session->setFlash('status_text','Welcome');
            $this->session->setFlash('status_icon','success');
            header('location:' . URLROOT . '/users/index');
        }

    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['user_code']);
        header('location:' .URLROOT . '/users/login');
        
    }

    
}