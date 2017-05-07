<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
	<?php include("template/$OJ_TEMPLATE/css.php");?>     
  <?php include("template/$OJ_TEMPLATE/js.php");?> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
	<?php require_once("oj-header.php");?>
<div id=main>
	<form action="modify.php" method="post" class="form-search navbar-form">
	<br><br>
	<center>
	<table class="table table-hover">
		<tr><td colspan=2>&nbsp;&nbsp;&nbsp;Update Information</td></tr>
		<tr><td width=25%>User ID:</td>
			<td width=75%><?php echo $_SESSION['user_id']?><?php require_once('./include/set_post_key.php');?></td>
		</tr>
		<tr><td>Nick Name:</td>
			<td><input name="nick" size=50 type=text value="<?php echo htmlspecialchars($row->nick)?>" ></td>
		</tr>
		<tr><td>Old Password:</td>
			<td><input name="opassword" size=20 type=password></td>
		</tr>
		<tr><td>New Password:</td>
			<td><input name="npassword" size=20 type=password></td>
		</tr>
		<tr><td>Repeat New Password:</td>
			<td><input name="rptpassword" size=20 type=password></td>
		</tr>
		<tr><td>School:</td>
			<td><input name="school" size=30 type=text value="<?php echo htmlspecialchars($row->school)?>" ></td>
		</tr>
		<tr><td>Email:</td>
			<td><input name="email" size=30 type=text value="<?php echo htmlspecialchars($row->email)?>" ></td>
		</tr>
		<tr><td></td>
			<td><input value="Submit" name="submit" type="submit" class="btn btn-default">
				&nbsp; &nbsp;
				<input value="Reset" name="reset" type="reset" class="btn btn-default">
			</td>
		</tr>
	</table></center>
	<br>
	<a href=export_ac_code.php>Download All AC Source</a>
	<br>
<div id=foot>
	<?php require_once("oj-footer.php");?>

</div><!--end foot-->
</div><!--end main-->
</div><!--end wrapper-->
</body>
</html>
