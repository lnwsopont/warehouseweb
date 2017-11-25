<? View::display('header', ['notification'=>$notification]); ?>
<h2>CURRENT PARCEL</h2>
<table class="striped">
        <thead>
          <tr>
              <th>ID</th>
              <th>Booking Code</th>
              <th>Booking Date</th>
              <th>Description</th>
              <th>Check-in Date</th>
              <th>Current Cost (฿)</th>
          </tr>
        </thead>

        <tbody>
            <? foreach ($parcels as $parcel): ?>
          <tr>
            <td><?=$parcel['parcel_id']?></td>
            <td><?=$parcel['booking_code']?></td>
            <td><?=date("d M Y", strtotime($parcel['booking_date']))?></td>
            <td><?=$parcel['parcel_des']?></td>
            <? if(empty($parcel['parcel_indate'])){?>
            <td>Not checked in</td>
            <? } 
            else { ?>
            <td><?=date("d M Y", strtotime($parcel['parcel_indate']))?></td>
            <? } ?>
            <? if(empty($parcel['parcel_indate'])){?>
            <td>Not checked in</td>
            <? } 
            else { ?>
            <td><?=number_format(pricecalc($parcel['parcel_indate'],date('Y-m-d')))?></td>
            <? } ?>
            
          </tr>
          <? endforeach; ?>
        </tbody>
      </table>
            
<? View::display('footer'); ?>