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
	<table align=center width=95% >
		<tr>
			<td colspan=3 align=left>
				<form action=userinfo.php><?php echo $MSG_USER?><input name=user><input class="btn btn-primary" type='submit' value=Go></form>
			</td>
			<td colspan=3 align=right>
					<a href=ranklist.php?scope=d>Day</a>
					<a href=ranklist.php?scope=w>Week</a>
					<a href=ranklist.php?scope=m>Month</a>
					<a href=ranklist.php?scope=y>Year</a>
			</td>
		</tr>
	</table>
</div>
<div class="container">
	<table class="table table-hover" width='95%'>
		<thead>
		<tr>
				<td width='15%'><b><?php echo $MSG_Number; ?></b></td>
				<td width='15%'><b><?php echo $MSG_USER; ?></b></td>
				<td width='25%'><b><?php echo $MSG_NICK; ?></b></td>
				<td width='15%'><b><?php echo $MSG_AC; ?></b></td>
				<td width='15%'><b><?php echo $MSG_SUBMIT; ?></b></td>
				<td width='15%'><b><?php echo $MSG_RATIO; ?></b></td>
		</tr>
		</thead>
		<tbody>
			<?php 
			$cnt=0;
			foreach($view_rank as $row){
					echo "<tr>";
				foreach($row as $table_cell){
					echo "<td>";
					echo $table_cell;
					echo "</td>";
				}
				echo "</tr>";
				$cnt=1-$cnt;
			}
			?>
			</tbody>		
	</table>
	<?php 
	   echo "<center>";
		for($i = 0; $i <$view_total ; $i += $page_size) {
			echo "<a href='./ranklist.php?start=" . strval ( $i ).($scope?"&scope=$scope":"") . "'>";
			echo strval ( $i + 1 );
			echo "-";
			echo strval ( $i + $page_size );
			echo "</a>&nbsp;";
			if ($i % 250 == 200)
				echo "<br>";
		}
		echo "</center>";
	
	?>

	<?php require_once("oj-footer.php");?>


</div>

</body>
</html>
