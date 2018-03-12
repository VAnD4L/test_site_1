<?php /*
			TODO 
				1. implement SEARCH EMPLOY
				2.make nav bar fixed and lower everything by navbar height
				3.products
				4. home page / landing page
				5. tidy up with bootstrap

*/?>

<?php   /*for sql connection*/
define('DB_HOST', 'localhost');    /* change in real site*/
define('DB_NAME', 'new_site');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL 1: " . mysqli_connect_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_error());

?>

<?php require_once("./resources/templates/header.php");?>


<?php echo" <div> home page</div> "?>


<?php  											/*INSERT QUERY AND MESSAGE*/
	if(isset($_POST['AddEmployForm'])){  /* if AddEmply form was sent*/
			
			if(isset($_POST['fname'])){
				$firstname=$_POST['fname'];
			}
			if(isset($_POST['lname'])){
				$lastname=$_POST['lname'];
			}
			if(isset($_POST['bday'])){
				$birthday=$_POST['bday'];
			}
			if(isset($_POST['email'])){
				$email=$_POST['email'];
			}
			if(isset($_POST['gender'])){
				$gender=$_POST['gender'];
			}

			$query = "INSERT INTO employs (firstname,lastname,birthday,email,gender) VALUES ('$firstname','$lastname','$birthday','$email','$gender')";
			$data = mysqli_query ($con,$query)or die(mysqli_error($con));
			if($data){ /* if registration went well */
				
					echo"
					<script language='javascript'>
					alert('Sign-Up completed successfully')
					</script>";
			}
			else{
					echo"
					<script language='javascript'>
					alert('Sign-Up Failed')
					</script>";
	
			}
	}?>
		
		
<?php			/*DELETE QUERY AND MESSAGE*/
			if(isset($_POST['RemoveEmplyForm'])){  /* if AddEmply form was sent*/
			
				if(isset($_POST['DFname'])){
					$firstname=$_POST['DFname'];
				}
				if(isset($_POST['DLname'])){
					$lastname=$_POST['DLname'];
				}
				if(isset($_POST['DAname'])){
					$Admin_name=$_POST['DAname'];
				}
				if(isset($_POST['DAPassword'])){
					$Admin_password=$_POST['DAPassword'];
				}

				$Check_Employ_query = "SELECT * FROM `employs` WHERE `firstname` = '$firstname' AND `lastname` = '$lastname'";
				$Delete_Employ_query = "DELETE FROM `employs` WHERE `firstname`='$firstname' AND `lastname` = '$lastname'";
				$Admin_query = "SELECT * FROM `admins` WHERE `Admin_name`= '$Admin_name' AND `Admin_password` = '$Admin_password'";
				
				$check_admin =  mysqli_query($con,$Admin_query)or die("admin query failed" .mysqli_error($con));/*check for admin*/
				
				if(mysqli_num_rows($check_admin)<=0){/* ADMIN NOT FOUND*/
					echo"<script language='javascript'>
						alert('Admin not found or wrong password')
						</script>";
				}
				else{/* ADMIN  FOUND*/
				
					$check_Employ =   mysqli_query($con,$Check_Employ_query)or die("Check employ query failed" .mysqli_error($con));/*check for admin*/
					
					if(mysqli_num_rows($check_Employ)<=0){ /*IF EMPLOY NOT FOUND*/
						echo"<script language='javascript'>
						alert('Employ Not Found')
						</script>";
					}
					else{
						/*delete employ*/
						$Delete_Employ_query = mysqli_query($con,$Delete_Employ_query)or die("delete Employ query failed" .mysqli_error($con));
						echo"<script language='javascript'>
						alert('Employ Deleted Successfully')
						</script>";
					}
				}

				
			}
?>		

<?php 			/*SEARCH QUERY */
	
?>

<?php require_once("./resources/templates/Footer.php");?>