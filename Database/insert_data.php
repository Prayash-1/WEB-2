<?php
error_reporting(E_ERROR);

try{

    $connection = new mysqli('localhost','root','','dbCollege');

    if($connection->connect_errno != 0){
        throw new Exception('Database connection error');
    }


    $sql = "INSERT INTO students
    (id,name,email,phone,course,dob,username,password,semester)
    VALUES
    (1,'Prayash','prayash@gmail.com','9800000000','BIM',
    '2007-02-26','prayash123','12345',2)";


    $connection->query($sql);


    if($connection->affected_rows == 1){
        echo "Data inserted successfully";
    }
    else{
        throw new Exception('Data insertion error');
    }


}catch(Exception $ex){
    die($ex->getMessage());
}

?>