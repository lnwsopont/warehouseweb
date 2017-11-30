<head>
	<title>P a r c e l</title>
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
		<a href="customer.php" class="menu">
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
		<a href="javascript:void(0)" class="menu current">
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
		<h1>P A R C E L</h1>
			<hr><br><br>
			
			<h2>Registration</h2><br>
		
				<form action = "#">
					<div class="left-full">
						<h3>Cutomer ID</h3>
						<input class="size" type="text" name="cust_id" value="">
					</div>
					<div class="left">
						<h3>Parcel ID</h3>
						<input class="size" type="text" name="parcel_id" value="">
					</div>
					<div class = "right">
						<h3>Description</h3>
						<input class="size" type="text" name="parcel_des" value="">
					</div>
					<div class="left">
					<h3>Type</h3>
					<select>
						<option>Fragile</option>
						<option>Non-Fragile</option>
					</select>
					</div>
					<div class="right-out">
						<h3>Date Out</h3>
						<input type="date" name="outdate" value="">
					</div>
					<div class="right-in">
						<h3>Date In</h3>
						<input type="date" name="indate" value="">
					</div>
					<div class="left-full">
						<h3>Shelf Code</h3>
						<input class="size" type="text" name="shelf_code" value="">
					</div>
					<div class="left-full">
						<h3>Employee ID</h3>
						<input class="size" type="text" name="emp_id_in" value="">
						<br><br><br>
					</div>
					<div class="left">
						<button class="send" type="submit" value="Submit">Register</button>
					</div>
				</form>
	</div>
</div>
</body>
</html>