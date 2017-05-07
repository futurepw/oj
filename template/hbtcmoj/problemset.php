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
	
<div id=main>
<script type="text/javascript" src="include/jquery-latest.js"></script> 
<script type="text/javascript" src="include/jquery.tablesorter.js"></script> 
<script type="text/javascript">
$(document).ready(function() 
    { 
        $("#problemset").tablesorter(); 
    } 
); 
</script>

<div align='center'>
<ul class="pagination pagination-sm" >
        <?php
    for ($i=1;$i<=$view_total_page;$i++){
		if ($i>1) echo '&nbsp;';
		if ($i==$page) echo "<li><span class=red>$i</span></li>";
		else echo "<li><a href='problemset.php?page=".$i."'>".$i."</a></li>";
	}
        ?>
</ul>
</div>
<div class="container">
<center>
  <table>
  <tr align='center' class='evenrow'><td width='5'></td>
			<td width='50%' colspan='1'>
				<form class="form-search navbar-form" action=problem.php>
					Problem ID<input class="form-control" type='text' name='id' size=5 style="height:24px" placeholder="ID">
                                  <button class="btn btn-primary" type='submit'  >Go</button></form>
			</td>
			<td width='50%' colspan='1'>
			<form class="form-search navbar-form">
				<input style="height:24px" type="text" name=search class="form-control">
				<button type="submit" class="btn btn-primary"><?php echo $MSG_SEARCH?></button>
			</form>
			</td></tr>
  </table>
					<table class="table table-hover" width='95%'>
  						<thead>
    					  <tr >
                            <th ></th>
                          	<th ><A><?php echo $MSG_PROBLEM_ID; ?></A></th>
                            <th ><?php echo $MSG_TITLE; ?></th>
                            <th ><?php echo $MSG_SOURCE; ?></th>
                            <th ><?php echo $MSG_AC; ?></th>
                            <th ><?php echo $MSG_SUBMIT; ?></th>
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
</center>
</div>

	<?php require_once("oj-footer.php");?>

</div><!--end main-->
</div><!--end wrapper-->
</body>
</html>
