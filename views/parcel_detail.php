<? View::display('employee/header', []); ?>
<div style="margin-bottom: 150px;">
<h1>Parcel QR Code</h1>
<style>
img {
    display: block;
    margin: 0 auto;
}
</style>
<script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
	</script>

<div id='printMe'>
    <h4 align="center">Product ID: <b><?= $parcel_id ?></b></h4>
    <h4 align="center">Shelf: <b><?= $shelf ?></b></h4><br>
    <div class="col s12" id="qrcode" style="width:100%"; align="center">
          <script src="/assets/qrcode.js"></script>

            <script>
    
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width: 300,
        height: 300
    });
    qrcode.makeCode('<?=$qr?>');

            </script>
</div></div><br><br>
        <div align="center"><button class="waves-effect waves-light btn-large" onclick="printDiv('printMe')">Print QR Code</button></div>
</div>

