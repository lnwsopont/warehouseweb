<h1><?= $parcel_id ?></h1>
<p>
    shelf: <?= $shelf ?>
</p>

<script src="/assets/qrcode.js"></script>

<div id="qrcode"></div>

<script>
    
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width: 100,
        height: 100
    });
    qrcode.makeCode('<?=$qr?>');

</script>