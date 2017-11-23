<? View::display('employee/header', []); ?>
<body>

    <div class ="container">

        <div class ="row">
            <div class="col s12">
                <h1>Edit Customers</h1>
                <i class="ac_unit"></i>
            </div>

        </div>



        <div class="row">  
            <form class="input-field col s6">
                
                
                <input type="text" name="search" >
                <input type="submit" name="act" value="search">
            </form>
        </div>



        <div class ="row" id="cus-<? echo $cus['cus_id']; ?>">
            <div class="col s12">

                <ul class="collection">
                    <? foreach ($cus as $cus): ?>
                        <li class="collection-item">
                            <a href="/edit/customer/<?=$cus['cus_id']?>">
                            <p>
                                ID: <? echo $cus['cus_id'] ?><br>
                                Name: <? echo $cus['cus_fname'] ?> 
                                <? echo $cus['cus_lname'] ?><br>             
                                Tel:  <? echo $cus['cus_tel'] ?>    

                            </p>
                            </a>
                        </li>
                        <? endforeach; ?>
                </ul>
            </div>


        </div>



    </div>
</body>










