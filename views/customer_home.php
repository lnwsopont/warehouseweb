<? View::display('header', ['notification'=>$notification]); ?>
<span style="font-size:20px ">Welcome Back..</span>
<h2><?= $user['cus_fname'] . " " . $user['cus_lname']; ?></h2>

<ul class="collection">
    <li class="collection-item">ID: <?= $user['cus_id']; ?></li>
      <li class="collection-item">Email: <?= $user['cus_email']; ?></li>
      <li class="collection-item">Tel: <?= $user['cus_tel']; ?></li>
    </ul>
<div class="row">
    <div class="col s6">
        <a href="/product">
            <div class="card light-blue lighten-4 black-text">
            <div class="card-content center">
                <span class="card-title">Current Parcel</span>
                <p style="font-size: 48px;"><?=$current_parcel; ?></p>
            </div>
            </div>
        </a>
    </div>

    <div class="col s6">
        <div class="card  light-green accent-2">
            <div class="card-content center">
                <span class="card-title">Past Parcel</span>
                <p style="font-size: 48px;"><?=$past_parcel; ?></p>
            </div>
        </div>
    </div>

    <div class="col s6">
        <div class="card yellow lighten-1">
            <div class="card-content center">
                <span class="card-title">Booking Parcel</span>
                <p style="font-size: 48px;"><?=$booking_parcel; ?></p>
            </div>
        </div>
    </div>
    <div class="col s6">
        <div class="card deep-orange accent-2">
            <div class="card-content center">
                <span class="card-title">Pending Fee</span>
                <p style="font-size: 48px;"><?= number_format($pending_fee); ?> ฿</p>
            </div>
        </div>
    </div>
</div>

<? View::display('footer'); ?>