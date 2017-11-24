<? //View::display('header'); ?>
    <table width=50% align=center>
        <tr>
            <td>
                <style>
                    input[type=text], select {
                        width: 100%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                    }
                    input[type=password], select {
                        width: 100%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                    }
                    input[type=email], select {
                        width: 100%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                    }

                    input[type=date], select {
                        width: 100%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                    }

                    input[type=submit] {
                        width: 100%;
                        background-color: KHAKI;
                        color: black;
                        padding: 14px 20px;
                        margin: 8px 0;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                    }

                    input[type=submit]:hover {
                        background-color: #fff;
                    }

                    div {
                        border-radius: 5px;
                        background-color: LAVENDER;
                        padding: 20px;
                    }
                </style>
        <body>



            <div>
                <form action="/booking" method="post">


                    <header align=center>
                        <h1>Product Information</h1>
                    </header>

                    <br>
                    <label for="Parcel_type">Parcel Type</label><br>
                    <select id="Parcel_type" name="parcel_type">
                        <option value="not-fragile">Not-Fragile</option>
                        <option value="fragile">Fragile</option>

                    </select>
                    
                    <label for="pd">Parcel Description (more than 3 characters)</label><br>
                    <input type="text" id="pd" name="parcel_des" placeholder="PLease enter your parcel description"><br>

                    <input type="submit" value="Create Booking">

                </form>
                </tr>
                </td>
    </table>

</div>
    <? //View::display('footer'); ?>