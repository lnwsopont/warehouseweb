<?php loadView('global/header');


?>


<?php if(empty($list)){  ?>

                           <tr>No Product In Cart</tr>

<?php } else { ?>

<div>

<img src="img/banner2.jpg"></img>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product code</th>
                                <th>Product scale</th>
                                <th>Product size</th>
                                <th>Product name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total Price</th>
                                <th>&nbsp;</th>
                            </tr>
                           </thead>

                        <tbody>
                        <?php foreach($list as $item) {?>
                        <form>
                            <tr>
                                <td>  <img style="height: 10%;" src="<?php echo $item['prod_img']; ?>"> </td>
                                <td> <?php echo $item['prod_id']; ?></td>
                                <td> <?php echo $item['prod_scale']; ?></td>
                                <td> <?php echo $item['prod_size']; ?></td>
                                <td> <?php echo $item['prod_name']; ?></td>
                                <td> <?php echo $item['quantity']; ?></td>
                                <td> <?php echo $item['prod_price'];?></td>
                                <td> <?php echo $item['prod_price'] * $item['quantity'] ;?></td>
                                <input type="hidden" name="prod_id" value="<?php echo $item['prod_id']; ?>">
                                <td><input type="submit" name="remove" value="Remove this item"/></td>
                        </form>
                            </tr>
                            <?php } ?>
                            <form>
                            <tr>
                                <td colspan="8" style="text-align: right;">
                                Delivery Method:
                                 <input type="radio" id="rad1" name="delivery" value="30" style="-webkit-clip-path:none;clip-path:none;position:relative;height:auto;width:auto;">Registration Post<br>
                                <input type="radio" id="rad2" name="delivery" value="50" style="-webkit-clip-path:none;clip-path:none;position:relative;height:auto;width:auto;" checked>EMS<br>
                                 </td>
                            </tr>
                            <tr>

                                <td colspan="8" style="text-align: right;">
                                    <h4>Grand Total (Tax Included): <?php echo $grand_total; ?></h4>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="8" style="text-align: right;">
                                    <button type="submit" name="act" value="cancel">Cancel Order</button>
                                    <button type="submit" name="act" value="order">Submit Order</button>
                                </td>
                            </tr>
                           </form>
                        </tbody>
                    </table>


<br/>

</div>

<?php } ?>


<?php loadView('global/footer'); ?>
