<? View::display('employee/header', []); ?>
<body>

    <div class ="container">

        <div class ="row">
            <div class="col s12">
                <h1>Edit Employee</h1>
            </div>

        </div>

        <div class="row">  
            <form class="input-field col s6">
                <input type="text" name="search" >
                <input type="submit" name="act" value="search">
            </form>
        </div>



        <div class ="row">

            <div class="col s12">
                
                <ul class="collection">
                    <? foreach ($emp as $emps): ?>
                    <li class="collection-item avatar">
                        <img src="images/yuna.jpg" alt="" class="circle">  
                        <p>
                           ID: <? echo $emps['emp_id'] ?><br>
                           Name: <? echo $emps['emp_fname'] ?> 
                           <? echo $emps['emp_lname'] ?><br>
                           Status: <? if ($emps['emp_status'] == 1) {
                                        ?>
                                        <? echo "Active"; ?> <br>
                                    <? } else {
                                        ?>
                                        <? echo "In-Active"; ?> <br>
                                    <? } ?>
                                        
                          Tel:  <? echo $emps['emp_tel'] ?>    
                           
                        </p>
                     
                            <? endforeach; ?>

                        </div>
                      


                        </div>





                        </body>

















