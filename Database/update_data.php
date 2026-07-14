<?php
error_reporting(E_ERROR);

try{

    $connection = new mysqli('localhost','root','','dbCollege');

    if($connection->connect_errno != 0){
        throw new Exception('Database connection error');
    }


    $sql = "UPDATE students 
            SET  semester=4
            WHERE id=1";


    $connection->query($sql);


    if($connection->affected_rows == 1){
        echo "Data updated successfully";
    }
    else{
        throw new Exception('Data update error');
    }


}catch(Exception $ex){
    die($ex->getMessage());
}

?>