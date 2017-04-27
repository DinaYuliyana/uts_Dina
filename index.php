<!DOCTYPE html>
<html>
<head>
<title>Dina Yuliyana</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo">
      <h1><a href="index.html">Dina Yuliyana</a></h1>
      <p>15.01.53.0157</p>
    </div>
  </header>
</div>
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <ul class="clear">
      <li class="active"><a href="?menu=home">Home</a></li>
      <li><a href="?menu=salatiga">Salatiga</a></li>
	  <li><a href="?menu=demak">Demak</a></li>
	  <li><a href="?menu=tembalang">Tembalang</a></li>
	</ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row6">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
    <?php
				error_reporting(0);
				if($_GET[menu]=='')
					{
					include('home.php');
					}
				else
					{
					include($_GET[menu].'.php');
					}
			?>
   </div>
  </div>
</div>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>