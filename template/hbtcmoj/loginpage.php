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
        <form action=login.php method=post class="form-search navbar-form">
        <center>
        <table width=480 algin=center>
        <tr><td width=240><?php echo $MSG_USER_ID?>:<td width=200><input style="height:24px" name="user_id" type="text" size=20 class="form-control"></tr>
        <tr><td><?php echo $MSG_PASSWORD?>:<td><input name="password" type="password" size=20 style="height:24px" class="form-control"></tr>
        <?php if($OJ_VCODE){?>
                <tr><td><?php echo $MSG_VCODE?>:</td>
                        <td><input name="vcode" size=4 type=text style="height:24px" class="form-control"><img alt="click to change" src=vcode.php onclick="this.src='vcode.php?'+Math.random()">*</td>
                </tr>
                <?php }?>
        <tr><td colspan=3><input name="submit" type="submit" size=10 class="btn btn-default" value="Submit"></td>
        <td><button type="button" class="btn btn-default"><a href="lostpassword.php">Lost Password</a></button></td>
</tr>
        </table>
        <center>
</form>

<div id=foot>
        <?php require_once("oj-footer.php");?>

</div><!--end foot-->
</div><!--end main-->
</div><!--end wrapper-->
</body>
</html>

