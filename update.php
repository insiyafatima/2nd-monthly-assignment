<?php
	include('connection.php');
		
		if(isset($_GET['id'])){
	$id = $_GET['id'];
	if(isset($_POST['submit'])){
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$sql_update = 'UPDATE users SET firstname="'.$fname.'", lastname="'.$lname.'", email="'.$email.'", age='.$age.' WHERE id = '.$id;
		if(mysqli_query($conn, $sql_update)){
			header('location: http://localhost/scnd-ass/index.php');
			exit();
		} else{
			echo mysqli_error($conn);
		}
	}
	$all=mysqli_query($conn,"select * from `users` where id='$id'");
		$row=mysqli_fetch_array($all);
		
		}
	?>
	
  
		
		<form action='#' method="post">
		
			Firstname: <input type="text" name='firstname' value="<?php echo $row['firstname']; ?>" id="ufirstname<?php echo $row['id']; ?>">
			Lastname: <input type="text" name='lastname' value="<?php echo $row['lastname']; ?>" id="ulastname<?php echo $row['id']; ?>" >
			Email: <input type="text" name='email' value="<?php echo $row['email']; ?>" id="uemail<?php echo $row['id']; ?>" >
			Age: <input type="text" name='age' value="<?php echo $row['age']; ?>" id="uage<?php echo $row['id']; ?>" >
			
			<input name='submit' type='submit' />
		
			
		
		</form>
  
  
