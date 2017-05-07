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
	<center>
	<?php
	if($view_content)
	echo "<center>
	<table>
			<tr>
				<td class=blue>$to_user:".htmlspecialchars(str_replace("\n\r","\n",$view_title))." </td>
			</tr>
			<tr><td><pre>". htmlspecialchars(str_replace("\n\r","\n",$view_content))."</pre>		
				</td></tr>
    </table></center>";
	
	?>
   <table class="table table-hover">
    <form method=post action=mail.php class="form-inline">
	<tr>
	 <td>  To:<input class="form-control" name=to_user size=10 value="<?php echo $to_user?>">
			Title:<input class="form-control" name=title size=20 value="<?php echo $title?>">
		    <input class="btn btn-default" type=submit value=<?php echo $MSG_SUBMIT?>></td>
	</tr>
	<tr>
	 <td> 
		<textarea name=content rows=10 cols=80 class="input input-xxlarge"></textarea> 
	 </td>
	</tr>
	</form>
   </table>

   <table class="table table-hover">
   <tr>
   	<td>Mail ID<td>From:Title</td>
   	<td>Date</td>
   </tr>
   <tbody>
			<?php 
			$cnt=0;
			foreach($view_mail as $row){
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
</center> 
	 
<div id=foot>
	<?php require_once("oj-footer.php");?>

</div><!--end foot-->
</div><!--end main-->
</div><!--end wrapper-->
</body>
</html>
