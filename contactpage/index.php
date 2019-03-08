<?php
	if(empty($_POST) === false)
	{
		$errors = array();

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$subject = $_POST['subject'];
		$query = $_POST['query'];

		//echo "Name: ", $name, " Email: ", $email, " Message: ", $message;

		if(empty($name) === true || empty($email) === true || empty($message) === true || empty($subject) === true || empty($query) === true)
		{
			$errors[] = 'All Fields are Required!';
			//print_r($errors);
		}
		else
		{
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
			{
				$errors[] = "That's not a valid email address.";
			}
			if(ctype_alpha($name) === false)
			{
				$errors[] = "Name must contain only letters.";
			}
		}

 	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
				<?php
					if(isset($_GET['sent']) === true)
					{
						echo "<p> Thanks for contacting us. </p>";
					}
					else
					{
						if(empty($errors) === false)
						{
							echo "<ul>";
							foreach ($errors as $error)
							{
								echo "<li>", $error, "</li>";
							}
							echo "</ul>";
						}
				?>
				<form class="contact100-form validate-form" method="post" action="submit.php">
					<span class="contact100-form-title">
						Get in touch
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder="Name" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email"
						autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Subject is required">
						<input class="input100" type="text" name="subject" placeholder="Subject"
						autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-cannabis"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="message" placeholder="Message"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Write No query if no queries">
						<textarea class="input100" name="query" placeholder="Write your query, if any"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
						<input type="submit" name="submitbtn" class="contact100-form-btn"
						value="Send">
					</div>
				</form>
			<?php } ?>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
