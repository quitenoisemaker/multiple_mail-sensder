<?php
  require('menu.php');
  if(isset($_POST['submit'])) {
    $user=$_POST['username'];
    $pass=$_POST['pass'];

    if ($user=="admin" && $pass=="root") {
      setcookie("username", $user,time()+(60*60*24));
      setcookie("pass", $pass,time()+(60*60*24));
      header('location:index.php');
    }

  }
?>


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

 
  <style type="text/css">

 label{
  font-size: 20px;
  margin-right: 10px;
  padding: 20px;
 }

 fieldset {
    width: 500px;
    margin-top: 20px;
    border: 1px solid #d6d6d6;
    background-color: #ffffff;
    line-height: 1.6em;
    padding: 20px;
    }
    legend {
    font-style:italic;
    color:#666666;}

    input[type="submit"]{
    margin-top: 20px;
    
  }
  
  </style>
</head>
<body>
    <!--LOGIN-->
<section id="login">
  <div class="container">
    <div class="row">
     <div class="col-md-6 mx-auto mt-5">
       <div class="card">
         <div class="card-header">
           <h4>User Login</h4>
         </div>
         <div class="card-body">
           <form role="" method="POST" action="">
            <?php if(!empty($_POST['username']) && !empty($_POST['pass'] && $user!="admin" || $pass!="root") ) echo "<i class='alert alert-danger alert-sm'>Incorrect Username or Password</i>";?> 
  
             <div class="form-group">
               <label for="text">Username</label>
               <input type="text" class="form-control" name="username" required="">
             </div>
             <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-control" name="pass" required="">
             </div>
             <input type="submit" class="btn btn-primary byn-block" value="submit" name="submit" >
           </form>
         </div>
       </div>
     </div>
    </div>
  </div>
</section>

</body>
</html>