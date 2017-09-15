<?php include 'lib/init.php';
loadView('global/admin');?>
<html>
<a href="admin_home.php">Home</a>

<?php

    $order = $_GET['orders_id'];

 if(isset($_GET['verify']))
 {
     sql_update("update admin_order_check set verify = 1 where order_id = $order");
     sql_update("update orders set status = 2 where orders_id = $order");

 }

    $list = sql_select("select * from admin_order_check where verify = 1");?>

    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>User ID</th>
                                <th>Upload Time</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Verify</th>
                            </tr>
                           </thead>

 <? foreach($list as $item) {?>

    <form>
         <tr>
                <td><?php echo $item['order_id'];?></td>
                <td><?php echo $item['user_id'];?></td>
                <td><?php echo $item['upload_time'];?></td>
                 <td><?php echo $item['status'] ;?></td>
                <td><?php echo $item['verify'] ;?></td>
                <td><?php ;?></td>
                <input type="hidden" name="orders_id" value="<?php echo $item['order_id']; ?>">
                <td><input type="submit" name="verify" value="verify"/></td>
        </tr>
    </form>

    <? }?>


?>



</html>
