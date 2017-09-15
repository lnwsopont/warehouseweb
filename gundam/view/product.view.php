<?php loadView('global/header'); ?>
<?php print_r($_SESSION['cart']) ?>
<form>
    <input type="text" name="search" value="<?php echo $searchstring;?>">
    <select name="scale">
        <option value="ANY">ANY</option>
      <option value="PG">PG</option>
      <option value="MG">MG</option>
      <option value="HG">HG</option>
      <option value="SD">SD</option>
    </select>
    <input type="submit" name="act" value="search">


</form>
<?php if(empty($products)) {?>
    NOT FOUND
<?php } ?>
<?php foreach($products as $product){ ?>

<div class="card small" style="display:inline-block;" id="gunpla-<?php echo $product['prod_id']; ?>">
    <div class="section">
        <mark class="tertiary"><?php echo $product['prod_scale']; ?></mark>
        <mark class="secondary"><?php echo $product['prod_size']; ?></mark>
        <h3 style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden; width: 100%" title="<?php echo $product['prod_name']; ?>"><?php echo $product['prod_name']; ?></h3>
    </div>
    <img class="section media" src="<?php echo $product['prod_img']; ?>">
    <div class="section">
        <p>price: <?php echo $product['prod_price']; ?></p>

    </div>
</div>

<div id="gunpla-<?php echo $product['prod_id']; ?>-modal" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; background: rgba(0,0,0,0.8); display: none; z-index: 100; border: 2px solid red;">
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <img class="section media" style="height: 80%;" src="<?php echo $product['prod_img']; ?>">
        </div>
        <div class="col-sm-6 col-md-3" style="background-color:	#D3D3D3;">
            <button id="gunpla-<?php echo $product['prod_id']; ?>-close">X</button>
            <p>Product ID:<?php echo $product['prod_id'];?></p>
            <p>Product Name:<?php echo $product['prod_name'];?></p>
            <p>Product Scale:<?php echo $product['prod_scale'];?></p>
            <p>Product Size:<?php echo $product['prod_size'];?></p>
            <BR>
            <p>Product Price:<?php echo $product['prod_price'];?></p>
            <form>
            <select name='quantity'>
            <?php //foreach( range(1, =min(10,$product['prod_stock'])) as $i ) { ?>>
            <?php for($i=1;$i<=min(10,$product['prod_stock']);$i++) { ?>
                <option value="<? echo $i ?>"><? echo $i ?></option>
            <? } ?>
            </select>
            <input type="hidden" name="prod_id" value=<? echo $product['prod_id']?>>

            <?php print "<TD><input type=submit name='act' value='add to cart'" . ($product['prod_stock'] == 0 ? "disabled='disabled'" : "" ) . ">"; ?>

            </form>
            <a href="review?prod_id=<?php echo $product['prod_id']; ?>">write your review</a>

        </div>
    </div>

</div>

<script>

    document.getElementById("gunpla-<?php echo $product['prod_id']; ?>").onclick = function(){
        document.getElementById("gunpla-<?php echo $product['prod_id']; ?>-modal").style.display = 'block'
    }

    document.getElementById("gunpla-<?php echo $product['prod_id']; ?>-close").onclick = function(){
    document.getElementById("gunpla-<?php echo $product['prod_id']; ?>-modal").style.display = 'none'
    }

</script>

<?php } ?>

<?php loadView('global/footer'); ?>
