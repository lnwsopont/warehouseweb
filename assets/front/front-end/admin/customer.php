<head>
	<title>C u s t o m e r</title>
	<link rel = "stylesheet" type="text/css" href="/whm/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<ul class="navigation">
	<li>
		<img src="/whm/Logo.jpg">
	</li>
	<li>
		<a href="home.php" class="menu">
			<i class = "fa fa-home" style="font-size: 40px;"></i>
			<p>HOME</p>
		</a>
	</li>
	<li>
		<a href="customer.php" class="menu current">
			<i class = "fa fa-user" style="font-size: 40px;"></i>
			<p>CUSTOMER</p>
		</a>
	</li>
	<li>
		<a href="employee.php" class="menu">
			<i class = "fa fa-users" style="font-size: 40px;"></i>
			<p>EMPLOYEE</p>
		</a>
	</li>
	<li class="dropdown">
		<a href="javascript:void(0)" class="menu">
			<i class = "fa fa-archive" style="font-size: 40px;"></i>
			<p>PARCEL</p>
		</a>
		<div class="dropdown-content">
				<a href="parcel-regist.php" class="drop">Registration</a>
				<a href="parcel-storage.php" class="drop">Manage Storage</a>
		</div>
	</li>
	<li>
		<a href="#" class="menu">
			<i class = "fa fa-sign-out" style="font-size: 40px;"></i>
			<p>LOGOUT</p>
		</a>
	</li>
</ul>

<div class="container">
	<div class="content">
		<h1>C U S T O M E R</h1>
			<hr><br><br>
		<h2>Registration</h2><br>
		
			<form action = "#" id="regist">
				<div class="half-left">
					<h3>Firstname</h3>
						<input class="size" type="text" name="fname" value="">
				</div>
				<div class="half-right">
					<h3>Lastname</h3>
						<input class="size" type="text" name="lname" value="">
				</div>
				<br><br>
				<div class="half-left">
					<h3>Username</h3>
						<input class="size" type="text" name="fname" value="">
				</div>
				<br><br>
				<div class="half-right">
					<h3>Password</h3>
						<input class="size" type="text" name="lname" value="">
				</div>
				<div class="left-full">
					<h3>Confirm Password</h3>
						<input class="size" type="text" name="tel" value="">
				</div>
				<div class="left-full">
					<h3>Phone Number</h3>
						<input class="size" type="text" name="tel" value="">
				</div>
				<div class="left-full">
					<h3>Email</h3>
						<input class="size" type="text" name="email" value="">
				</div>
				<div class="left-full">
					<h3>Level of Access</h3>
						<select name="access" form="regist">
							<option value="">0</option>
							<option value="">1</option>
							<option value="">2</option>
						</select>
					<br><br><br>	
				</div>
				<div class="left">
					<button class="send" type="submit" value="Submit">Register</button>
					<br><br>
				</div>
			</form>
	
	</div>
</div>
</body>
</html>