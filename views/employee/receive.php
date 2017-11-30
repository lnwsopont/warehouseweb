<? View::display('employee/header',[]); ?>
    
<div style="margin-bottom: 200px;">
    <body>
        <div class="container">
            <!-- Page Content goes here -->

            <div class="row">
                <div class="input-field col s12">
                    <h1>Receive Parcel</h1>
                    <p>Please insert required fields *</p>
                    <? if (isset($error_msg)): ?>
                        <blockquote class="red-text"><?= $error_msg ?></blockquote>
                    <? endif; ?>
                    <? if (isset($parcel_id)): ?>
                        <blockquote class="green-text">
                            Parcel checked-in, <a href="/parcel/<?= $parcel_id ?>">click here</a> to view more detail 
                        </blockquote>
                    <? endif; ?>
                </div>
            </div>
            <form action="/parcel/receive" method="POST">
                <div class="row">
                    <div class="input-field col s6">

                        <input placeholder="ex. 2458" id="booking_code" type="text" class="validate" name="booking_code">
                        <label for="booking_code">Booking code *</label>

                    </div>

                    <div class="input-field col s6">

                        <input placeholder="ex. 1001" id="cus_id" type="text" class="validate" name="cus_id">
                        <label for="cus_id">Customer ID *</label>

                    </div>

                </div>
                <div class ="row">

                    <div class="col s6">

                        <? foreach ($shelfs as $shelf): ?>
                            <? if ($shelf["shelf_status"] == 1): ?>
                                <p style="border: 1px solid #ddd; background: #eee; margin: 5px; padding: 5px; opacity: 0.5; display: inline-block;">
                                    <input name="shelf_code" type="radio" id="shelf-code-<?= $shelf["shelf_code"] ?>" value="<?= $shelf["shelf_code"] ?>" disabled="disabled"/>
                                    <label for="shelf-code-<?= $shelf["shelf_code"] ?>"><?= $shelf["shelf_code"] ?></label>
                                </p>
                            <? else: ?>
                                <p style="border: 1px solid #64dd17; background: #b2ff59; margin: 5px; padding: 5px; display: inline-block;">
                                    <input name="shelf_code" type="radio" id="shelf-code-<?= $shelf["shelf_code"] ?>" value="<?= $shelf["shelf_code"] ?>" />
                                    <label for="shelf-code-<?= $shelf["shelf_code"] ?>"><?= $shelf["shelf_code"] ?></label>
                                </p>
                            <? endif; ?>
                        <? endforeach; ?>

                    </div>


                </div>
                <div class ="row">
                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Check-in
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>
    </div>

