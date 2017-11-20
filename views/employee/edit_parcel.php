<? View::display('employee/header', []); ?>
<body>

    <div class ="container">

        <div class ="row">
            <div class="col s12">
                <h1>Edit Parcel</h1>
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
                    <? foreach ($parcel as $parcel): ?>
                        <li class="collection-item avatar">
                            <img src="images/yuna.jpg" alt="" class="circle">  
                            <p>
                                ID: <? echo $parcel['parcel_id'] ?><br> 
                                <? if ($parcel['parcel_status'] == 0) { ?> 
                                    <? echo " Waiting for parcel";
                                } 
                                elseif ($parcel['parcel_status'] == 1) {?>
                                    <? echo "Status: Checking Into Shelf: " . $parcel['shelf_code'];} 
                                elseif ($parcel['parcel_status'] == 2) {?> 
                                    <? echo " Status: In-Shelf: " . $parcel['shelf_code'];
                                } else {?>
                                    <? echo"Status: Checked Out";
                                        }?>
                                <br>Customer ID: <? echo $parcel['cus_id']; ?><br>
                                Customer ID: <? echo $parcel['cus_id']; ?><br>
                                Parcel In Date: <? echo $parcel['parcel_indate']; ?><br>
                                Employee in(ID): <? echo $parcel['emp_id_in']; ?><br>
                            </p>

<? endforeach; ?>

                        </div>



                        </div>





                        </body>

















