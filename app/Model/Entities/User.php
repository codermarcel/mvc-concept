<?php namespace App\Model\Entities;

/**
* User
*/
class User
{
    public $id;
    public $email;
    public $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = sha1($password);
    }
}