<?php
if (!(isset($_COOKIE['username']) && isset($_COOKIE['pass']))) {
       
        header('location:login.php');
     }
	require('db.php');
			$mailcount=0;
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



  </head>
  <style type="text/css">
      .button_link {padding: 20px 0px;text-align: right;}
.button_link a{color: #428a8e;text-decoration: none;background-color: FFF;padding: 8px 20px;font-size: 0.8em;border: #428a8e 1px solid;border-radius: 4px;}
    }
  </style>
<body>
  <div class="container" style="background-color: #ebf6f7">
	     <?php echo "<div class='button_link'><a href='index.php'> Back to List </a></div>";
       echo "<p style='background-color: #6ab5b9;padding:10px; color: white'>
       Email
       <form role='form' method='POST' action='send.php'>";
      			$sql="select * from email_tb";
				$result=$conn->query($sql);
				if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
		echo "<div class=''> <input type='hidden'  name='mail_".$mailcount++."' value='".$row['email']."' CHECKED> ". $row['email']. "<br> </div>";
					}
			}?> 
        <?php echo "<p>
         <div class='form-group'>
         <textarea class='form-control' name='message' rows='5' placeholder='Enter Message Here'></textarea></div>
         <input type='submit' name='submit' value='send'>
<br><br><br>
         </form>";
		?> 
</div>
	</body>