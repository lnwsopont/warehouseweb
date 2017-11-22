<? View::display('employee/header', []); ?>
<body>

    <div class ="container">

        <div class ="row">
            <div class="col s12">
                <h1>Parcel Check-out</h1>
            </div>

        </div>
        <? if ($cus_id): ?>
            <form action="/invoice" method="post">
                <div class ="row">
                    <div class="col s12">
                        <table>
                            <thead>
                            <td></td>
                            <td></td>
                            <td> <? echo "Parcel ID" ?></td>
                            <td><? echo "Parcel Description" ?> </td>
                            <td> <? echo "Customer ID" ?> </td>
                            <td><? echo "Shelf Code" ?></td>
                            <td><? echo "Parcel Indate" ?></td>
                            <td><? echo "Booking date" ?> </td>
                            </thead>
                            <? foreach ($parcel_all as $parcels): ?>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="filled-in" id="p-<?= $parcels['parcel_id'] ?>" name ="p[<?= $parcels['parcel_id'] ?>]" checked="checked" />
                                        <label for="p-<?= $parcels['parcel_id'] ?>"></label>
                                    </td>
                                    <td><input type="checkbox" name="parcel" value=<? $parcels['parcel_id'] ?>>
                                    <td><? echo $parcels['parcel_id'] ?></td>
                                    <td><? echo $parcels['parcel_des'] ?></td>
                                    <td><? echo $parcels['cus_id'] ?></td>
                                    <td><? echo $parcels['shelf_code'] ?> </td>
                                    <td><? echo $parcels['parcel_indate'] ?></td>
                                    <td><? echo $parcels['booking_date'] ?></td>
                                </tr>

                            <? endforeach; ?>
                        </table>
                    </div>
                </div>
                <div class ="row">
                    <div class="col s12">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Payment
                            <i class="material-icons right">send</i>
                        </button>

                    </div>

                </div>
            </form>
        <? else: ?>
            <form method="GET">
                <div class="input-field">
                    <input placeholder="Ex.101" id="cus_id" type="text" class="validate" name="cus_id">
                    <label for="cus_id">Customer ID</label>
                </div>
                <button class="btn waves-effect waves-light" type="submit">Search
                    <i class="material-icons right">send</i>
                </button>
            </form>
        <? endif; ?>
    </div>





</body>















</html>