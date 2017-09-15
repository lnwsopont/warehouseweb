<?php loadView('global/header'); ?>



<div style=>

<img src="img/banner2.jpg"></img></br>
Please Upload money transfer slip image

<?php if($confirm_img){
    echo '<img src="' . $confirm_img . '"/>';
    } ?>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Order Date</th>
                                <th>Total Price</th>
                                <th>Detail</th>
                                <th>Status</th>
                                <th>Img Upload</th>
                            </tr>
                           </thead>

                        <tbody>
                        <?php foreach($order_list as $item) {?>
                         <form action="confirmation.php" method="post" enctype="multipart/form-data">
                            <tr>
                                <td><?php echo $item['orders_id'] ;?></td>
                                <td><?php echo $item['date'] ;?></td>
                                <td><?php echo get_total_price($item['orders_id']) ;?></td>
                                <td><a href="?order_id=<?php echo $item['orders_id']; ?>">view detail</a></td>
                                <td><?php
                                    if($item['status'] == 0){
                                        echo 'unpaid';
                                    }
                                    else if ($item['status'] == 1){
                                        echo 'paid';
                                    }
                                    else {
                                        echo"delivering";
                                    }

                                ?></td>
                                <td>
                                    <?php
                                    if($item['status'] == 0){ ?>
                                    <input type="hidden" name="order_id" value="<?php echo $item['orders_id'] ;?>">
                                    <input type="file" name="fileToUpload" id="fileToUpload<?php echo $item['orders_id'] ;?>">
                                    <label for="fileToUpload<?php echo $item['orders_id'] ;?>" class="button">Upload file</label>
                                    <input type="submit" value="Upload Image" name="submit">
                                    <? }
                                    else { ?>
                                    <button type="button" disabled>upload</button>
                                    <? } ?>
                                </td>

                            </tr>
                             </form>
                            <?php } ?>
                        </tbody>
                    </table>


<br/>

</div>



<?php loadView('global/footer'); ?>
