	<div class="row">
		<div class="span4 offset4">
		<br/>
			<div class="well">
	        <legend>Sign up</legend>
	        <form id="registerHere" action="<?php echo $this->make_route('/signup') ?>" method="post">
		    <fieldset>
			<div class="control-group">
			    <label class="control-label" for="input01">Name</label>
			    <div class="controls">
			    
			    
			    
			    
			    <?php Bootstrap::make_input('full_name', 'Full Name', 'text'); ?>
			    </div>
		    </div>
	        <div class="control-group">
		    <label class="control-label" for="input01">Email</label>
		    	<div class="controls">
		         <?php Bootstrap::make_input('email', 'Email', 'email'); ?>
		         </div>
		     </div>
	         <div class="control-group">
		     <label class="control-label" for="input01">Username</label>
		     <div class="controls">    
			     <?php Bootstrap::make_input('username', 'Username', 'text'); ?>
			     </div>
			 </div>
			 <input type="hidden" class="input-large" id="company" name="company" value="deer">
			 <div class="control-group">
		     <label class="control-label" for="input01">Password</label>
		     <div class="controls">
	         <?php Bootstrap::make_input('password', 'Password', 'password'); ?>
		     </div>
		     </div>
		     <div class="control-group">
		     <label class="control-label" for="input01">Confirm Password</label>
		     <div class="controls">
	         <input type="password" class="input-large validate[required]" id="confirmpassword" name="confirmpassword">
		     </div>
		     </div>
		     
	         <div class="control-group">
			 <label class="control-label" for="input01"><!-- Comment to make valid HTML5 --></label>
			
	         <button class="btn ">Sign Up</button>
	 		 </div>
	 		 </fieldset>
	 		 </form>
	 		 </div>
	 	</div>
	 </div>