<?php
 $cache_time=90;
	$OJ_CACHE_SHARE=false;
	require_once('./include/cache_start.php');
    require_once('./include/db_info.inc.php');
	require_once('./include/setlang.php');
	$view_title= "Source Code";
   
require_once("./include/const.inc.php");
if (!isset($_GET['id'])){
	$view_errors= "No such code!\n";
	require("template/".$OJ_TEMPLATE."/error.php");
	exit(0);
}
$ok=false;
$id=strval(intval($_GET['id']));
$sql="SELECT * FROM `solution` WHERE `solution_id`='".$id."'";
$result=mysql_query($sql);
$row=mysql_fetch_object($result);
$slanguage=$row->language;
$sresult=$row->result;
$stime=$row->time;
$smemory=$row->memory;
$sproblem_id=$row->problem_id;
$view_user_id=$suser_id=$row->user_id;
mysql_free_result($result);


if (isset($OJ_AUTO_SHARE)&&$OJ_AUTO_SHARE&&isset($_SESSION['user_id'])){
	$sql="SELECT 1 FROM solution where 
			result=4 and problem_id=$sproblem_id and user_id='".$_SESSION['user_id']."'";
	$rrs=mysql_query($sql);
	$ok=(mysql_num_rows($rrs)>0);
	mysql_free_result($rrs);
}
$view_source="No source code available!";
if (isset($_SESSION['user_id'])&&$row && $row->user_id==$_SESSION['user_id']) $ok=true;
if (isset($_SESSION['source_browser'])) $ok=true;

		$sql="SELECT `source` FROM `source_code` WHERE `solution_id`=".$id;
		$result=mysql_query($sql);
		$row=mysql_fetch_object($result);
		if($row)
			$view_source=$row->source;

 if ($ok==true){
		$brush=strtolower($language_name[$slanguage]);
		if ($brush=='pascal') $brush='delphi';
		if ($brush=='obj-c') $brush='c';
		if ($brush=='freebasic') $brush='vb';
		ob_start();
		echo "/**************************************************************\n";
		echo "\tProblem: $sproblem_id\n\tUser: $suser_id\n";
		echo "\tLanguage: ".$language_name[$slanguage]."\n\tResult: ".$judge_result[$sresult]."\n";
		if ($sresult==4){
			echo "\tTime:".$stime." ms\n";
			echo "\tMemory:".$smemory." kb\n";
		}
		echo "****************************************************************/\n\n";
		$auth=ob_get_contents();
		ob_end_clean();

		echo (str_replace("\n\r","\n",$view_source))."\n".$auth;
		
	}else{
		
		echo "I am sorry, You could not view this code!";
	}
if(file_exists('./include/cache_end.php'))
	require_once('./include/cache_end.php');
?>

