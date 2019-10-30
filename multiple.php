<?php
	include('connection.php');
	if(isset($_POST["multi"]))
{	
 foreach($_POST["multi"] as $id)
 {	
  mysqli_query($conn,"delete from `users` where id='$id'");

 }
}
?>