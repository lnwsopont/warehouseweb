<html>
<head>
	<title>B o o k i n g</title>
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
		<a href="history.php" class="menu">
			<i class = "fa fa-history" style="font-size: 40px;"></i>
			<p>HISTORY</p>
		</a>
	</li>
	<li>
		<a href="product.php" class="menu">
			<i class = "fa fa-archive" style="font-size: 40px;"></i>
			<p>PRODUCT</p>
		</a>
	</li>
	<li>
		<a href="booking.php" class="menu current">
			<i class = "fa fa-bookmark" style="font-size: 40px;"></i>
			<p>BOOKING</p>
		</a>
	</li>
	<li>
		<a href="enquiry.php" class="menu">
			<i class = "fa fa-envelope" style="font-size: 40px;"></i>
			<p>MESSAGE(0)</p>
		</a>
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
		<h1>B O O K I N G</h1>
			<hr><br><br>
			<h2>Warehouse Booking</h2><br>
				<form action="#">
					<div class="left-full">
						<h3>Produt Types</h3>
							<select name="access" form="regist">
								<option value="">Fragile</option>
								<option value="">Non-Fragile</option>
							</select>
						<br><br>
					</div>
					<div class="left-full">
						<h3>Produt Description</h3>
							<input class="size" type="text" name="parcel_des" value="">
						<br><br><br>	
					</div>
					<div class="left">
						<button class="send" type="submit" value="Submit">Book</button><br><br><br>
					</div>
				</form>
			<hr>
		<footer>
				<div class="container-left">
					<h2>MUIC Warehouse Project</h2>
					<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your safety is our highest priority. We commit to provide the lowest fares with our ‘Price Beat Guarantee’. 
					Our team are always here to help, 24 hours a day, 7 days a week. 
					We’ll let you know your choices if your flight is changed before you travel and and keep you updated and provide options if things don’t go to plan on the day. 
					You will get what you paid for and you can have confidence in how quickly we will respond to an issue. We share your passion for protecting our environment. 
					We commit to the privacy of your personal information..</p><br>
				</div>
				<div class="container-right">
					<h2>Contact Us:</h2>
					<p><i class = "fa fa-map-marker" style="font-size: 30px;"></i>&nbsp;&nbsp;&nbsp;&nbsp; Bangkok, Thailand</p>
					<p><i class = "fa fa-phone" style="font-size: 30px;"></i>&nbsp;&nbsp;&nbsp; Phone: (+66)2-123-4567</p>
					<p><i class = "fa fa-envelope" style="font-size: 30px;"></i>&nbsp;&nbsp; Email: name.example@mail.com</p>
					<br>
				</div>
			</footer>	
	</div>
</div>
</body>
</html>