<html>
<head>
	<title>Company's Name</title>
	<link rel = "stylesheet" type="text/css" href="style.css">
</head>
<body class="bg">
<p id="demo"></p>
<div id="box"></div>
<div id="login" class="mainmenu-login"><a href="javascript:(0)" class="select" onclick="hide1()">LOGIN</a></div>
	<div id="flogin" class="login-form" style="display:none">
    	<form action="#">
        	Username: <input type="text" name="user" value="">
            <br><br>
            Password: <input type="text" name="pwd" value="">
            <br><br>
            <button type="submit" value="Submit">Login</button>
		</form><br>
        <a href="javascript:(0)" class="back" onclick="hide1()">Back</a>
	</div>
    <br><br>
<div id="sno" class="mainmenu-serial"><a href="javascript:(0)" class="select" onclick="hide2()">CONTACT</a></div>
    <div id="fsno" class="serial-form" style="display:none">
		<form action="#">
					Firstname: <input type="text" name="fname" value="">
					<br><br>
					Lastname: &nbsp;<input type="text" name="lname"  value="">
					<br><br>
					Email: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" value="">
					<br><br>
					Message: &nbsp;&nbsp;<input type="text" name="msg" value="">
					<br><br><br>
					<button type="submit" value="Submit">Send</button>
		</form><br>
        <a href="javascript:(0)" class="back" onclick="hide2()">Back</a>
	</div>
    
<script>
	var l = document.getElementById("login");
    var fl = document.getElementById("flogin");
    var s = document.getElementById("sno");
    var fs = document.getElementById("fsno");
    
	function hide1()
    {
      if(fl.style.display === "none")
      {
          fl.style.display = "block";
          l.style.display = "none";
          s.style.display = "none";
          fs.style.display = "none";
      }
      else
      {
          fl.style.display = "none";
          l.style.display = "block";
          s.style.display = "block";
          fs.style.display = "none";
      }
     }
     
     function hide2()
    {
      if(fs.style.display === "none")
      {
          fs.style.display = "block";
          l.style.display = "none";
          s.style.display = "none";
          fl.style.display = "none";
      }
      else
      {
          fs.style.display = "none";
          l.style.display = "block";
          s.style.display = "block";
          fl.style.display = "none";
      }
     }
</script>

</body>
</html>