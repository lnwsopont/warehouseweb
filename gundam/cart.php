<?
include 'lib/init.php';
    $prod_id = $_GET['prod_id'];
    if(isset($_GET['remove']))
    {
        RemoveFromCart($prod_id);
    }
    if(isset ($_GET['act']) && $_GET['act']=='cancel')
    {
        unset($_SESSION['cart']);
    }

    if(isset ($_GET['act']) && $_GET['act']=='order')
    {
        $order_id = buyCart();
        loadView('cart_success',[
            'order_id' => $order_id
        ]);
        return;
    }

    $list = GetAllItemInCart();

    $gtotal = 0;
    foreach($list as $item){
        $gtotal += $item['prod_price'] * $item['quantity'];
    }

    /*$arr1 = array_map(function($item){
            return $item['prod_price'] * $item['quantity'];
    }, $list);

    $sum = array_reduce($arr1, function($x, $y){
            return $x + $y;
    });*/

    loadView('cart', [
        'list' => $list,
        'grand_total' => $gtotal+50
    ]);

?>
