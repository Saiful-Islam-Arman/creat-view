<?php
namespace App\classes;
class Main
{

    public $firstName;
    public $lastName;
    public $fullName;

    public function __construct($data = null)
    {
        $this->firstName = $data['first_name'];
        $this->lastName = $data['last_name'];
    }

    public function index()
    {
        header('Location: action.php?page=home');
    }

    public function makeFullName()
    {
        $this->fullName = $this->firstName ." ". $this->lastName;
        echo $this->fullName;
    }
}

?>