<?php
    $form = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $email_subject = "You got a new message form . $name .";
    $to = "mail adress here";
    $subject = $email_subject;
    $header .= 'From: ' . $form . "\r\n";
    $header .= 'Bcc: ' . $form . "\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $retval = mail ($to,$subject,$message,$header);

    if( $retval == true ) {
    echo "Message sent successfully...";
    }else {
    echo "Message could not be sent...";
    $errorMessage = error_get_last()['message'];
    echo $errorMessage;
    }
?>

	<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-lumen.min.css"> -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		<title>Company</title>
	</head>
	<body>

		<div class="container-fluid clearback">
			<div class="col-md-12 back">
				<h1 class="text-center">Coming soon.</h1>
			</div>
			<div class="col-md-12 text-center">
				<h3>Helping you express yourself authentically in life.</h3>
			</div>
			<div class="col-md-12 ">
				<div class="col-md-12 text-center">
					<!-- Large modal -->
					<button type="button" class="btn " data-toggle="modal" data-target=".bs-example-modal-lg">Drop Me a Line>>></button>
				</div>
				<div class="modal  bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="col-md-12">
								<div class="col-md-3"></div>
								<div class="col-md-6 mod">
									<div class="">
										<button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle cl"></i></span></button>
										<h4 class="modal-title text-center" id="gridSystemModalLabel">CONTACT US</h4>
									</div>


									<form method="post" action="">
									<div class="col-md-12">
										<div class="form-group">
											<label for="exampleInputName">Your Name (required)</label>
											<input type="text" class="form-control"  name="name" placeholder="Enter Your Name">
											
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Your Email (required)</label>
											<input type="Email" class="form-control" name="email" placeholder="Enter Your Email">
											
										</div>
										<div class="form-group">
											<label for="exampleInputTextarea">Your Message</label>
											<textarea class="form-control" placeholder="Enter Your Message" rows="4" name="message"></textarea>
										</div>
										
										<button type="submit" value="Send Email" class="btn btn-default">Send</button>
										
										</div>
									</form>
								</div>
								<div class="col-md-3"></div>
							</div>

						</div>
						<!-- <div class="col-md-12 overlay"></div> -->
					</div>
				</div>
			</div>
		</div>
		
		<script  src="js/jquery-3.3.1.min.js"></script>
		<script  src="js/bootstrap.min.js"></script>

<!-- 	<script type="text/javascript">

		function validateEmail(email) {
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(email);
		}

		function validate() {

			var $result = $("#result");
			var $res =$("#res");
			var email = $("#email").val();
			var login=$("#login").val();
			$result.text("");
			$res.text("");
			if (validateEmail(email) && login!="" ) {
				return true;
			}
			else if(login==""){
				$res.text("*Please give Your Name");
				$res.css("color", "red");
				return false;
			}
			else {
				$result.text("*Please give a valid Email address");
				$result.css("color", "red");
				return false;
			}
			
		}

		$("#validate").bind("click", validate);

	</script> -->


</body>
</html>
