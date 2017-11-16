<form>
    <table style="width:100%" border=1 border-space=0>
        <tr>
            <td></td>
            <td>Parcel ID</td>
            <td>Parcel Description</td>
            <td>Shelf Number</td>
            <td>Parcel checkin Date</td>
            <td>Booking Number</td> 
            <td>Booking Date</td>
        </tr>
<?php
foreach($parcel as $x)
{?>
    <tr>
        <td><input type="checkbox" name="parcel" value=<?$x['parcel_id']?>>
        <td><?echo $x['parcel_id'];?></td>
        <td><?echo $x['parcel_des'];?></td>
        <td><?echo $x['shelf_code'];?></td>
        <td><?echo $x['parcel_indate'];?></td>
        <td><?echo $x['booking_code'];?></td>
        <td><?echo $x['booking_date'];?></td>
    </tr>

    
<?}?>
 </table>
    <input type="submit" value="Check Out">
</form>



