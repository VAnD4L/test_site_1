<?php require_once("./resources/templates/header.php");?>
		<?php echo"
		<div class='container-fluid'>
		  <div class='row'>
			<div class='col' style='background-color:lavender;'></div>
			<div class='col text-center' style='background-color:orange;'>
				<form method='post' action='index.php' id='form' class='form'> "; /* REMOVE EMPLOY*/ echo"
				<h1 class='h1_info'>Remove employ</h1>
				   <div class='formleft'>
					   <br> <div > First name: </div><input type='text' name='DFname'required placeholder='First name'><br>
					   <div > Last name: </div><input type='text' name='DLname'required placeholder='last name'><br>
					   <div > Admin name: </div><input type='text' name='DAname'required placeholder='Admin'><br>
					   <div > Admin Password: </div><input type='password' name='DAPassword'required placeholder='password'><br>
					   <button name='RemoveEmplyForm' type='submit' value='Submit'>submit</button>    <button type='reset'>reset</button><br>
				   </div>
				</form> "; /* END REMOVE EMPLOY*/ echo"
				
				<br>
				<hr/>
				<br>
				<form method='post' action='#' id='form' class='form'> "; /* SEARCH EMPLOY*/ echo"
				<h1 class='h1_info'>search for employs</h1>
				   <div class='formleft'>
					   <br> <div > First name: </div><input type='text' name='SFname'required placeholder='First name'><br>
					   <div > last name: </div><input type='text' name='SLname'required placeholder='last name'><br>
					   <button name='SearchEmployForm' type='submit' value='Submit'>submit</button>    <button type='reset'>reset</button><br>
				   </div>
				</form> "; /* END SEARCH EMPLOY*/ echo"
				
			</div>
			
			<div class='col text-right' style='background-color:lavender;'></div>
		  </div>
		</div>";
		?>
		
		
		

		<?php require_once("./resources/templates/Footer.php");?>