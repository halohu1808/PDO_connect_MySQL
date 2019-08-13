<?php


class Student
{
    public $name;
    public $phone;
    public $email;

    public function __construct($name,$phone,$email)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        $info = "Name: $this->name, Phone: $this->phone, email:$this->email";
        return $info;
    }


}

