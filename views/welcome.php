<div class="row">
	<div class="span6">
		<h2>Clients</h2>
		<p>Click to Create see existing clients.</p>
		<p><a href="<?php echo $this->make_route('/user/' . User::current_user()) ?>"  class="btn">My Clients</a></p>
	</div>
	
	<div class="span6">
		<h2>Create</h2>
		<p>Click to Create a new client.</p>
		<p><a class="btn" href="<?php echo $this->make_route('/create/' . User::current_user())  ?>">Create</a></p>
	</div>
</div>