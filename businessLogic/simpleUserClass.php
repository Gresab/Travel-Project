
<?php
include_once 'personClass.php';

class SimpleUser extends Person
{
    private $lastname;
    public function __construct($username, $password, $lastname, $email, $role)  
    {
        parent::__construct($username, $password, $lastname, $email, $role); 
        $this->lastname = $lastname;
        $this->email = $email;
    }

    public function setSession()
    {
        $_SESSION["role"] = "0";
        $_SESSION['roleName'] = "SimpleUser";
    }

    public function setCookie()
    {
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }

    public function getUsername()
    {
        return $this->username;
    }
    public function getLastname()
    {
        return $this->lastname;
    } 
    public function getPassword()
    {
        return $this->password;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getRole()
    {
        return $this->role;
    }
}
