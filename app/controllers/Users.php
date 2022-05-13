<?php
class Users extends Controller {
    public $session;
    public function __construct() {
        $this->userModel = $this->model('User');
        $this->session = new Session;
    }

    public function index() {
        // if(!isLoggedIn()) {
        //     header("Location: " .URLROOT . "/users/login");
        // }

        $data = [

            'title' => 'Home',   

        ];

        $this->view('users/index', $data);
    }





    
}