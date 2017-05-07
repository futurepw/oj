<?php  
    require_once('./include/cache_start.php');
  
	require_once('./include/db_info.inc.php');
  if(isset($OJ_LANG)){
		require_once("./lang/$OJ_LANG.php");
	}
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php include("template/$OJ_TEMPLATE/css.php");?>     
  	<?php include("template/$OJ_TEMPLATE/js.php");?> 
</head>
<?php if(isset($_GET['cid']))
	$cid=intval($_GET['cid']);
if (isset($_GET['pid']))
	$pid=intval($_GET['pid']);
?>
<nav class="navbar navbar-inverse" role="navigation">
    	<?php $ACTIVE="active";?>
        <ul class="nav navbar-nav">
        	<li > <a href="<?php echo $OJ_HOME?>"><?php echo $OJ_NAME; ?></a></li>
            <li class='<?php if ($url==$$OJ_HOME.".php") echo "$ACTIVE";?>'> <a href="<?php echo $OJ_HOME?>"><?php echo $MSG_HOME; ?></a></li>
            <li class='<?php if ($url=="wordpress/index.php") echo "$ACTIVE";?>'> <a href=./wordpress/index.php"><?php echo $MSG_BBS?></a></li>
            <li class='<?php if ($url=='./contest.php?cid=<?php echo $cid?>') echo "$ACTIVE";?>'> <a href='./contest.php?cid=<?php echo $cid?>'><?php echo $MSG_PROBLEMS?></a></li>
            <li class='<?php if ($url=='./contestrank.php?cid=<?php echo $cid?>') echo "$ACTIVE";?>'> <a href='./contestrank.php?cid=<?php echo $cid?>'><?php echo $MSG_STANDING?></a></li>
            <li class='<?php if ($url=='./status.php?cid=<?php echo $cid?>') echo "$ACTIVE";?>'> <a href='./status.php?cid=<?php echo $cid?>'><?php echo $MSG_STATUS?></a></li>
            <li class='<?php if ($url=='./conteststatistics.php?cid=<?php echo $cid?>') echo "$ACTIVE";?>'> <a href='./conteststatistics.php?cid=<?php echo $cid?>'><?php echo $MSG_STATISTICS?></a></li>
		</ul>
</nav>
<?php 
$view_marquee_msg=file_get_contents($OJ_SAE?"saestor://web/msg.txt":"./admin/msg.txt");
   
?>
<div style="height: 20px;">
<marquee><?php echo $view_marquee_msg; ?></marquee>
</div>