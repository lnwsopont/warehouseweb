<? View::display('employee/header',[]); ?>
    <body>
        
        <div class ="container">
            
            <div class ="row">
                <div class="col s12">
                    <h1>Edit Employee</h1>
                </div>
           
            </div>
            
            <div class ="row">
                <div class="col s12">
                    <table>
                        <thead>
                            <td> <? echo "Employee ID"?></td>
                             <td><? echo "First Name"?> </td>
                            <td> <? echo "Last Name"?> </td>
                            <td><? echo "Status" ?></td>
                            <td><? echo "Tel"?></td>
                        </thead>
                  <? foreach($emp as $emps): ?>
                        <tr>
                            <td><? echo $emps['emp_id']?></td>
                            <td><? echo $emps['emp_fname']?></td>
                            <td><? echo $emps['emp_lname']?></td>
                            <? if($emps['emp_status'] == 1)
                            {?>
                               <td><? echo "Active";?> </td>
                            <? }
                            else{?>
                                 <td><? echo "Active";?> </td>
                            <?}?>
                           
                            <td><? echo $emps['emp_tel']?></td>
                        </tr>
                    
                    <? endforeach; ?>
                    </table>
                </div>
            </div>
            
            
        </div>
        
        
        
        
        
    </body>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


