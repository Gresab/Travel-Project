<?php

include_once 'adminClass.php';
include_once 'simpleUserClass.php';
require_once 'userMapper.php';
session_start();

if (isset($_POST['login-btn'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} else if (isset($_POST['register-btn'])) {
    $register = new RegisterLogic($_POST);
    $register->insertData();
} else {
    header("Location:../views/index.php");  
}

class LoginLogic
{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            echo '1';
            header("Location:../views/index.php");  
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {
            echo '2';
            header('Location:../views/dashboard.php'); 
        } else {
            echo '3';
            header("Location:../views/index.php"); 
        }
    }

    private function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0) return false;
        else if (password_verify($password, $user['userPassword'])) {
            if ($user['role'] == 1) {
                $obj = new Admin($user['id'], $user['username'], $user['password'], $user['role']);
                $obj->setSession();
            } else {
                $obj = new SimpleUser($user['id'], $user['username'], $user['password'], $user['role'], "");
                $obj->setSession();
            }
            return true;
        } else return false;
    }
}

class RegisterLogic
{
    private $username = "";
    private $password = "";
    private $userLastName = "";
    private $email = "";


    public function __construct($formData)
    {
        $this->username = $formData['register-username'];
        $this->password = $formData['register-password'];
        $this->userLastName = $formData['register-lastname'];
        $this->email = $formData['register-email'];
    }

    public function insertData()
    {
        $user = new SimpleUser($this->username, $this->password, 0, $this->userLastName, $this->email); //25, 

        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:../views/dashboard.php");
    }
}
