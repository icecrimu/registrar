<?php


    session_start();


    function isLoggedIn() {
        if (isset($_SESSION['user_id'])){
            return true;
        }else {
            return false;
        }
    }




    function setFlash( $message='')
    {
        $_SESSION['flash'] = $message;
    }

    function getFlash()
    {

        return $_SESSION['flash'] ?? false;
    }
    

    function destroyStatus(){
        unset($_SESSION['status']);
    }
