<html>
<head>
	<title>Company's Name</title>
	<link rel = "stylesheet" type="text/css" href="assets/front/style.css">
</head>
<body class="bg">
<p id="demo"></p>
<div id="box"></div>
<div id="login" class="mainmenu-login">
	<!--<ul class="select">
		<li>-->
		<a href="javascript:(0)" class="select" onclick="hide1()">LOGIN</a>
	<!--	</li>
	</ul>-->
</div>  
    
	<div id="flogin" class="login-form" style="display:none">
         <!--<?php //if($login_fail): ?>
         <div style="color: #fff">user or password wrong!</div>
         <?php //endif; ?>-->
    	<form action = "/login" method = "post">
        Username: <input type="text" name="username" value="">
            <br><br>
            Password: <input type="password" name="password" value="">
            <br><br>
            <button type="submit" value="Submit">Login</button>
		</form><br>
        <a href="javascript:(0)" class="back" onclick="hide1()">Back</a>
	</div>
    <br><br>
    
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
     
      function delay()
     {
     	setTimeout(hide1, 500);
     }
</script>

</body>
</html>