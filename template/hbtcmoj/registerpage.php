
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
	<form action="register.php" method="post" class="form-search navbar-form">
	<br><br>
	<center><table>
		<tr><td colspan=2 height=40 width=500>&nbsp;&nbsp;&nbsp;<?php echo $MSG_REG_INFO?></td></tr>
		<tr><td width=25%><?php echo $MSG_USER_ID?>:</td>
			<td width=75%><input name="user_id" size=20 type=text class="form-control">*</td>
		</tr>
		<tr><td><?php echo $MSG_NICK?>:</td>
			<td><input name="nick" size=50 type=text class="form-control"></td>
		</tr>
		<tr><td><?php echo $MSG_PASSWORD?>:</td>
			<td><input name="password" size=20 type=password class="form-control">*</td>
		</tr>
		<tr><td><?php echo $MSG_REPEAT_PASSWORD?>:</td>
			<td><input name="rptpassword" size=20 type=password class="form-control">*</td>
		</tr>
		<tr><td><?php echo $MSG_SCHOOL?>:</td>
			<td><input name="school" size=30 type=text class="form-control"></td>
		</tr>
		<tr><td><?php echo $MSG_EMAIL?>:</td>
			<td><input name="email" size=30 type=text class="form-control"></td>
		</tr>
		<?php if($OJ_VCODE){?>
		<tr><td><?php echo $MSG_VCODE?>:</td>
			<td><input name="vcode" size=4 type=text class="form-control"><img alt="click to change" src="vcode.php" onclick="this.src='vcode.php?'+Math.random()">*</td>
		</tr>
		<?php }?>
		<tr><td></td>
			<td><input value="Submit" name="submit" type="submit" class="btn btn-default">
				&nbsp; &nbsp;
				<input value="Reset" name="reset" type="reset" class="btn btn-default"></td>
		</tr>
	</table></center>
	<br><br>
</form>

<div id=foot>
	<?php require_once("oj-footer.php");?>

</div><!--end foot-->
</div><!--end main-->
</div><!--end wrapper-->
</body>
</html>
