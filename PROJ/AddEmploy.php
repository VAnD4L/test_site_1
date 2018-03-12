<?php require_once("./resources/templates/header.php");?>

<?php echo"
		<div class='container-fluid'>
		  <div class='row'>
			<div class='col' style='background-color:lavender;'> </div>
			<div class='col text-center' style='background-color:orange;'>  <!-- ADD EMPLOY PAGE--> 
				<form method='post' action='index.php' id='form' class='form'>
				<h1 class='h1_info'>Add employ</h1>
				   <div class='formleft'>
					   <br> <div > First name: </div><input type='text' name='fname'required placeholder='First name'><br>
					   <div > last name: </div><input type='text' name='lname'required placeholder='last name'><br>
					   <div > Date of bitrh: </div><input type='date' name='bday' required ><br>
					   <div > email: </div><input type='email' name='email' required ><br>
					  


					   <br><div class='fontsettings'><div>Gender:</div>
						   <input type='radio' name='gender' value='male' > Male
						   <input type='radio' name='gender' value='female'> Female
						   <input type='radio' name='gender' value='BirdPerson' > bird Person
					   </div>

					   <button name='AddEmployForm' type='submit' value='Submit'>submit</button>    <button type='reset'>reset</button><br>
				   </div>
				</form>
				<br>
			</div><!-- END ADD EMPLOY PAGE--> 
			
			<div class='col text-right' style='background-color:lavender;'></div>
		  </div>
		</div>
"?>

<?php require_once("./resources/templates/Footer.php");?>