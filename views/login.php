<div class="row">
	<div class="span4 offset4">
	<br/>
		<div class="well">
		<legend>Login</legend>
		<form id="loginHere" action="<?php echo $this->make_route('/login') ?>" method="post">
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="input01">Username</label>
					<div class="controls">    
					<?php Bootstrap::make_input('username', 'Username', 'text'); ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="input01">Password</label>
					<div class="controls">    
					<?php Bootstrap::make_input('password', 'Password', 'password'); ?>
					</div>
				</div>
				<button class="btn">Login</button>
			</fieldset>
		</form>
		</div>
	</div>
</div>