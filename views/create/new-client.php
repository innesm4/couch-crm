<div class="page-header">
	<h1>New Client</h1>
</div>
     <?php if ($is_current_user) { ?>
	 <div class="row">
	    <div class="span6 offset3 well">
		    <legend>Enter the client's details</legend>
		    <form  class="form-horizontal" id="eventHere"  action="<?php echo $this->make_route('/post')?>" method="post" enctype="multipart/form-data">
		        <fieldset>
		        
		        <div class="control-group">
				<label class="control-label" for="input01">Client Name:</label>
					<div class="controls">
						<input type="text" id="clientname" name="clientname" class="input-large" >
					</div>
				</div>
				
				 <div class="control-group">
				<label class="control-label" for="input01">Main Contact:</label>
					<div class="controls">
						<input type="text" id="maincontact" name="maincontact" class="input-large" >
					</div>
				</div>
				
				<div class="control-group">
				<label class="control-label" for="input01">Contact email:</label>
					<div class="controls">
						<input type="email" id="contactemail" name="contactemail" class="input-large" >
					</div>
				</div>
				
				<div class="control-group">
				<label class="control-label" for="input01">Contact Tel:</label>
					<div class="controls">
						<input type="number" id="contacttel" name="contacttel" class="input-large" >
					</div>
				</div>
				
				<div class="control-group">
				<label class="control-label" for="input01">Alternative Contact:</label>
					<div class="controls">
						<input type="number" id="altcontact" name="altcontact" class="input-large" >
					</div>
				</div>
		        
			    <div class="control-group">
		      	<label class="control-label" for="input01">CMS system:</label>
			      	<div class="controls">  
						<input type="text" id="cms" name="cms" class="input-large" >
					</div>
				</div>
	
			    <div class="control-group">
				<label class="control-label" for="input01">CMS version:</label>
					<div class="controls">
						<input type="text" id="cmsversion" name="cmsversion" class="input-large" >
					</div>
				</div>
	    
				<div class="control-group">
				<label class="control-label" for="input01">Contract Start Date:</label>
					<div class="controls">
						<input type='text' id='full' name='fulldate' />
					</div>
				</div>
				
				<div class="control-group">
				<label class="control-label" for="input01">Retainer Hours:</label>
					<div class="controls">
						<input type="number" id="hours" name="hours" class="input-large" >
					</div>
				</div>
				
				<div class="control-group">
				<label class="control-label" for="input01"></label>
					<div class="controls">
						<button type="submit" id="create_post" class="btn" >Create</button>
					</div>
				</div>
				</fieldset>
			</form>
			</div>
      <?php } ?>
</div>