<html>
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
			<br><br><br>
			<table class="store">
				<tr class="store">
					<td class="store"><a href="javascript:void(0)" onclick="document.getElementById('A1').style.display='block'; 
					  document.getElementById('fade').style.display='block';">A1</a></td>
					  
					<td class="store"><a href="javascript:void(0)" onclick="document.getElementById('A2').style.display='block'; 
					  document.getElementById('fade').style.display='block';">A2</a></td>
					  
					<td class="store"><a href="javascript:void(0)" onclick="document.getElementById('A3').style.display='block'; 
					  document.getElementById('fade').style.display='block';">A3</a></td>
					<td class="store"><a href="javascript:void(0)" onclick="document.getElementById('A4').style.display='block'; 
					  document.getElementById('fade').style.display='block';">A4</a></td>
					<td class="store"><a href="javascript:void(0)" onclick="document.getElementById('A5').style.display='block'; 
					  document.getElementById('fade').style.display='block';">A5</a></td>  
				</tr>
				<tr class="store">
					<td class="store"><a href="javascript:void(0)" onclick="document.getElementById('B1').style.display='block'; 
					  document.getElementById('fade').style.display='block';">B1</a></td>
					<td class="store"><a href="javascript:void(0)" onclick="document.getElementById('B2').style.display='block'; 
					  document.getElementById('fade').style.display='block';">B2</a></td>
					<td class="store"><a href="javascript:void(0)" onclick="document.getElementById('B3').style.display='block'; 
					  document.getElementById('fade').style.display='block';">B3</a></td>
					<td class="store"><a href="javascript:void(0)" onclick="document.getElementById('B4').style.display='block'; 
					  document.getElementById('fade').style.display='block';">B4</a></td>
					<td class="store"><a href="javascript:void(0)" onclick="document.getElementById('B5').style.display='block'; 
					  document.getElementById('fade').style.display='block';">B5</a></td>  
				</tr>
			</table>
			
		<div id="A1" class="info-content">
			<ul>
				<!-- need a field which will indicate whether the product is currently on the shelf or has been in the past? -->
				<!-- assuming that only one product can be on a shelf at a time -->
				<!-- need column called 'shelf_code' in customer table -->
				<li>Shelf Code:</li> <!-- select shelf_code from shelf where shelf_code = 'A1'; -->
				<li>Status:</li> <!-- select shelf_status from shelf where shelf_code = 'A1'; -->
				<li>Customer Name:</li> <!-- select concat(cus_fname, " ", cus_lname) as FullName from customer where shelf_code = 'A1'; -->
				<li>Customer ID:</li> <!-- select cus_id from customer where shelf_code = 'A1'; -->
				<li>Product ID:</li> <!-- select parcel_id from parcel where shelf_code = 'A1' and parcel_status = 1; -->
				<li>Product Type:</li> <!-- select parcel_type from parcel where shelf_code = 'A1' and parcel_status = 1; -->
				<li>Date In:</li> <!-- select parcel_indate from parcel where shelf_code = 'A1' and parcel_status = 1; -->
				<li>Employee ID:</li> <!-- select emp_id_in from parcel where shelf_code = 'A1' and parcel_status = 1; -->
			</ul><br>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('A1').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="A2" class="info-content">
			<ul>
				<li>Shelf Code:</li> <!-- select shelf_code from shelf where shelf_code = 'A2'; -->
				<li>Status:</li> <!-- select shelf_status from shelf where shelf_code = 'A2'; -->
				<li>Customer Name:</li> <!-- select concat(cus_fname, " ", cus_lname) as FullName from customer where shelf_code = 'A2'; -->
				<li>Customer ID:</li> <!-- select cus_id from customer where shelf_code = 'A2'; -->
				<li>Product ID:</li> <!-- select parcel_id from parcel where shelf_code = 'A2' and parcel_status = 1; -->
				<li>Product Type:</li> <!-- select parcel_type from parcel where shelf_code = 'A2' and parcel_status = 1; -->
				<li>Date In:</li> <!-- select parcel_indate from parcel where shelf_code = 'A2' and parcel_status = 1; -->
				<li>Employee ID:</li> <!-- select emp_id_in from parcel where shelf_code = 'A2' and parcel_status = 1; -->
			</ul><br>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('A2').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="A3" class="info-content">
			<ul>
				<li>Shelf Code:</li> <!-- select shelf_code from shelf where shelf_code = 'A3'; -->
				<li>Status:</li> <!-- select shelf_status from shelf where shelf_code = 'A3'; -->
				<li>Customer Name:</li> <!-- select concat(cus_fname, " ", cus_lname) as FullName from customer where shelf_code = 'A3'; -->
				<li>Customer ID:</li> <!-- select cus_id from customer where shelf_code = 'A3'; -->
				<li>Product ID:</li> <!-- select parcel_id from parcel where shelf_code = 'A3' and parcel_status = 1; -->
				<li>Product Type:</li> <!-- select parcel_type from parcel where shelf_code = 'A3' and parcel_status = 1; -->
				<li>Date In:</li> <!-- select parcel_indate from parcel where shelf_code = 'A3' and parcel_status = 1; -->
				<li>Employee ID:</li> <!-- select emp_id_in from parcel where shelf_code = 'A3' and parcel_status = 1; -->
			</ul><br>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('A3').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="A4" class="info-content">
			<ul>
				<li>Shelf Code:</li> <!-- select shelf_code from shelf where shelf_code = 'A4'; -->
				<li>Status:</li> <!-- select shelf_status from shelf where shelf_code = 'A4'; -->
				<li>Customer Name:</li> <!-- select concat(cus_fname, " ", cus_lname) as FullName from customer where shelf_code = 'A4'; -->
				<li>Customer ID:</li> <!-- select cus_id from customer where shelf_code = 'A4'; -->
				<li>Product ID:</li> <!-- select parcel_id from parcel where shelf_code = 'A4' and parcel_status = 1; -->
				<li>Product Type:</li> <!-- select parcel_type from parcel where shelf_code = 'A4' and parcel_status = 1; -->
				<li>Date In:</li> <!-- select parcel_indate from parcel where shelf_code = 'A4' and parcel_status = 1; -->
				<li>Employee ID:</li> <!-- select emp_id_in from parcel where shelf_code = 'A4' and parcel_status = 1; -->
			</ul><br>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('A4').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="A5" class="info-content">
			<ul>
				<li>Shelf Code:</li> <!-- select shelf_code from shelf where shelf_code = 'A5'; -->
				<li>Status:</li> <!-- select shelf_status from shelf where shelf_code = 'A5'; -->
				<li>Customer Name:</li> <!-- select concat(cus_fname, " ", cus_lname) as FullName from customer where shelf_code = 'A5'; -->
				<li>Customer ID:</li> <!-- select cus_id from customer where shelf_code = 'A5'; -->
				<li>Product ID:</li> <!-- select parcel_id from parcel where shelf_code = 'A5' and parcel_status = 1; -->
				<li>Product Type:</li> <!-- select parcel_type from parcel where shelf_code = 'A5' and parcel_status = 1; -->
				<li>Date In:</li> <!-- select parcel_indate from parcel where shelf_code = 'A5' and parcel_status = 1; -->
				<li>Employee ID:</li> <!-- select emp_id_in from parcel where shelf_code = 'A5' and parcel_status = 1; -->
			</ul><br>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('A5').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="B1" class="info-content">
			<ul>
				<li>Shelf Code:</li> <!-- select shelf_code from shelf where shelf_code = 'B1'; -->
				<li>Status:</li> <!-- select shelf_status from shelf where shelf_code = 'B1'; -->
				<li>Customer Name:</li> <!-- select concat(cus_fname, " ", cus_lname) as FullName from customer where shelf_code = 'B1'; -->
				<li>Customer ID:</li> <!-- select cus_id from customer where shelf_code = 'B1'; -->
				<li>Product ID:</li> <!-- select parcel_id from parcel where shelf_code = 'B1' and parcel_status = 1; -->
				<li>Product Type:</li> <!-- select parcel_type from parcel where shelf_code = 'B1' and parcel_status = 1; -->
				<li>Date In:</li> <!-- select parcel_indate from parcel where shelf_code = 'B1' and parcel_status = 1; -->
				<li>Employee ID:</li> <!-- select emp_id_in from parcel where shelf_code = 'B1' and parcel_status = 1; -->
			</ul><br>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('B1').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="B2" class="info-content">
			<ul>
				<li>Shelf Code:</li> <!-- select shelf_code from shelf where shelf_code = 'B2'; -->
				<li>Status:</li> <!-- select shelf_status from shelf where shelf_code = 'B2'; -->
				<li>Customer Name:</li> <!-- select concat(cus_fname, " ", cus_lname) as FullName from customer where shelf_code = 'B2'; -->
				<li>Customer ID:</li> <!-- select cus_id from customer where shelf_code = 'B2'; -->
				<li>Product ID:</li> <!-- select parcel_id from parcel where shelf_code = 'B2' and parcel_status = 1; -->
				<li>Product Type:</li> <!-- select parcel_type from parcel where shelf_code = 'B2' and parcel_status = 1; -->
				<li>Date In:</li> <!-- select parcel_indate from parcel where shelf_code = 'B2' and parcel_status = 1; -->
				<li>Employee ID:</li> <!-- select emp_id_in from parcel where shelf_code = 'B2' and parcel_status = 1; -->
			</ul><br>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('B2').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="B3" class="info-content">
			<ul>
				<li>Shelf Code:</li> <!-- select shelf_code from shelf where shelf_code = 'B3'; -->
				<li>Status:</li> <!-- select shelf_status from shelf where shelf_code = 'B3'; -->
				<li>Customer Name:</li> <!-- select concat(cus_fname, " ", cus_lname) as FullName from customer where shelf_code = 'B3'; -->
				<li>Customer ID:</li> <!-- select cus_id from customer where shelf_code = 'B3'; -->
				<li>Product ID:</li> <!-- select parcel_id from parcel where shelf_code = 'B3' and parcel_status = 1; -->
				<li>Product Type:</li> <!-- select parcel_type from parcel where shelf_code = 'B3' and parcel_status = 1; -->
				<li>Date In:</li> <!-- select parcel_indate from parcel where shelf_code = 'B3' and parcel_status = 1; -->
				<li>Employee ID:</li> <!-- select emp_id_in from parcel where shelf_code = 'B3' and parcel_status = 1; -->
			</ul><br>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('B3').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="B4" class="info-content">
			<ul>
				<li>Shelf Code:</li> <!-- select shelf_code from shelf where shelf_code = 'B4'; -->
				<li>Status:</li> <!-- select shelf_status from shelf where shelf_code = 'B4'; -->
				<li>Customer Name:</li> <!-- select concat(cus_fname, " ", cus_lname) as FullName from customer where shelf_code = 'B4'; -->
				<li>Customer ID:</li> <!-- select cus_id from customer where shelf_code = 'B4'; -->
				<li>Product ID:</li> <!-- select parcel_id from parcel where shelf_code = 'B4' and parcel_status = 1; -->
				<li>Product Type:</li> <!-- select parcel_type from parcel where shelf_code = 'B4' and parcel_status = 1; -->
				<li>Date In:</li> <!-- select parcel_indate from parcel where shelf_code = 'B4' and parcel_status = 1; -->
				<li>Employee ID:</li> <!-- select emp_id_in from parcel where shelf_code = 'B4' and parcel_status = 1; -->
			</ul><br>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('B4').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
		</div>
		<div id="B5" class="info-content">
			<ul>
				<li>Shelf Code:</li> <!-- select shelf_code from shelf where shelf_code = 'B5'; -->
				<li>Status:</li> <!-- select shelf_status from shelf where shelf_code = 'B5'; -->
				<li>Customer Name:</li> <!-- select concat(cus_fname, " ", cus_lname) as FullName from customer where shelf_code = 'B5'; -->
				<li>Customer ID:</li> <!-- select cus_id from customer where shelf_code = 'B5'; -->
				<li>Product ID:</li> <!-- select parcel_id from parcel where shelf_code = 'B5' and parcel_status = 1; -->
				<li>Product Type:</li> <!-- select parcel_type from parcel where shelf_code = 'B4' and parcel_status = 1; -->
				<li>Date In:</li> <!-- select parcel_indate from parcel where shelf_code = 'B5' and parcel_status = 1; -->
				<li>Employee ID:</li> <!-- select emp_id_in from parcel where shelf_code = 'B5' and parcel_status = 1; -->
			</ul><br>
			<a href="javascript:void(0)" class="btn" onclick="document.getElementById('B5').style.display='none'; document.getElementById('fade').style.display='none';">Close</a>
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
	var B1 = document.getElementById('B1');
	var B2 = document.getElementById('B2');
	var B3 = document.getElementById('B3');
	var B4 = document.getElementById('B4');
	var B5 = document.getElementById('B5');
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
		B1.style.display='block';
		f.style.display='block';
    }
    
    function close6()
    {
  		B1.style.display='none';
 		f.style.display='none';
    }
	function open7()
    {
		B2.style.display='block';
		f.style.display='block';
    }
    
    function close7()
    {
  		B2.style.display='none';
 		f.style.display='none';
    }
	function open8()
    {
		B3.style.display='block';
		f.style.display='block';
    }
    
    function close8()
    {
  		B3.style.display='none';
 		f.style.display='none';
    }
	function open9()
    {
		B4.style.display='block';
		f.style.display='block';
    }
    
    function close9()
    {
  		B4.style.display='none';
 		f.style.display='none';
    }
</script>
</html>
