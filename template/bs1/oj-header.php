
<div id=subhead>

<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#"><h2><span class="red"><?php echo $OJ_NAME?></span></h2></a>
    </div>
    <div>
    <?php $ACTIVE="btn-warning";?>
        <ul class="nav navbar-nav">
            <li class="active"><a  class='btn'  href="<?php echo $OJ_HOME?>"><?php echo $MSG_HOME?></a></li>
            <li><a  class='btn <?php if ($url==$OJ_BBS.".php") echo " $ACTIVE";?>'  href="bbs.php"><?php echo $MSG_BBS?></a></li>
            <li><a  class='btn <?php if ($url=="problemset.php") echo " $ACTIVE";?>' href="problemset.php"><?php echo $MSG_PROBLEMS?></a></li>
            <li><a  class='btn <?php if ($url=="status.php") echo "  $ACTIVE";?>' href="status.php"><?php echo $MSG_STATUS?></a></li>
            <li><a class='btn <?php if ($url=="ranklist.php") echo "  $ACTIVE";?>' href="ranklist.php"><?php echo $MSG_RANKLIST?></a></li>
            <li><a class='btn <?php if ($url=="contest.php") echo "  $ACTIVE";?>'  href="contest.php"><?php echo checkcontest($MSG_CONTEST)?></a></li>
            <li><a class='btn <?php if ($url=="recent-contest.php") echo " $ACTIVE";?>' href="recent-contest.php"><?php echo "$MSG_RECENT_CONTEST"?></a></li>
            <li><a class='btn <?php if ($url==(isset($OJ_FAQ_LINK)?$OJ_FAQ_LINK:"faqs.php")) echo " $ACTIVE";?>' href="<?php echo isset($OJ_FAQ_LINK)?$OJ_FAQ_LINK:"faqs.php"?>"><?php echo "$MSG_FAQ"?></a></li>
        	<?php if(isset($OJ_DICT)&&$OJ_DICT&&$OJ_LANG=="cn"){?>
					  
			<span div class='btn '  style="color:1a5cc8" id="dict_status"></span>
					  <script src="include/underlineTranslation.js" type="text/javascript"></script>
					  <script type="text/javascript">dictInit();</script>
			<?php }?>
		</ul>
    </div>
    </div>
</nav>
	  
<div id=profile >
<script src="include/profile.php?<?php echo rand();?>" ></script>
</div><!--end profile-->
</div><!--end subhead-->
<div id=broadcast class="container">
<marquee id=broadcast scrollamount=1 direction=up scrolldelay=250 onMouseOver='this.stop()' onMouseOut='this.start()';>
  <?php echo $view_marquee_msg; ?>
</marquee>
</div>
<br>

