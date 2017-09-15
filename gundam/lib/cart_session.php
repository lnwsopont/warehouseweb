<?php
    function AddToCart($prod_id,$quantity)
    {
        if(empty($_SESSION['cart']))
        {
            $_SESSION['cart']=[];
        }
        if(empty($_SESSION['cart'][$prod_id]))
        {
            $_SESSION['cart'][$prod_id]=0;

        }
        $_SESSION['cart'][$prod_id]+= $quantity;
    }

    function RemoveFromCart($prod_id)
    {
         unset($_SESSION['cart'][$prod_id]);
    }
    function GetAllItemInCart()
    {
        $arr=[];
        if($_SESSION['cart']){
            foreach($_SESSION['cart'] as $prod_id =>$quantity)
            {
                $data = sql_select("select * from products where prod_id = $prod_id");
                $prod_data = $data[0];
                $prod_data['quantity']=$quantity;
                $arr[] = $prod_data;
            }
        }
        return $arr;
    }

    function buyCart()
    {
        if(empty($_SESSION['cart'])) return false;
        $ord_id = sql_insert("insert into orders (user_id,date,status)
        values({$_SESSION['user']['user_id']},now(),0)");
        foreach($_SESSION['cart'] as $prod_id => $quantity)
        {
            //echo "insert into order_detail(prod_id,orders_id,quantity)
            //values($prod_id , $ord_id , $quantity)";
            sql_insert("insert into order_detail(prod_id,orders_id,quantity)
            values($prod_id , $ord_id , $quantity)");

            sql_update("update product set stock = stock - $quantity where prod_id = $prod_id");
        }
        unset($_SESSION['cart']);

        return $ord_id;
    }

    function confirmCart($ord_id)
    {
        sql_update("update orders set status = 1 where orders_id = $ord_id");
    }



 ?>
