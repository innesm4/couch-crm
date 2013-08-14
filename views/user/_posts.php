<link rel="stylesheet" href="http://cdn.ihwy.net/ihwy-com/labs/jquery-listnav/2.1/jquery.listnav-2.1.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" src="http://cdn.ihwy.net/ihwy-com/assets/js/lib/jquery-1.3.2.min.js" charset="utf-8"></script>
<script type="text/javascript" src="http://cdn.ihwy.net/ihwy-com/labs/jquery-listnav/2.1/jquery.listnav-2.1.js" charset="utf-8"></script>


<script type="text/javascript" charset="utf-8">
	$(function(){
		if(top.location.href.toLowerCase() == self.location.href.toLowerCase()) $('#docLink').show();


		$('#aznav').listnav();

		});
</script>
<form>

	
<div class="row-fluid">
	<div id="aznav-nav" class="listNav offset3 span8"></div>
</div><!--/span-->

<ul id="aznav">
<?php foreach ($posts as $post): ?>
	<?php if ($is_current_user) { ?>
	<li><div class="well">
	<div class="row-fluid">
		<h2><?php echo $post->clientname; ?></h2>
	</div><!--/span-->
	<div class="row-fluid">
		<div class="span3">
			<p>Main Contact: <strong class="clienttext"><?php echo $post->maincontact; ?></strong></p>
			<p>Contact email: <strong class="clienttext"><a href="mailto:<?php echo $post->contactemail; ?>"><?php echo $post->contactemail; ?></a></strong></p>
		</div>
		<div class="span3">
			<p>Contact Tel: <strong class="clienttext"><a href="tel:<?php echo $post->contacttel; ?>"><?php echo $post->contacttel; ?></a></strong></p>
			<p>Alternative Contact: <strong class="clienttext"><?php echo $post->altcontact; ?></strong></p>
		</div>
		<div class="span3">
			<p>CMS system: <strong class="clienttext"><?php echo $post->cms; ?></strong></p>
			<p>CMS version: <strong class="clienttext"><?php echo $post->cmsversion; ?></strong></p>
		</div>
		<div class="span3">
			<p>Contract Start Date: <strong class="clienttext"><?php echo $post->startdate; ?></strong></p>
			<p>Retainer Hours: <strong class="clienttext"><?php echo $post->hours; ?></strong></p>
		</div>
	</div><!--/span-->	

	<div class="row-fluid">
		<a href="<?php echo $this->make_route('/user/' . User::current_user() . '/posts/' . $post->_id) ?>" class="btn btn-small">Edit</a>
		<a href="<?php echo $this->make_route('/post/delete/' . $post->_id . '/' . $post->_rev)?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-inverse btn-small">Delete</a>
	</div><!--/span-->	 
	</div></li>
	<?php } ?>
<?php endforeach; ?>

</ul>

</form>