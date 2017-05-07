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

	<?php require_once("oj-header.php");?>
<div class="container">
	<table class="table table-hover" width=95% align=center>
<thead>
	<tr>
		<th>OJ</th>
		<th>Name</th>
		<th>Start Time</th>
		<th>Week</th>
		<th>Access</th>
	</tr>
</thead>
<tbody>
<?php
$odd=true;
 foreach($rows as $row) {
   $odd=!$odd;
?>
  <tr>
		<td><?php echo$row['oj']; ?></td>
		<td><a id="name_<?php echo $row['id']; ?>" href="<?php echo $row['link']; ?>" target="_blank"><?php echo$row['name']; ?></a></td>
		<td><?php echo$row['start_time']; ?></td>
		<td><?php echo$row['week']; ?></td>
		<td><?php echo$row['access']; ?></td>
	</tr>
<?php } ?>
</tbody>
</table>
</div>
<div align=center>DataSource:http://contests.acmicpc.info/contests.json  Spider Author:<a href="http://contests.acmicpc.info" class="container">doraemonok</a></div>


	<?php require_once("oj-footer.php");?>


</div><!--end main-->

</body>
</html>
