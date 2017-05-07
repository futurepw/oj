<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $OJ_NAME?></title>  
    <?php include("template/$OJ_TEMPLATE/css.php");?>	    


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
    <?php include("template/$OJ_TEMPLATE/nav.php");?>	    
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
<h3 align='center'>
<?php
for ($i=1;$i<=$view_total_page;$i++){
if ($i>1) echo '&nbsp;';
if ($i==$page) echo "<span class=red>$i</span>";
else echo "<a href='problemset.php?page=".$i."'>".$i."</a>";
}
?>
</h3><center>
<table>
<tr align='center' class='evenrow'><td width='5'></td>
<td  colspan='1'>
<form class=form-inline action=problem.php>
<input class="form-control search-query" type='text' name='id'  placeholder="Problem ID">
<button class="form-control" type='submit' >Go</button></form>
</td>
<td  colspan='1'>
<form class="form-search form-inline">
<input type="text" name=search class="form-control search-query" placeholder="Keywords Title or Source">
<button type="submit" class="form-control"><?php echo $MSG_SEARCH?></button>
</form>
</td></tr>
</table>
<table id='problemset' width='90%'class='table table-striped'>
<thead>
<tr class='toprow'>
<th width='5'></th>
<th width='120' ><?php echo $MSG_PROBLEM_ID?></th>
<th><?php echo $MSG_TITLE?></th>
<th width='10%'><?php echo $MSG_SOURCE?></th>
<th style="cursor:hand" width=60 ><?php echo $MSG_AC?></th>
<th style="cursor:hand" width=60 ><?php echo $MSG_SUBMIT?></th>
</tr>
</thead>
<tbody>
<?php
$cnt=0;
foreach($view_problemset as $row){
if ($cnt)
echo "<tr class='oddrow'>";
else
echo "<tr class='evenrow'>";
foreach($row as $table_cell){
echo "<td>";
echo "\t".$table_cell;
echo "</td>";
}
echo "</tr>";
$cnt=1-$cnt;
}
?>
</tbody>
</table></center>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php include("template/$OJ_TEMPLATE/js.php");?>	    
  <script type="text/javascript" src="include/jquery.tablesorter.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$("#problemset").tablesorter();
}
);
</script>
</body>
</html>
