<?php require_once("./includes/config.php");?>	
<!DOCTYPE html>
<html class="csstransforms no-csstransforms3d csstransitions cufon-active cufon-ready" lang="en">
	<head>
		<? require_once(BASE.'head.php');?>
	</head>
	<body>
		<div id="bg-effect"> 
		  <? require_once(BASE.'header.php');?>
			<div class="container">
				<div class="row">
					<? require_once(NOTICIA.'homeslider_galerry.php');?>
				</div>	
			</div>			
			<? require_once(BASE.'footer.php');?>
		</div>
		<div style="display: none;" class="toparrow"><a href="#top" id="top_arrow"></a></div>
		<? require_once(BASE.'script.php');?>
	</body>
</html>