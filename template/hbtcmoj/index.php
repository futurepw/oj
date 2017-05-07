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
	<script language="javascript" type="text/javascript" src="include/jquery-latest.js"></script>
    <script language="javascript" type="text/javascript" src="include/jquery.flot.js"></script>
    <script type="text/javascript">
$(function () {
    var d1 = [];
    var d2 = [];
    <?php 
       foreach($chart_data_all as $k=>$d){
    ?>
        d1.push([<?php echo $k?>, <?php echo $d?>]);
	<?php }?>
    <?php 
       foreach($chart_data_ac as $k=>$d){
    ?>
        d2.push([<?php echo $k?>, <?php echo $d?>]);
	<?php }?>
          //var d2 = [[0, 3], [4, 8], [8, 5], [9, 13]];

    // a null signifies separate line segments
    var d3 = [[0, 12], [7, 12], null, [7, 2.5], [12, 2.5]];
    
  $.plot($("#submission"), [ 
   {label:"<?php echo $MSG_SUBMIT?>",data:d1,lines: { show: true }},
    {label:"<?php echo $MSG_AC?>",data:d2,bars:{show:true}} ],{
   grid: {
backgroundColor: { colors: ["#fff", "#eee"] }
},   
        
            xaxis: {
              mode: "time",
                      max:(new Date()).getTime(),
              min:(new Date()).getTime()-100*24*3600*1000
            }
        });
});
      //alert((new Date()).getTime());
</script>
</head>
<body>
<body>

  <?php require_once("oj-header.php");?>
<div class="container">
  <center>
  <div id=submission style="width:600px;height:300px" ></div>
  </center>
  <?php echo $view_news?>

  <?php require_once("oj-footer.php");?>


</div><!--end main-->

</body>
</html>
