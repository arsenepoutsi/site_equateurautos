<!doctype html>
<html class="no-js" lang="en">
	
	<?php include("include/head.php"); ?>

	<body>

		<!--Loader-->
		<div id="global-loader">
			<img src="assets/images/loader.svg" class="loader-img " alt="">
		</div>

		<!--Topbar-->
		<?php include("include/menu.php"); ?>
		<!-- Topbar -->

		<?php
	          if (isset($_GET['page']))
	          {
	              $page = $_GET['page'];
	          }else{
	              $page = "";
	          }

	          switch ($page) {
	                case 'home':
	                    include 'pages/home.php';
	                    break;
	                case 'contact':
	                    include 'pages/contact.php';
	                    break;

	                default:
	                    include 'pages/home.php';
	                    break;
	          }
	    ?>

		<!--Footer Section-->
		<?php include("include/footer.php"); ?>
		<!--Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>

		<!-- JQuery js-->
		<?php include("include/script.php"); ?>

	</body>
</html>