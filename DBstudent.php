<?php

include_once 'DBconnect.php';
include_once 'Student.php';

class DBstudent
{
    public $conn;

    public function __construct()
    {
        $dbconnect = new DBconnect;
        $this->conn = $dbconnect->connect();
    }

    public function createNewDatabase()
    {

        $sql = "CREATE DATABASE test1";
        // use exec() because no results are returned
        $this->conn->exec($sql);
        echo "Database created successfully<br>";
    }


    public function delete($studentId)
    {
        $sql = "DELETE FROM `student` WHERE `studentId`= '$studentId' ";
        // use exec() because no results are returned
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        echo "delete successful";
    }

    public function update($studentId,$name, $phone, $mail){

        $sql = "UPDATE `student` SET `name`='$name',`phone`='$phone',`email`='$mail' WHERE `studentId` = '$studentId' ";
        // use exec() because no results are returned
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        echo "update successful";
    }

    public function selectAll()
    {
        $sql = "SELECT * FROM `student`";
        // use exec() because no results are returned
        $stmt = $this->conn->query($sql);

        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $data = $stmt->fetchAll();
        return $data;
    }

    public function insert($name, $phone, $mail)
    {
        echo "New record <br>";

        $sql = "INSERT INTO `student`(`name`, `phone`, `email`) VALUES('$name','$phone','$mail') ";
        // use exec() because no results are returned
        //echo $sql;
        $this->conn->exec($sql);
        echo "New record created successfully <br>";

    }
}

