<?php
	include('connection.php');
?>
<!DOCTYPE html>
<html>
	<head>
		
	</head>
<body>
	         
				
					<form>
						
							<label>Firstname:</label>
							<input type  = "text"  id = "firstname" class = "form-control">
						
						
							<label>Lastname:</label>
							<input type  = "text" id = "lastname" class = "form-control">
						
							<label>Email:</label>
							<input type  = "text"  id = "email" class = "form-control">
						
							<label>Age:</label>
							<input type  = "number"  id = "age" class = "form-control">
						
							<div><button type = "button" id="addstdnt" >add</button></div>
						
					</form>
				
                <br>
			
			<div id="valuestable"></div>
			
		
	
</body>
<script src = "assets/js/jquery-3.4.1.min.js"></script>	
<script src="assets/js/javascript.js"></script>
</html>