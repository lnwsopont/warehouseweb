<? View::display('employee/header',[]); ?>
    <body>
        
        <div class ="container">
            
            <div class ="row">
                <div class="col s12">
                    <h1>Edit Customers</h1>
                    <i class="ac_unit">hi</i>
                </div>
           
            </div>
             
           
            
            <div class ="row">
                <div class="col s12">
                    <table>
                        <thead>
                            <td> <? echo "Customer ID"?></td>
                             <td><? echo "First Name"?> </td>
                            <td> <? echo "Last Name"?> </td>
                            <td><? echo "Tel No" ?></td>
                            <td><? echo "E-mail"?></td>
                        </thead>
                  <? foreach($cus as $cus): ?>
                        <tr>
                            <td><? echo $cus['cus_id']?></td>
                            <td><? echo $cus['cus_fname']?></td>
                            <td><? echo $cus['cus_lname']?></td>
                            <td><? echo $cus['cus_tel']?></td>
                            <td><? echo $cus['cus_email']?></td>
                        </tr>
                    
                    <? endforeach; ?>
                    </table>
                </div>
            </div>
            
            
        </div>
        
        
        
        
        
    </body>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


