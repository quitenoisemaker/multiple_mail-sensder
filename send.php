<!DOCTYPE html>
<html lang="eng">
<head>
  <title>User Login</title>
  
  <meta charset="utf-8">
  <meta name="viewpoint" content="width=device-width" initial-scale="1">
  <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" >
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="bootstrap-4.0.0-dist/js/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap-4.0.0-dist/js/jquery.js"></script>
  <script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="bootstrap-4.0.0-dist/js/navbar-fixed.js"></script>
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>


  </head>
  <style type="text/css">
  .body{
    text-align: center;
  }
      .button_link {padding: 20px 0px;text-align: right;}
.button_link a{color: #428a8e;text-decoration: none;background-color: FFF;padding: 8px 20px;font-size: 0.8em;border: #428a8e 1px solid;border-radius: 4px;}
    }
  </style>
<body class="body">
<div class="container">
<?php
  require('db.php');
//standard mail header
  $headers="from: admin@samsonojugo.com";

  // get message to send
  $message=@$_POST['message'];
  // loop through
  for ($x=0; $x <count($_GET) ; $x++) { 
    if ($_GET["mail_$x"]) {
      //mail setup
      $to= $_GET["mail_$x"];
      $subject= "Newsletter";
      $body=  "$message"; 
      mail($to, $subject, $body, $headers);
    }
  }
  echo "<div class='button_link'><a href='index.php'> Back to List </a></div>";
  echo "<br> <br> <br> <br><br> <br> <br> <br><br> <br> <br> <br><i class='alert alert-success alert-sm'><b>All mail has been processed</b></i>";
?>
</div>
</body>

