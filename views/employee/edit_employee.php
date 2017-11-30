<? View::display('employee/header', []); ?>
<div style="margin-bottom: 150px;">

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



        <div class ="row" id="emp-<? echo $emp['emp_id']; ?>">
            <div class="col s12">



                <ul class="collection">
                    <? foreach ($emp as $emp): ?>
                        <li class="collection-item">
                            <a href="/edit/employee/<?= $emp['emp_id'] ?>">
                                <p>
                                    ID: <? echo $emp['emp_id'] ?><br>
                                    Name: <? echo $emp['emp_fname'] ?> 
                                    <? echo $emp['emp_lname'] ?><br>             
                                    Tel:  <? echo $emp['emp_tel'] ?>  <br>
                                    Status: <? if ($emp['emp_status'] == 1) {
                                        ?>
                                        <? echo "Active"; ?> <br>
                                    <? } else {
                                        ?>
                                        <? echo "In-Active"; ?> <br>
                                    <? } ?>

                                </p>
                            </a>
                        </li>
                    <? endforeach; ?>

            </div>



        </div>
</div>


















