<? View::display('employee/header',[]); ?>
    <body>
        
        <div class ="container">
            
            <div class ="row">
                <div class="col s12">
                    <h1>Parcel Check-out</h1>
                </div>
           
            </div>
            
            <div class ="row">
                <div class="col s12">
                    <table>
                        <thead>
                            <td></td>
                            <td> <? echo "Parcel ID"?></td>
                             <td><? echo "Parcel Description"?> </td>
                            <td> <? echo "Customer ID"?> </td>
                            <td><? echo "Shelf Code" ?></td>
                            <td><? echo "Parcel Indate"?></td>
                             <td><? echo "Booking date" ?> </td>
                        </thead>
                  <? foreach($parcel_all as $parcels): ?>
                        <tr>
                            <td><input type="checkbox" name="parcel" value=<?$parcels['parcel_id']?>>
                            <td><? echo $parcels['parcel_id']?></td>
                            <td><? echo $parcels['parcel_des']?></td>
                            <td><? echo $parcels['cus_id']?></td>
                            <td><? echo $parcels['shelf_code']?> </td>
                            <td><? echo $parcels['parcel_indate']?></td>
                             <td><? echo $parcels['booking_date']?></td>
                        </tr>
                    
                    <? endforeach; ?>
                    </table>
                </div>
            </div>
            
            
        </div>
        
        
        
        
        
    </body>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</html>