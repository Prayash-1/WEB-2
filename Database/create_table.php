<?php
error_reporting(E_ERROR);

try{

    $connection = new mysqli('localhost','root','','dbCollege');

    if($connection->connect_errno != 0){
        throw new Exception('Database connection error');
    }
    $sql = "CREATE TABLE IF NOT EXISTS students(
        id INT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        phone VARCHAR(15) NOT NULL,
        course VARCHAR(50) NOT NULL,
        dob DATE NOT NULL,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL,
        semester INT NOT NULL
    )";
    if($connection->query($sql)){
        echo "Table created successfully";
    }
    else{
        throw new Exception('Table creation error');
    }
}catch(Exception $ex){
    die($ex->getMessage());
}

?>