
<?php

include("config.php");
$email    = $con->real_escape_string($_POST["email"]);
$password = $con->real_escape_string($_POST["password"]);
$password = md5($password);

$q       = $con->query("SELECT * FROM users WHERE email='$email' AND password='$password' ");
$numrows = $q->num_rows;
if ($numrows == 1) {
    while ($rows = $q->fetch_assoc()) {
        $_SESSION["email"] = $rows["email"];
    }
    header("location: index.php");
    
} else {
    header("location: login.php?error=wrong");
}
?>