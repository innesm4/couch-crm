<div class="page-header">
	<h2>Client list (<span id="post_count"><?php echo $post_count; ?></span>) <code>Signed in</code></h2>
		<?php if ($is_current_user) { ?>
		<?php } ?>
	<a href="<?php echo $this->make_route('/create/' . User::current_user()) ?>"> <button class="btn">Create a New Client</button></a>
	<br/>
	<br/>
</div>
<div class="container">  
        <?php include('_posts.php'); ?>
</div>
<!--  Load more if a limit is required
<div id="load_more" >
	<a id="more_posts" href="#">Load More...</a>
</div>
-->