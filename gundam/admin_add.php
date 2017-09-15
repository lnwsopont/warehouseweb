<?php
include 'lib/init.php';

loadView('global/admin');

$prod_id = $_GET['prod_id'];
$stock = $_GET['prod_stock'];
$submit = $_GET['submit'];

if(!empty($submit))
{
    echo"hello";
    $res = sql_select("select * from products where $prod_id = prod_id");
    if(!empty($res))
    {
        sql_update("update products set prod_stock = prod_stock + $stock where $prod_id = prod_id");
        echo"update complete";
    }
    else{
        echo"Incorrect product ID";
    }
}

 ?>

<form>
    Product ID:<input type="text" name="prod_id">

    Stock Add:<input type="text" name="prod_stock">


    <input type="submit" name="submit">

</form>



