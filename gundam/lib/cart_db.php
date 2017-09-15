<?php
 function AddToCartdb($prod_id,$quantity)
 {
     $arr = sql_select("select quantity from temp_order where
     user_id={$_SESSION['user']['user_id']} and
     prod_id = $prod_id");

     if(empty($arr))
     {
         $current_quantity = 0;
     }
     else
     {
         $current_quantity = $arr[0]['quantity'];
     }
     sql_update("update temp_order set quantity = ".($quantity + $current_quantity)."where
     user_id={$_SESSION['user']['user_id']} and
     prod_id = $prod_id");

 }

?>
