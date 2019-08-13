<?php


class DBconnect
{

    public $servername;
    public $username;
    public $password;
    public $myDB;

    public function __construct()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "halohu1808";
        $this->myDB = "student_db";


    }

    public function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->myDB", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully <br>";
            return $conn;
        } catch
        (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }


    }
}



