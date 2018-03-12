<?php echo"
<!doctype html>
<html>
	<head>
		<title>JSP PROJ</title>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
		<link rel='stylesheet' type='text/css' href='/PROJ/css/footer-style.css'>
		<link rel='stylesheet' type='text/css' href='/PROJ/css/RemoveEmploy-style.css'>
		<script type='text/javascript' >
			$(document).ready(function(){
				(function () {
					var tmp = new Date();
					var day = tmp.getDate();
					var month = tmp.getMonth()+1;
					var year = tmp.getFullYear();
					document.getElementById('timer').innerHTML = day+'/'+month+'/'+year;
				})();				
			});
		</script>

		
	</head>

	
	
	<body>
		<nav class='navbar navbar-expand-lg navbar-light bg-light'>
		  <a class='navbar-brand' href='index.php'>Brand</a>
		  <div class='collapse navbar-collapse' id='navbarSupportedContent'>
			<ul class='navbar-nav mr-auto'>
			  <li class='nav-item'>
				<a class='nav-link' href='index.php'>Home <span class='sr-only'>(current)</span></a>
			  </li>
			  <li class='nav-item'>
				<a class='nav-link' href='#'>Products</a>
			  </li>
			  <li class='nav-item dropdown'>
				<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
				  Employs
				</a>
				<div class='dropdown-menu' aria-labelledby='navbarDropdown'>
				  <a class='dropdown-item ' href='AddEmploy.php'>Add Employ</a>
				  <div class='dropdown-divider'></div>
				  <a class='dropdown-item Active' href='RemoveEmploy.php'>Remove Employ</a>
				  <div class='dropdown-divider'></div>
				  <a class='dropdown-item' href='#'>Something else here</a>
				</div>
			  </li>
			</ul>
			
			<div class='inline mr-auto '>The Date is : <span class='header2' id='timer'></div>
			
			<form class='form-inline my-2 my-lg-0'>
			  <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
			  <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
			</form>
		  </div>
		</nav>
		
		
		"?>
		
		