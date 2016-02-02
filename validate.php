<?php
include("config.php");
$title       = $con->real_escape_string($_POST["title"]);
$email       = $con->real_escape_string($_SESSION["email"]);
$description = $con->real_escape_string($_POST["description"]);

if (!empty($title) && !empty($email) && !empty($description)) {
    
    $sql = "INSERT INTO `posts`(id,title, description, user_id)
VALUES (NULL, '$title','$description',
        (SELECT users.id
        FROM users
        WHERE email ='$email'))";
    
    $q = $con->query($sql) or die("napaka");
    
    header("location: index.php");
    
}

else {
    
    header("location: add_post.php?empty=true");
    
    
}
?>
