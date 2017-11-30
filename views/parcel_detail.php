<? View::display('employee/header', []); ?>
<div style="margin-bottom: 150px;">
<h1>Parcel QR Code</h1>
<style>
img {
    display: block;
    margin: 0 auto;
}
</style>
<div style="text-align:center;">
    <div><h3>Product ID:<?= $parcel_id ?></h3></div>
      <div class="col s6"><h3>Shelf: <?= $shelf ?></h3></div><br><br>
      <div class="col s12" id="qrcode" style="width:100%">
          <script src="/assets/qrcode.js"></script>

            <script>
    
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width: 300,
        height: 300
    });
    qrcode.makeCode('<?=$qr?>');

            </script>
      </div>
      
    </div>
</div>

