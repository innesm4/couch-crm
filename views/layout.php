<? date_default_timezone_set('Europe/London'); include('header.php'); ?>
  <body>    
  <div class="container">
    <? include('navigation.php'); ?>
    </div>
    <div class="container">
      <?php echo $this->display_alert('error'); ?>
    	<?php echo $this->display_alert('success'); ?>
      <?php include($this->content); ?>
    </div>
<? include('footer.php'); ?>  