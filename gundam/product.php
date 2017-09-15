<?php
include 'lib/init.php';

if(isset ($_GET) && $_GET['act']=='search'&& $_GET['scale']=="ANY")
{
    $list = sql_select('SELECT * FROM `products` WHERE prod_name like "%'. $_GET['search'].'%"');
}
else if (isset ($_GET) && $_GET['act']=='search'){
    $list = sql_select('SELECT * FROM `products` WHERE prod_scale = "'. $_GET['scale'].'" and prod_name like "%'. $_GET['search'].'%"');
}
else{
    $list = sql_select('select * from products');
}

if(isset ($_GET) && $_GET['act']=='add to cart' && $_GET['quantity']>=1)
{
    AddToCart($_GET['prod_id'],$_GET['quantity']);
}

loadView('product', [
    'products' => $list
]);


?>


