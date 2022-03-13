<?php
namespace App\classes;
class Main
{

    public $firstNumber;
    public $lastNumber;
    public $operator;

    public function __construct($data = null)
    {
        $this->firstNumber = $data['first_number'];
        $this->lastNumber = $data['last_number'];
        $this->operator = $data['operator'];
        // $this->add = $data['add'];
        // $this->sub = $data['sub'];
        // $this->mult = $data['mult'];
        // $this->divide = $data['divide'];
        // $this->modul = $data['modul'];
    }

    public function index()
    {
        header('Location: action.php?page=home');
    }

    public function makeFullName()
    {
        switch($this->operator)
        {
            case("+"):
                echo " $this->firstNumber" + "$this->lastNumber";
            break;
            case("-"):
                echo " $this->firstNumber" - "$this->lastNumber";
            break;
            case("*"):
                echo " $this->firstNumber" * "$this->lastNumber";
            break;
            case("/"):
                echo " $this->firstNumber" / "$this->lastNumber";
            break;
            case("%"):
                echo " $this->firstNumber" % "$this->lastNumber";
            break;
        }
    }
}

?>