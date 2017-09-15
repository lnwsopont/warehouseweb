<?php

function get_orders_of($user_id){
    $list = sql_select("select * from orders where user_id = $user_id");
    return $list;
}

function get_order_detail($order_id){

}

function confirm_order($order_id, $img, $desc){

}

function get_total_price($order_id){
    $rows = sql_select("
        select sum(quantity * prod_price) as total
        from products p join order_detail o on p.prod_id = o.prod_id
        where orders_id = $order_id
    ");
    return $rows[0]['total'];
}

 ?>
