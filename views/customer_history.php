<? View::display('header'); ?>
<h2>HISTORY</h2>
<table class="striped">
        <thead>
          <tr>
              <th>ID</th>
              <th>Description</th>
              <th>Check-in Date</th>
              <th>Check-out Date</th>
              <th>Store Duration (Days)</th>
                <th>Total Cost (฿) </th>
          </tr>
        </thead>

        <tbody>
            <? foreach ($parcels as $parcel): ?>
          <tr>
            <td><?=$parcel['parcel_id']?></td>
            <td><?=$parcel['parcel_des']?></td>
            <td><?=date("d M Y", strtotime($parcel['parcel_indate']))?></td>
            <td><?=date("d M Y", strtotime($parcel['parcel_outdate']))?></td>
             <td><?=datediff($parcel['parcel_indate'],$parcel['parcel_outdate'])?></td>
             <td><?=pricecalc($parcel['parcel_indate'],$parcel['parcel_outdate'])?></td>
          </tr>
          <? endforeach; ?>
        </tbody>
      </table>
            
<? View::display('footer'); ?>