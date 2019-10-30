<?php
	include('connection.php');
	if(isset($_POST['del'])){
		$id=$_POST['id'];
		$del = mysqli_query($conn,"delete from `users` where id='$id'");
	}print_r($del);
?>


