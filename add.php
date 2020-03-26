<?php
	if (isset($_POST['submit'])) {
		require_once("db.php");
		$email = $_POST['email'];
		$sql = $conn->prepare("INSERT INTO email_tb (email) VALUES (?)");  
		$email=$_POST['email'];
		$sql->bind_param("s", $email); 
		if($sql->execute()) {
			$success_message = "Added Successfully";
		} else {
			$error_message = "Problem in Adding New Record";
		}
		$sql->close();   
		$conn->close();
	} 
?>
<html>
<head>
	<html lang="eng">
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
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
<link href="style4.css" rel="stylesheet" type="text/css" />
	
<style>
.tbl-qa{border-spacing:0px;border-radius:0px;border:#6ab5b9 1px solid;}
</style>
  <title>Add New Email</title> 	
</head>
<body class="container">
<?php if(!empty($success_message)) { ?>
<div class="success message"><?php echo $success_message; ?></div>
<?php } if(!empty($error_message)) { ?>
<div class="error message"><?php echo $error_message; ?></div>
<?php } ?>
<form name="frmUser" method="post" action="">
<div class="button_link"><a href="index.php"> Back to List </a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tbl-qa">
	<thead>
		<tr>
			<th colspan="2" class="table-header">Add New Employee</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-row">
			<td><label>Email</label></td>
			<td><input type="text" placeholder="Enter Email Address" name="email" class="txtField" required=""></td>
		</tr>
		<tr class="table-row">
			<td colspan="2"><input type="submit" name="submit" value="Submit" class="demo-form-submit"></td>
		</tr>
	</tbody>
</table>
</form>
</body>
</html>