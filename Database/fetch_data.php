<?php
error_reporting(E_ERROR);

try{

    $connection = new mysqli('localhost','root','','dbCollege');

    if($connection->connect_errno != 0){
        throw new Exception('Database connection error');
    }


    $sql = "SELECT * FROM students";

    $result = $connection->query($sql);


    while($row = $result->fetch_assoc()){

        echo "ID: ".$row['id']."<br>";
        echo "Name: ".$row['name']."<br>";
        echo "Email: ".$row['email']."<br>";
        echo "Phone: ".$row['phone']."<br>";
        echo "Course: ".$row['course']."<br>";
        echo "DOB: ".$row['dob']."<br>";
        echo "Username: ".$row['username']."<br>";
        echo "Semester: ".$row['semester']."<br><br>";

    }


}catch(Exception $ex){
    die($ex->getMessage());
}

?>