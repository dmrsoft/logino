<?php session_start(); 

require_once('./../lib/logino_functions.php');

$lang=load_translations();

?>

<!DOCTYPE html>

<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Logino">
	<meta name="keywords" content="Logino, Logino">
    <meta name="author" content="Author">	

	<link rel="apple-touch-icon" sizes="57x57" href="/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
	<link rel="manifest" href="/icons/manifest.json">
	<link rel='shortcut icon' type='image/x-icon' href='/icons/favicon.ico' />
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">	
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300" rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="./../css/bootstrap.min.css"> 
	<link href="./../css/font-awesome.css" rel="stylesheet">	
	<link rel="stylesheet" type="text/css" href="./../css/adm_style.css">	
	<link rel="stylesheet" type="text/css" href="./../css/jquery.flipcountdown.css" />
				
	<script type="text/javascript" src="./../js/admin_logino.js"></script>
	
	<title>LoginO</title>
	
</head>

<body>

 	<?php include_once('header.php'); ?>

	<div class="container">	
		<div class="row">		
			<div class="col-sm-3">
			</div>		
			<div class="col-sm-6 central-container">
				<a href="index.php"><img src="./../img/admin_login_imgage_2.png"></a>
				<div class="login"><span style="color: red; font-style: normal;">Login</span><span style="color: white">O</span></div>
				<br/>
				<form autocomplete="off" method="post" name="frmAdminLogIn" id="frmAdminLogIn" enctype="multipart/form-data">				
					<div id="alert_username" class="alert alert-warning" style="display: none;">					  
					</div>				
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="username" type="text" class="form-control" name="username" placeholder="<?php echo $lang->getTranslation('ENTER_USERNAME'); ?>">						
					</div>
					<br/>
					<div id="alert_password" class="alert alert-warning" style="display: none;">					  
					</div>					
					<div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					  <input id="password" type="password" class="form-control" name="password" placeholder="<?php echo $lang->getTranslation('ENTER_PASSWORD'); ?>">
					</div>
					<br/>
					<input type="hidden" name="err_msg1" id="err_msg1" value="<?php echo $lang->getTranslation('ERROR_NO_USERNAME_PROVIDED'); ?>">
					<input type="hidden" name="err_msg2" id="err_msg2" value="<?php echo $lang->getTranslation('ERROR_USERNAME_IS_TOO_SHORT'); ?>">
					<input type="hidden" name="err_msg3" id="err_msg3" value="<?php echo $lang->getTranslation('ERROR_NO_PASSWORD_PROVIDED'); ?>">
					
					<button type="submit" id="btnAdminLogin" name="btnAdminLogin" onclick="doAdminLogin(); return false;" class="btn btn-default log-in-btn"><?php echo $lang->getTranslation('LOGIN'); ?></button>
					<hr/>				
					  <div class="row">
						<div class="col-sm-6"><span class="pull-left"><a href="forgot_password.php"><?php echo $lang->getTranslation('FORGOT_PASSWORD'); ?></a></span></div>						
						<div class="col-sm-6"><span class="pull-right"><a href="signup.php"><?php echo $lang->getTranslation('SIGN_UP'); ?></a></span></div>
					  </div>					  
					<br/>					
				</form>
			</div>			
			<div class="col-sm-3">
			</div>						
		</div>
		
		<?php  echo toShowDigitalClocks(); ?>
						
	</div>	
			
    <?php include_once('footer.php'); ?>
	
	<script src="./../js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="./../js/jquery.flipcountdown.js"></script>
	<script type="text/javascript" src="./../js/bootstrap.min.js"></script>
	
	<script type="text/javascript">
	
		$(function(){
			$("#retroclockbox1").flipcountdown({
				size:"sm"
			});
		})
	
	</script>
 
</body>
</html>