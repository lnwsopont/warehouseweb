<?php loadView('global/header'); ?>


<div style=>

<img src="img/banner2.jpg"></img></br>
    Our Address:</br>
    Mahidol University International College </br>
    999 Phuttamonthon 4 Road, Salaya 73170 </br>
    Tel: +66 xxxxxxx </br>
    Mobile No:+66 xxx xxx xxx

    <?php
    //if "email" variable is filled out, send email
      if (isset($_REQUEST['email']))  {

      //Email information
      $admin_email = "sopontrangansri@gmail.com";
      $email = $_REQUEST['email'];
      $subject = $_REQUEST['subject'];
      $comment = $_REQUEST['comment'];

      //send email
      //mail($admin_email, "$subject", $comment, "From:" . $email);

      //Email response
      echo "Thank you for contacting us!";
      }

      //if "email" variable is not filled out, display the form
      else  {
    ?>

        <form method="post">
          Email: <input name="email" type="text" /><br />
          Subject: <input name="subject" type="text" /><br />
          Message:<br />
          <textarea name="comment" rows="6" cols="40"></textarea><br />
          <input type="submit" value="Submit" />


        </form>
        <?php
          }
        ?>

</div>

<?php loadView('global/footer'); ?>
