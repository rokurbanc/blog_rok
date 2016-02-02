<?php
include_once("config.php");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

    <meta name="description" content="Blog app">
    <meta name="author" content="Rok Urbanc!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>


  <body>

   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Blog</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
     
   
    </ul>
    <ul class="nav navbar-nav navbar-right">

<li>
<?php
if (isset($_SESSION["email"])) {
    echo "  <li><a href=''><span class='glyphicon glyphicon-user'></span> Welcome: {$_SESSION['email']}</a></li>
";
    
    
    echo '

      <li><a href="add_post.php"><span class="glyphicon glyphicon-new"></span> Add new</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
';
} else {
    
    echo '
<li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Registration</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      ';
}
?>
    </ul>
  </div>
</nav>




