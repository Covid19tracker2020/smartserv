
<!DOCTYPE html>
<html>
<head>
	<title>HMS system</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-info bg-info ">
	<h5 class="text-white">Hospital Management System</h5>
	<div class="mr-auto"></div>
	<ul class="navbar-nav">
		<?php  
		if(isset($_SESSION['admin'])){
			$user=$_SESSION['admin'];
		echo '<li class="nav-item"><a href="../admin/index.php" class="nav-link   text-white">'.$user.'</a></li>
		<li class="nav-item"><a href="../admin/logout.php" class="nav-link text-white">Logout</a></li>';
		}else if (isset($_SESSION['patient'])) {
			$user=$_SESSION['patient'];
			echo '<li class="nav-item"><a href="../patient/index.php" class="nav-link   text-white">'.$user.'</a></li>
		<li class="nav-item"><a href="../patient/logout.php" class="nav-link text-white">Logout</a></li>';
		}
		else if (isset($_SESSION['Doctor'])) {
			$user=$_SESSION['Doctor'];
			echo '<li class="nav-item"><a href="..Doctor/index.php" class="nav-link   text-white">'.$user.'</a></li>
		<li class="nav-item"><a href="../Doctor/logout.php" class="nav-link text-white">Logout</a></li>';
		}
		else{
			echo '
			<li class="nav-item"><a href="chatbot/index.php" class="nav-link text-white">Chat Bot</a></li>
			<li class="nav-item"><a href="index.php" class="nav-link text-white">Home</a></li>
			<li class="nav-item"><a href="adminlogin.php" class="nav-link text-white">Admin</a></li>
		<li class="nav-item"><a href="doctorlogin.php" class="nav-link text-white">Doctor</a></li>
		<li class="nav-item"><a href="patientlogin.php" class="nav-link text-white">Patient</a></li>';
		}
		?>
	</ul>
</nav>
</body>
</html>