<?php require('Detection_Mobile/Mobile_Detect.php');?>
<?php require('lang/decide-lang.php');?>

<!DOCTYPE html>
<html> 	
		<head>
			<meta charset="utf-8" />
			<meta name="theme-color" content="#333">
			<meta name="msapplication-navbutton-color" content="#333">
			<meta name="apple-mobile-web-app-capable" content="yes">
			<meta name="apple-mobile-web-app-status-bar-style" content="#333">
			<title>Nicolas MAROLLE</title>
			<link rel="icon" type="image/x-icon" href="IMAGES/FAVICON/keyboard-key-n.png" />
			<link rel="stylesheet" href="style_main.css" />
			<link rel="stylesheet" href="style_menu_langue.css" />
			<link rel="stylesheet" href="CV/style_CV.css" />
			<link rel="stylesheet" href="NICOLAS/style_Nicolas.css" />
			<link rel="stylesheet" href="PRESENTATION/style_Presentation.css" />
			<link rel="stylesheet" href="INTER/style_Inter.css" />
			<link rel="stylesheet" href="LOADER/style_Loader.css" />
			<link rel="stylesheet" href="CONTACT/style_Contact.css" />
			<link rel="stylesheet" href="SKILLS/style_Skills.css" />
			<link rel="stylesheet" media="screen and (max-width: 768px)" href="HEADER/style_Header.css" />
			<link rel="stylesheet" media="screen and (max-width: 768px)" href="style_Loader_mobile.css" />
			<link rel="stylesheet" href="FOOTER/style_Footer.css" />			
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="JQUERY/Smooth_Scroll.js" type="text/javascript" ></script>

			<?php
				$detect = new Mobile_Detect();
				if ($detect->isMobile() || $detect->isMobileisTablet()) {
					echo '<link rel="stylesheet" href="style_menu_mobile_1.css" />';
					echo '<link rel="stylesheet" href="style_Header.css" />';
					echo '<link rel="stylesheet" href="style_Loader_mobile.css" />';
				}
				else {
					echo '<link rel="stylesheet" href="MENU/style_menu.css" />';
					echo '<link rel="stylesheet" href="style_scrollbar.css" />';
				}
			?>

		</head>
	<body>

			<?php include("LOADER/Loader.php"); ?>
			<?php include("HEADER/Header.php"); ?>
			<?php include("MENU/menu.php"); ?>
			<!--<?php include("menu_langue.php"); ?>-->
	<div class="Main">
						
			<?php include("NICOLAS/Nicolas.php"); ?>
			<?php include("PRESENTATION/Presentation.php"); ?>
			<?php include("SKILLS/Skills.php"); ?>
			<?php include("INTER/Inter.php"); ?>
			<?php include("CV/CV.php"); ?>
			<section class="MiseEnPage" id="FORMATION">
				<div class="POSITION">

				</div>
			</section>
			<section class="MiseEnPage" id="PORTEFOLIO">
				<div class="POSITION">

				</div>
			</section>
			<?php include("CONTACT/Contact.php"); ?>
			<?php include("FOOTER/Footer.php"); ?>
	</div>
	
	<script type="text/javascript" src="java.js"></script>
	</body>
</html>