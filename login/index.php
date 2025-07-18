<?php
include("config.php");
include('class/userClass.php');
$userClass = new userClass();

$errorMsgLogin = '';
/* Login Form */
if (!empty($_POST['loginSubmit'])) {
  $usernameEmail = $_POST['usernameEmail'];
  $password = $_POST['password'];
  if (strlen(trim($usernameEmail)) > 1 && strlen(trim($password)) > 1) {
    $uid = $userClass->userLogin($usernameEmail, $password);
    if ($uid) {
      $url = BASE_URL . '../app/';
      header("Location: $url"); // Page redirecting to home.php 
    } else {
      $errorMsgLogin = "Por favor, revise sus datos de registro.";
    }
  }
}
?>

<head>
  	<title>iconPlus Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Welcome to iconPlus Portal</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Sign in to your account</h3>
          <form method="post" action="" name="login" class="text-left form-validate">
            <div class="form-group">
		      			<input type="text" id="login-username" name="usernameEmail" class="form-control" placeholder="Username" required>
		      	</div>
             <div class="form-group">
	              <input id="password-field" type="password" id="login-password" name="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
            <div class="errorMsg"><?php echo $errorMsgLogin; ?></div>
            <div class="form-group text-center"><input type="submit" name="loginSubmit" value="Sign in" class="form-control btn btn-primary submit px-3">
              <!-- This should be submit button but I replaced it with <a> for demo purposes-->
            </div>
          </form>
          </div>
				</div>
			</div>
		</div>
	</section>
</body>