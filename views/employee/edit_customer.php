<? View::display('employee/header', []); ?>
<body>

    <div class ="container">

        <div class ="row">
            <div class="col s12">
                <h1>Edit Customers</h1>
                <i class="ac_unit">hi</i>
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
                        <li class="collection-item avatar">
                            <img src="images/yuna.jpg" alt="" class="circle">  
                            <p>
                                ID: <? echo $cus['cus_id'] ?><br>
                                Name: <? echo $cus['cus_fname'] ?> 
                                <? echo $cus['cus_lname'] ?><br>             
                                Tel:  <? echo $cus['cus_tel'] ?>    

                            </p>

                        <? endforeach; ?>
                        </div>


                        </div>
                        <div id="gunpla-<?php echo $product['prod_id']; ?>-modal" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; background: rgba(0,0,0,0.8); display: none; z-index: 100; border: 2px solid red;">
                            <div class="row">
                                <div class="col-sm-6 col-md-3" style="background-color:	#D3D3D3;">
                                    <button id="cus-<?php echo $cus['cus_id']; ?>-close">X</button>
                                    <p>Customer ID:<?php echo $cus['cus_id']; ?></p>
                                    <p>Customer Name:<?php echo $cus['cus_fname']; ?></p>
                                    <?php echo $cus['cus_lname']; ?>
                                    <form>
                                        <select name='quantity'>

                                        </select>
                                    </form>
                                </div>


                            </div>
                            </body>


                            <script>

                                document.getElementById("cus-<?php echo $cus['cus_id']; ?>").onclick = function () {
                                    document.getElementById("gunpla-<?php echo $cus['cus_id']; ?>-modal").style.display = 'block'
                                }

                                document.getElementById("cus-<?php echo $cus['cus_id']; ?>-close").onclick = function () {
                                    document.getElementById("cus-<?php echo $cus['cus_id']; ?>-modal").style.display = 'none'
                                }

                            </script>














