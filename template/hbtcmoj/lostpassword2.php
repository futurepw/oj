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
        <form action=lostpassword2.php method=post>
        <center>
        <table width=400 algin=center>
          <tr><td width=200><?php echo $MSG_USER_ID?>:<td width=200><input name="user_id" type="text" size=20></td></tr>
          <tr><td>注册邮箱中收取到的验证码:<td><input name="lost_key" type="text" size=20>*验证通过后会成为新的初始密码</td></tr>
        
        <?php if($OJ_VCODE){?>
                <tr><td><?php echo $MSG_VCODE?>:</td>
                        <td><input name="vcode" size=4 type=text><img alt="click to change" src=vcode.php onclick="this.src='vcode.php#'+Math.random()">*</td>
                </tr>
                <?php }?>
        <tr><td><td><input name="submit" type="submit" size=10 value="Submit">
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

