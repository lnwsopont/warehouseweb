<html>
<head>
	<title>P a r c e l</title>
    <link rel = "stylesheet" type="text/css" href="/whm/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<ul class="navigation">
	<li>
		<a href="home.php" class="menu">
			<i class = "fa fa-home" style="font-size: 50px;"></i>
			<p>HOME</p>
		</a>
	</li>
	<li>
		<a href="customer.php" class="menu">
			<i class = "fa fa-user" style="font-size: 50px;"></i>
			<p>CUSTOMER</p>
		</a>
	</li>
	<li>
		<a href="employee.php" class="menu">
			<i class = "fa fa-users" style="font-size: 50px;"></i>
			<p>EMPLOYEE</p>
		</a>
	</li>
	<li class="dropdown">
		<a href="javascript:void(0)" class="menu current">
			<i class = "fa fa-archive" style="font-size: 50px;"></i>
			<p>PARCEL</p>
		</a>
		<div class="dropdown-content">
				<a href="parcel-regist.php" class="drop">Registration</a>
				<a href="parcel-storage.php" class="drop">Manage Storage</a>
		</div>
	</li>
	<li>
		<a href="#" class="menu">
			<i class = "fa fa-sign-out" style="font-size: 50px;"></i>
			<p>LOGOUT</p>
		</a>
	</li>
</ul>
<div class="container">
	<div class="content">
		<h1>P A R C E L</h1>
			<hr><br><br>
			<h2>Manage Storage</h2>
			<br>
			<table>
				<tr>
					<td><a href="javascript:void(0)" onclick="document.getElementById('A1').style.display='block'; 
					  document.getElementById('fade').style.display='block';">A1</a></td>
					  
					<td><a href="javascript:void(0)" onclick="document.getElementById('A2').style.display='block'; 
					  document.getElementById('fade').style.display='block';">A2</a></td>
					  
					<td><a href="javascript:void(0)" onclick="document.getElementById('A3').style.display='block'; 
					  document.getElementById('fade').style.display='block';">A3</a></td>
				</tr>
				<tr>
					<td><a href="javascript:void(0)" onclick="document.getElementById('A4').style.display='block'; 
					  document.getElementById('fade').style.display='block';">A4</a></td>
					<td><a href="javascript:void(0)">A5</a></td>
					<td><a href="javascript:void(0)">A6</a></td>
				</tr>
				<tr>
					<td><a href="javascript:void(0)">A7</a></td>
					<td><a href="javascript:void(0)">A8</a></td>
					<td><a href="javascript:void(0)">A9</a></td>
				</tr>
			</table>
			
		<div id="A1" class="info-content">
			<ul>
				<li>Shelf Code:</li>
				<li>Status:</li>
				<li>Customer Name:</li>
				<li>Customer ID:</li>
				<li>Product ID:</li>
				<li>Product Type:</li>
				<li>Date In:</li>
				<li>Employer ID:</li>
			</ul>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('A1').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="A2" class="info-content">
			<ul>
				<li>Shelf Code:</li>
				<li>Status:</li>
				<li>Customer Name:</li>
				<li>Customer ID:</li>
				<li>Product ID:</li>
				<li>Product Type:</li>
				<li>Date In:</li>
				<li>Employer ID:</li>
			</ul>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('A2').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="A3" class="info-content">
			<ul>
				<li>Shelf Code:</li>
				<li>Status:</li>
				<li>Customer Name:</li>
				<li>Customer ID:</li>
				<li>Product ID:</li>
				<li>Product Type:</li>
				<li>Date In:</li>
				<li>Employer ID:</li>
			</ul>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('A3').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="A4" class="info-content">
			<ul>
				<li>Shelf Code:</li>
				<li>Status:</li>
				<li>Customer Name:</li>
				<li>Customer ID:</li>
				<li>Product ID:</li>
				<li>Product Type:</li>
				<li>Date In:</li>
				<li>Employer ID:</li>
			</ul>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('A4').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="A5" class="info-content">
			<ul>
				<li>Shelf Code:</li>
				<li>Status:</li>
				<li>Customer Name:</li>
				<li>Customer ID:</li>
				<li>Product ID:</li>
				<li>Product Type:</li>
				<li>Date In:</li>
				<li>Employer ID:</li>
			</ul>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('A5').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="A6" class="info-content">
			<ul>
				<li>Shelf Code:</li>
				<li>Status:</li>
				<li>Customer Name:</li>
				<li>Customer ID:</li>
				<li>Product ID:</li>
				<li>Product Type:</li>
				<li>Date In:</li>
				<li>Employer ID:</li>
			</ul>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('A6').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="A7" class="info-content">
			<ul>
				<li>Shelf Code:</li>
				<li>Status:</li>
				<li>Customer Name:</li>
				<li>Customer ID:</li>
				<li>Product ID:</li>
				<li>Product Type:</li>
				<li>Date In:</li>
				<li>Employer ID:</li>
			</ul>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('A7').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="A8" class="info-content">
			<ul>
				<li>Shelf Code:</li>
				<li>Status:</li>
				<li>Customer Name:</li>
				<li>Customer ID:</li>
				<li>Product ID:</li>
				<li>Product Type:</li>
				<li>Date In:</li>
				<li>Employer ID:</li>
			</ul>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('A8').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="A9" class="info-content">
			<ul>
				<li>Shelf Code:</li>
				<li>Status:</li>
				<li>Customer Name:</li>
				<li>Customer ID:</li>
				<li>Product ID:</li>
				<li>Product Type:</li>
				<li>Date In:</li>
				<li>Employer ID:</li>
			</ul>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('A9').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="fade" class="overlay"></div>
	</div>
