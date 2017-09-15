<?php loadView('global/header'); ?>

<?php if($error){ ?>
<div class="alert critical">
  <h3>Error</h3>
  <p>email or password mismatch</p>
</div>
<?php } ?>

<form action="login.php" method="post">
  <fieldset>
    <legend>Simple form</legend>
    <div class="input-group fluid">
      <label for="email">email</label>
      <input type="email" value="" id="email" placeholder="ex. your@email.com" name="email">
    </div>
    <div class="input-group fluid">
      <label for="pwd">password</label>
      <input type="password" value="" id="pwd" placeholder="password" name="pwd">
    </div>
    <input type="submit" class="tertiary" value="login!"> or <a href="register.php">register</a>
  </fieldset>
</form>

<?php loadView('global/footer'); ?>
