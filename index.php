<?php 
if (!(isset($_COOKIE['username']) && isset($_COOKIE['pass']))) {
       
        header('location:login.php');
     }
require_once("db.php");

$sql = "SELECT * FROM email_tb";
$result = $conn->query($sql);	
$conn->close();
	
?>
<html>
<head>
	<link href="style3.css" rel="stylesheet" type="text/css" />
	<title>MailingList2</title>
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
	<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">

</head>
<body class="body container">

	<div class="button_link2" style="text-align: right;"><a href="Logout.php">Logout</a></div>
	<div class="button_link" style="text-align: center"><a href="add.php">Add New Email</a></div>
	<table class="tbl-qa" id="table1">	
		<thead>
			 <tr>
				<th class="table-header" width="20%">Email</th>
			  </tr>
		</thead>
		<tbody>		
			<?php
				if ($result->num_rows > 0) {		
					while($row = $result->fetch_assoc()) {
			?>
			<tr class="table-row" id="<?php echo $row['id']; ?>"><!-- Here it was given an id -->
				<td class="table-row"><?php echo $row["email"]; ?></td>
				<!-- action -->
				<td class="table-row" colspan="2" style="padding-left: 0;"><a href="edit.php?id=<?php echo $row["id"]; ?>" class="link" ><span class="glyphicon glyphicon-edit"></span></a> <a href="delete.php?id=<?php echo $row["id"]; ?>" class="link"><span name="delete" id="delete" title="Delete" onclick="return confirm('Are you sure you want to delete this Email?')" style="margin-left: 20px;" class="glyphicon glyphicon-trash"></span></a></td>
			</tr>
			<?php
					}
				}
			?>
			
		</tbody>
	</table>
	<script type="text/javascript" src="bs/js/jquery.js"></script>
<div class="button_link" style="text-align: center"><a href="index2.php">Send Message To All Mail</a></div>
</body>
</html>