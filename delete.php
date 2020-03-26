
<?php
$id = $_GET['id'];
$conn = new mysqli("localhost","root","","mailinglist2");
if ($conn->error) {
	echo "Unable to connect to the database";
}
 else {
 $sql = "delete  from mailinglist2.email_tb where id =$id";
 $result = $conn->query($sql);
 }
 
	$conn->close();
	header('location:index.php');		

?>
	