<?php loadView('global/header'); ?>

<?php if($pwd_error){ ?>
<div class="alert critical">
  <h3>Password Error</h3>
  <p>pass mismatch</p>
</div>
<?php } ?>

<form action="register.php" method="post">
  <fieldset>
    <legend>Simple form</legend>
    <div class="input-group fluid">
      <label for="email">email</label>
      <input type="email" value="<?php echo $i_email; ?>" id="email" placeholder="ex. your@email.com" name="email">
    </div>
    <div class="input-group fluid">
      <label for="pwd">password</label>
      <input type="password" value="" id="pwd" placeholder="password" name="pwd">
    </div>
    <div class="input-group fluid">
      <label for="pwd2">password (confirm)</label>
      <input type="password" value="" id="pwd2" placeholder="password" name="pwd2">
    </div>
    <div class="input-group fluid">
      <label for="fname">first name</label>
      <input type="text" value="<?php echo $i_fname; ?>" id="fname" placeholder="first name" name="fname">
    </div>
    <div class="input-group fluid">
      <label for="lname">last name</label>
      <input type="text" value="<?php echo $i_lname; ?>" id="lname" placeholder="lastname name" name="lname">
    </div>
    <div class="input-group fluid">
      <label for="addr">address</label>
      <textarea name="addr"><?php echo $i_addr; ?></textarea>
    </div>
    <input type="submit" class="tertiary" value="Submit!"> <input type="submit" value="clear" name="clear">
  </fieldset>
</form>

<?php loadView('global/footer'); ?>
