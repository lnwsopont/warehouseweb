<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

        <title>Editable Invoice</title>

        <link rel='stylesheet' type='text/css' href='/assets/invoice/css/style.css' />
        <link rel='stylesheet' type='text/css' href='/assets/invoice/css/print.css' media="print" />
        <script type='text/javascript' src='/assets/invoice/js/jquery-1.3.2.min.js'></script>
        <script type='text/javascript' src='/assets/invoice/js/example.js'></script>

    </head>

    <body>

        <div id="page-wrap">

            <textarea id="header">INVOICE</textarea>

            <div id="identity">

                <textarea id="address">Mahidol University
Address: 999 Phuttamonthon 4 
Road, Salaya 73170

Phone: (02) 849 6000</textarea>

                <div id="logo">



                    <div id="logohelp">
                        <input id="imageloc" type="text" size="50" value="" /><br />
                        (max width: 540px, max height: 100px)
                    </div>
                    <img id="image" style="max-width: 540px; max-height: 100px;" src="/assets/images/mahidol.png" alt="logo " />
                </div>

            </div>

            <div style="clear:both"></div>

            <div id="customer">

                <textarea id="customer-title"><? echo $cus_info['cus_fname'] . " " . $cus_info['cus_lname'] ?></textarea>

                <table id="meta">
                    <tr>
                        <td class="meta-head">Invoice #</td>
                        <td><textarea><?= $order_id ?></textarea></td>
                    </tr>
                    <tr>

                        <td class="meta-head">Date</td>
                        <td><textarea id="date"><?= date("j F Y") ?></textarea></td>
                    </tr>


                </table>

            </div>

            <table id="items">

                <tr>
                    <th>#</th>
                    <th>Parcel Id</th>
                    <th>Description</th>
                    <th>Duration</th>
                    <th>Price</th>
                </tr>
                <? $i = 1; ?>
                <? foreach ($parcel_list as $parcel): ?>
                    <tr class="item-row">
                        <td class="item-name"><?= $i++ ?></td>   
                        <td class="item-name"><?= $parcel['parcel_id'] ?></td>
                        <td class="item-name"><?= $parcel['parcel_des'] ?></td>
                        <td class="item-name"><?= datediff($parcel['parcel_indate'], $parcel['parcel_outdate']) ?> days</td>
                        <td class="item-name"><?= pricecalc($parcel['parcel_indate'], $parcel['parcel_outdate']) ?></td>
                    </tr>

                <? endforeach; ?>
                <tr id="hiderow">
                    <td colspan="5"></td>
                </tr>

                
                <tr>

                    <td colspan="2" class="blank"> </td>
                    <td colspan="2" class="total-line">Subtotal</td>
                    <td class="total-value"><div id="total"><?=$total?></div></td>
                </tr>
                <tr>

                    <td colspan="2" class="blank"> </td>
                    <td colspan="2" class="total-line">Discount</td>
                    <td class="total-value"><div id="total">0</div></td>
                </tr>
                <tr>
                    <td colspan="2" class="blank"> </td>
                    <td colspan="2" class="total-line balance">Balance Due</td>
                    <td class="total-value balance"><div class="due"><?=$total?></div></td>
                </tr>

            </table>

            <div id="terms">
                <h5>Terms</h5>
                <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
            </div>

        </div>

    </body>

</html>