<?php
	session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
	<style>
.bg{
	width:100%;
	height:100%;
	position:absolute;
	z-index:-1;
    opacity:1;
	
}
.form-group{
    font-weight:bold;
	color:white;
}


    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php">Library Management System (LMS)</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
<!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    My Profile
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="view_profile.php">View Profile</a></li>
    <li><a class="dropdown-item" href="edit_profile.php">Edit Profile</a></li>
    <li><a class="dropdown-item" href="change_password.php">Change Password</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>

<a href="../logout.php" class="btn btn-secondary">logout <i class="fa-solid fa-right-from-bracket"></i></a>
</ul>
		</div>
	</nav>
	<span class="maequee"><marquee><b>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span><br>

<div class="bg"
style=" background:rgba(0,0,0,0.5) url(../bg.jpg);  
background-blend-mode:darken;background-size:contain; "> <br><br>
    <center><h4 class="btn btn-secondary"><b>Change  Password</b></h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="update_password.php" method="post">
					<div class="form-group">
						<label for="password">Enter Password:</label>
						<input type="password" class="form-control"placeholder="Old password:" name="old_password">
					</div>
					<div class="form-group">
						<label for="New Password">Enter New Password:</label>
						<input type="password" name="new_password"placeholder="New  password:" class="form-control">
					</div><br>
					<button type="submit" name="update" class="btn btn-primary">Update Password</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>
