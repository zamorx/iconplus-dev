<?php
require_once('../login/config.php');
require_once('../login/session.php');
//$userDetails = $userClass->userDetails($session_uid);

if (!isset($session_uid) || empty($session_uid)) {
  header("Location: ../login/index.php");
  exit();
}

if (!isset($userClass)) {
  require_once('../login/class/userClass.php');
  $userClass = new userClass();
}

$userDetails = $userClass->userDetails($session_uid);

if (!$userDetails) {
  header("Location: ../login/logout.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $userDetails->organizationname; ?> Portal</title>
    <link rel="stylesheet" href="Assets/css/modern.css">
    <script src="Assets/js/app.js"></script>
    <script src="Assets/js/settings.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
	
	
	<style>
		body {
			opacity: 0;
		}
	</style>
	<!-- END SETTINGS -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120946860-7');
</script>

</head>

<!-- Inicia el Body-->

<body>
    <div class="wrapper">

		<?php include 'includes/sidebar-nav.php'; ?>

		<div class="main">
			
		<?php include 'includes/mainbar-nav.php'; ?>