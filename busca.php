<?php require_once("./includes/config.php");?>	
<!DOCTYPE HTML>
	<!--[if IE 8]> <html class="ie8 no-js"> <![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<? require_once(APSBASE.'head.php');?>
</head>

<body>
<!-- begin container -->
<div id="wrap">
	<?php 
	/* begin header  */
		require_once(APSBASE.'header.php');
    /*  end header */
    /* begin content */
		require_once(APSBUSCA.'content.php');
	/* end content */
    /* begin footer */
		require_once(APSFOOTER.'container.php');
	/* end footer */ 
	?>
</div>
<!-- end container -->
</body>
</html>