<!DOCTYPE html>
<html lang = 'en'>
<head>
	<title>Send Free Text To All Network (Philippines)</title>
	<meta charset = 'utf-8'>
	<link href="images/favicon.png" rel="icon" type="image/x-icon" />
	<!-- CDN -->	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- end CDN -->
	
	<link rel = 'stylesheet' href = 'css/style.css'>
	<link rel = 'stylesheet' href = 'css/font-awesome.min.css'>
	<link rel = 'stylesheet' href = 'css/bootstrap.css'>
	<script src = "js/favicon.min.js"></script>


</head>
<body >


	<div id="fb-root"></div>
	&nbsp;&nbsp;<div class="fb-share-button" data-href="http://112.210.136.64/sms_gateway" data-layout="button_count"></div>&nbsp;&nbsp;
	<div class="fb-send" data-href="http://112.210.136.64/sms_gateway" data-colorscheme="dark"></div>&nbsp;&nbsp;
	<div class="tw">
	<a class="twitter-hashtag-button"
	  href="https://twitter.com/intent/tweet?button_hashtag=FreeTextPH&text=Try%20it%20today!%20Free%20Text%20to%20ALL%20Network%20!"
	  data-related="twitter">
	Tweet #FreeTextPH
	</a>
	</div>
	<script src="js/fbsdk.js"></script>

		<!-- Modal Message Sent-->
		<!-- Trigger a Modal <button type = "button" class="btn btn-primary" data-toggle = 'modal' data-target = "#msgalert">Open modal</button>-->
		<div class="modal fade " role="dialog" id = 'msgalert'>	
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header" id = "sf">
						<button type="button" class="close" data-dismiss = "modal">&times;</button>
						<h3 class="modal-title text-center" id = "salert">Sending Message...</h3>
					</div>
				</div>
			</div>			
		</div>
		<!-- End of Modal Message Sent-->

	<div class = "tab text-center"><h2>Philippine Time (GMT + 8:00)</h2>
		<p><h3 id = 'date'></h3><h4 id = 'time'></h4></p>
	</div>

	<div class="page-header">
	    <h3 class="lead text-center">Free Text to All Network( Smart,Globe,Sun,TM,Talk-n-Text etc.. )</h3>
	</div>
	
	<div class="form-group col-lg-6 col-sm-12 col-lg-offset-3">
	    <label for="number"><i class="fa fa-mobile fa-1x"></i>&nbsp;&nbsp;Phone Number</label>  <span id = 'palert'></span>
	    <input type="text" class="form-control" id="pnum" placeholder="09XXXXXXXXX">
	    <br />
	    <label for="message"><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;Message </label>
	    <textarea class="form-control" rows="5" id = 'msg' placeholder = 'Enter Message here..'></textarea>
		<br />
		<button type="submit" class="btn btn-default col-lg-6 col-lg-offset-3"  id = 'send' ><i class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;&nbsp;Send Message</button>
		
	</div>
	<!--Facebook Comment Box
	<div class="fb-comments" data-href="http://112.203.209.154/sms_gateway" data-width="100%" data-numposts="5" data-colorscheme="light" data-version="v2.3"></div>
	-->
		<footer><strong>Developed by : Orgen Corpuz&nbsp;&nbsp;
	~&nbsp;&nbsp;<div class="fb-follow" data-href="https://www.facebook.com/orgen.corpuz" data-colorscheme="light" data-layout="standard" data-show-faces="true"></div>
		</footer>

	<!-- Jscripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src = 'js/script.js'></script>

	<!-- Offline use only
	<script src = 'js/jquery-1.11.2.min.js'></script>
	<script src = 'js/bootstrap.js'></script>
	-->
	
</body>
</html>

