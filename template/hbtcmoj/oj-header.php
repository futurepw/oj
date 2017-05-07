
<nav class="navbar navbar-inverse" role="navigation">
    <?php $ACTIVE="active";?>
        <ul class="nav navbar-nav">
        	<li > <a href="<?php echo $OJ_HOME?>"><?php echo $OJ_NAME; ?></a></li>
            <li class='<?php if ($url==$$OJ_HOME.".php") echo "$ACTIVE";?>'> <a href="<?php echo $OJ_HOME?>"><?php echo $MSG_HOME; ?></a></li>
            <li class='<?php if ($url=="wordpress/index.php") echo "$ACTIVE";?>'> <a href=./wordpress/index.php"><?php echo $MSG_BBS; ?></a></li>
            <li class='<?php if ($url=="problemset.php") echo "$ACTIVE";?>'> <a href="problemset.php"><?php echo $MSG_PROBLEMS; ?></a></li>
            <li class='<?php if ($url=="status.php") echo "$ACTIVE";?>'> <a href="status.php"><?php echo $MSG_STATUS; ?></a></li>
            <li class='<?php if ($url=="ranklist.php") echo "$ACTIVE";?>'> <a href="ranklist.php"><?php echo $MSG_RANKLIST; ?></a></li>
            <li class='<?php if ($url=="contest.php") echo "$ACTIVE";?>'> <a href="contest.php"><?php echo checkcontest($MSG_CONTEST); ?></a></li>
            <li class='<?php if ($url=="recent-contest.php") echo "$ACTIVE";?>'> <a href="recent-contest.php"><?php echo "$MSG_RECENT_CONTEST"; ?></a></li>
            <li class='<?php if ($url==(isset($OJ_FAQ_LINK)?$OJ_FAQ_LINK:"faqs.php")) echo "$ACTIVE";?>'> <a href="<?php echo isset($OJ_FAQ_LINK)?$OJ_FAQ_LINK:"faqs.php";?>"><?php echo "$MSG_FAQ"; ?></a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
      		<li><div style="margin-top: 20px; margin-right: 20px;"><script src="include/profile.php?<?php echo rand();?>" ></script></div></li>
		    </ul>
        <?php if(isset($OJ_DICT)&&$OJ_DICT&&$OJ_LANG=="cn"){?>
                      <div class=menu_item >
                              <span style="color:1a5cc8" id="dict_status"></span>
                      </div>
                      <script src="include/underlineTranslation.js" type="text/javascript"></script>
                      <script type="text/javascript">dictInit();</script>
        <?php }?>
</nav>
<br>	  
<div style="height: 20px;">
<marquee><?php echo $view_marquee_msg; ?></marquee>
</div>
<br>