</div>
</body>
<script>
	var a1 = document.getElementById('A1');
	var a2 = document.getElementById('A2');
	var a3 = document.getElementById('A3');
	var a4 = document.getElementById('A4');
	var a5 = document.getElementById('A5');
	var a6 = document.getElementById('A6');
	var a7 = document.getElementById('A7');
	var a8 = document.getElementById('A8');
	var a9 = document.getElementById('A9');
	var f = document.getElementById('fade');
	function open1()
    {
		a1.style.display='block';
		f.style.display='block';
    }
    
    function close1()
    {
  		a1.style.display='none';
 		f.style.display='none';
    }
	function open2()
    {
		a2.style.display='block';
		f.style.display='block';
    }
    
    function close2()
    {
  		a2.style.display='none';
 		f.style.display='none';
    }
	function open3()
    {
		a3.style.display='block';
		f.style.display='block';
    }
    
    function close3()
    {
  		a3.style.display='none';
 		f.style.display='none';
    }
	function open4()
    {
		a4.style.display='block';
		f.style.display='block';
    }
    
    function close4()
    {
  		a4.style.display='none';
 		f.style.display='none';
    }
	function open5()
    {
		a5.style.display='block';
		f.style.display='block';
    }
    
    function close5()
    {
  		a5.style.display='none';
 		f.style.display='none';
    }
	function open6()
    {
		a6.style.display='block';
		f.style.display='block';
    }
    
    function close6()
    {
  		a6.style.display='none';
 		f.style.display='none';
    }
	function open7()
    {
		a7.style.display='block';
		f.style.display='block';
    }
    
    function close7()
    {
  		a7.style.display='none';
 		f.style.display='none';
    }
	function open8()
    {
		a8.style.display='block';
		f.style.display='block';
    }
    
    function close8()
    {
  		a8.style.display='none';
 		f.style.display='none';
    }
	function open9()
    {
		a9.style.display='block';
		f.style.display='block';
    }
    
    function close9()
    {
  		a9.style.display='none';
 		f.style.display='none';
    }
</script>
</html>
