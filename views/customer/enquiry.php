<html>
<head>
	<title>E n q u i r y</title>
	<link rel = "stylesheet" type="text/css" href="/whm/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<ul class="navigation">
	<li>
		<img src="/whm/Logo.jpg">
	</li>
	<li>
		<a href="home.php" class="menu">
			<i class = "fa fa-home" style="font-size: 40px;"></i>
			<p>HOME</p>
		</a>
	</li>
	<li>
		<a href="history.php" class="menu">
			<i class = "fa fa-history" style="font-size: 40px;"></i>
			<p>HISTORY</p>
		</a>
	</li>
	<li>
		<a href="product.php" class="menu">
			<i class = "fa fa-archive" style="font-size: 40px;"></i>
			<p>PRODUCT</p>
		</a>
	</li>
	<li>
		<a href="booking.php" class="menu">
			<i class = "fa fa-bookmark" style="font-size: 40px;"></i>
			<p>BOOKING</p>
		</a>
	</li>
	<li>
		<a href="enquiry.php" class="menu current">
			<i class = "fa fa-envelope" style="font-size: 40px;"></i>
			<p>MESSAGE(0)</p>
		</a>
	</li>
	<li>
		<a href="#" class="menu">
			<i class = "fa fa-sign-out" style="font-size: 40px;"></i>
			<p>LOGOUT</p>
		</a>
	</li>
</ul>

<div class="container">
	<div class="content">
		<h1>E N Q U I R Y</h1>
			<hr><br><br><br>
				<form action="#">
					<h3>Enquiry</h3>
					<input class="enq" type="text" name="enquiry"><br>
					<div class="enq">
						<button class="send" type="submit" value="Submit">Send</button>
					<br><br>
				</div>
				</form><br><br>
				<ul>
					<? foreach ($messages as $message): ?>
                    <? if ($message['emp_id'] == 0): ?>
                        <li class="collection-item ">
                            <span class="title"><?= $_SESSION['user']['cus_fname'] ?></span> 
                            <span style="color: #aaa; font-size: 10px;"><?= $message['sent_datetime'] ?></span>
                            <p>
                                <?= str_replace("\n", "<br/>", $message['msg']) ?>

                            </p>
                        </li>
                    <? else: ?>
                        <li class="collection-item <?= $message["status"] == 2 ? "indigo lighten-4" : "" ?>" style="text-align: right;">
                            <span style="color: #aaa; font-size: 10px;"><?= $message['sent_datetime'] ?></span>
                            <span class="title">MUIC Warehouse Co.ltd</span> 
                            <p>
                                <?= str_replace("\n", "<br/>", $message['msg']) ?>                                
                            </p>
                        </li>
                    <? endif; ?>
                <? endforeach; ?>
				</ul>
				<!--<form action="#">
					<div class="row">
						<div class="col s10">
							<div class="row">
								<div class="input-field col s12">
									<textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
									<label for="textarea1">Equiry</label>
								</div>
							</div>
						</div>
						<div class="col s2">
							<button class="btn waves-effect waves-light" type="submit" name="action" style="margin-top: 40px;">Send</button>
						</div>
					</div>
				</form>
				
				<ul class="collection">
                        <li class="collection-item ">
                            <span class="title">Bean</span> 
                            <span style="color: #aaa; font-size: 10px;">2017-11-29 10:28:14</span>
                            <p>
                                hi
							<br>
                            </p>
                        </li>
                        <li class="collection-item " style="text-align: right;">
                            <span style="color: #aaa; font-size: 10px;">2017-11-29 10:26:17</span>
                            <span class="title">MUIC Warehouse Co.ltd</span> 
                            <p>
                                hi test                                
                            </p>
                        </li>
                        <li class="collection-item " style="text-align: right;">
                            <span style="color: #aaa; font-size: 10px;">2017-11-29 05:12:10</span>
                            <span class="title">MUIC Warehouse Co.ltd</span> 
                            <p>
                                yoooooooo                                
                            </p>
                        </li>
                        <li class="collection-item ">
                            <span class="title">Bean</span> 
                            <span style="color: #aaa; font-size: 10px;">2017-11-22 13:59:58</span>
                            <p>
                                hi
                            </p>
                        </li>
                        <li class="collection-item ">
                            <span class="title">Bean</span> 
                            <span style="color: #aaa; font-size: 10px;">2017-11-20 16:17:56</span>
                            <p>
                                ghgfhfghgf
                            </p>
                        </li>
                        <li class="collection-item " style="text-align: right;">
                            <span style="color: #aaa; font-size: 10px;">2017-11-17 14:42:29</span>
                            <span class="title">MUIC Warehouse Co.ltd</span> 
                            <p>
                                hahhahaha                                
                            </p>
                        </li>
                        <li class="collection-item " style="text-align: right;">
                            <span style="color: #aaa; font-size: 10px;">2017-11-17 00:00:00</span>
                            <span class="title">MUIC Warehouse Co.ltd</span> 
                            <p>
                                hey sup                                
                            </p>
                        </li>
                         <li class="collection-item ">
                            <span class="title">Bean</span> 
                            <span style="color: #aaa; font-size: 10px;">2017-11-16 00:00:00</span>
                            <p>
                                i have a question!
                            </p>
                        </li>
                </ul>-->
			<br><br><br><br><br><hr>
		<footer>
				<div class="container-left">
					<h2>MUIC Warehouse Project</h2>
					<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your safety is our highest priority. We commit to provide the lowest fares with our ‘Price Beat Guarantee’. 
					Our team are always here to help, 24 hours a day, 7 days a week. 
					We’ll let you know your choices if your flight is changed before you travel and and keep you updated and provide options if things don’t go to plan on the day. 
					You will get what you paid for and you can have confidence in how quickly we will respond to an issue. We share your passion for protecting our environment. 
					We commit to the privacy of your personal information..</p><br>
				</div>
				<div class="container-right">
					<h2>Contact Us:</h2>
					<p><i class = "fa fa-map-marker" style="font-size: 30px;"></i>&nbsp;&nbsp;&nbsp;&nbsp; Bangkok, Thailand</p>
					<p><i class = "fa fa-phone" style="font-size: 30px;"></i>&nbsp;&nbsp;&nbsp; Phone: (+66)2-123-4567</p>
					<p><i class = "fa fa-envelope" style="font-size: 30px;"></i>&nbsp;&nbsp; Email: name.example@mail.com</p>
					<br>
				</div>
			</footer>	
	</div>
</div>
</body>
</html>