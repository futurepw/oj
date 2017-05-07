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

	<?php require_once("contest-header.php");?>

<div  class="container">
<script src="include/sortTable.js"></script>

    <div>
	<h3>Contest<?php echo $view_cid?> - <?php echo $view_title ?></h3>
					
						<p><?php echo $view_description?></p>
						<br>Start Time: <font color=#993399><?php echo $view_start_time?></font>
			End Time: <font color=#993399><?php echo $view_end_time?></font><br>
			Current Time: <font color=#993399><span id=nowdate > <?php echo date("Y-m-d H:i:s")?></span></font>
			Status:<?php
				if ($now>$end_time) 
					echo "<span class=red>Ended</span>";
				else if ($now<$start_time) 
					echo "<span class=red>Not Started</span>";
				else 
					echo "<span class=red>Running</span>";
			?>&nbsp;&nbsp;
			<?php
				if ($view_private=='0') 
					echo "<span class=blue>Public</font>";
				else 
					echo "&nbsp;&nbsp;<span class=red>Private</font>"; 
			?>
				<br>
				[<a href='status.php?cid=<?php echo $view_cid?>'>Status</a>]
				[<a href='contestrank.php?cid=<?php echo $view_cid?>'>Standing</a>]
				[<a href='conteststatistics.php?cid=<?php echo $view_cid?>'>Statistics</a>]
	</div>
</div>
<br>
<div  class="container">
		<table class="table table-hover" width='95%'>
			<thead>	
			<tr>
				<td><A><?php echo $MSG_PROBLEM_ID?></A></td>
				<td><?php echo $MSG_TITLE?></td>
				<td><?php echo $MSG_SOURCE?></td>
				<td><A><?php echo $MSG_AC?></A></td>
				<td><A><?php echo $MSG_SUBMIT?></A></td>
			</tr>
			</thead>
			<tbody>
				<?php 
				$cnt=0;
				foreach($view_problemset as $row){
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

	<?php require_once("oj-footer.php");?>


</div><!--end main-->

</body>
<script>
var diff=new Date("<?php echo date("Y/m/d H:i:s")?>").getTime()-new Date().getTime();
//alert(diff);
function clock()
    {
      var x,h,m,s,n,xingqi,y,mon,d;
      var x = new Date(new Date().getTime()+diff);
      y = x.getYear()+1900;
      if (y>3000) y-=1900;
      mon = x.getMonth()+1;
      d = x.getDate();
      xingqi = x.getDay();
      h=x.getHours();
      m=x.getMinutes();
      s=x.getSeconds();
  
      n=y+"-"+mon+"-"+d+" "+(h>=10?h:"0"+h)+":"+(m>=10?m:"0"+m)+":"+(s>=10?s:"0"+s);
      //alert(n);
      document.getElementById('nowdate').innerHTML=n;
      setTimeout("clock()",1000);
    } 
    clock();
</script>

</html>
