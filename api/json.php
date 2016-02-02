<?php

include_once("config.php"); 

    $sql = "select * from posts";
    $result = $con->query($sql) or die("Error Json Api 1");


    $output = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $output[] = $row;
    }
    echo json_encode($output);


    $con->close();
?>