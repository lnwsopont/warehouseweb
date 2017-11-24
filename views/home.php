<html>
    <head>
        <title>MUIC Warehouse Project</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/assets/materialize/css/materialize.css">
        <script src="/assets/materialize/js/materialize.min.js"></script>
        <link href="/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>


        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center">MUIC Warehouse Project</a>
            </div>
        </nav>

            <div class="row" style="margin-top: 20px;">
                  <div align = "center">

          <?php if($login_fail): ?>
            <div style="background: #f00; color: #fff">user or password wrong!</div>
          <?php endif; ?>

         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

            <div style = "margin:30px">

               <form action = "/login" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>

               <div style = "font-size:11px; color:#cc0000; margin-top:10px"> <?php $error ?> </div>

            </div>

         </div>

      </div>
            </div>
<? View::display('footer'); ?>