<div class="page-header">
	<h1>Edit Client</h1>
</div>
     <?php if ($is_current_user) { ?>
	 <div class="row">
	    <div class="span6 offset3 well">
		    <legend>Edit the client's details</legend>
		    
		    <form class="form-horizontal" id="eventHere" action="<?php echo $this->make_route('/post/update/' . jsid . '/' . $post->_rev)?>" method="post" enctype="multipart/form-data">
		        <fieldset>
		        	<div class="controls iddiv">
		        	
					</div>
					<div class="controls revdiv">
					
					</div>
		        <div class="control-group">
				<label class="control-label" for="clientname">Client Name:</label>
					<div class="controls clientnameinput">
					</div>
				</div>
				
				 <div class="control-group">
				<label class="control-label" for="maincontact">Main Contact:</label>
					<div class="controls maincontactinput">
					</div>
				</div>
				
				<div class="control-group">
				<label class="control-label" for="contactemail">Contact email:</label>
					<div class="controls contactemailinput">
					</div>
				</div>
				
				<div class="control-group">
				<label class="control-label" for="contacttel">Contact Tel:</label>
					<div class="controls contacttelinput">
					</div>
				</div>
				
				<div class="control-group">
				<label class="control-label" for="altcontact">Alternative Contact:</label>
					<div class="controls altcontactinput">
					</div>
				</div>
		        
			    <div class="control-group">
		      	<label class="control-label" for="cms">CMS system:</label>
			      	<div class="controls cmsinput">  
					</div>
				</div>
	
			    <div class="control-group">
				<label class="control-label" for="cmsversion">CMS version:</label>
					<div class="controls cmsversioninput">
					</div>
				</div>
	    
				<div class="control-group">
				<label class="control-label" for="fulldate">Contract Start Date:</label>
					<div class="controls startdateinput">
					</div>
				</div>
				
				<div class="control-group">
				<label class="control-label" for="hours">Retainer Hours:</label>
					<div class="controls hoursinput">
					</div>
				</div>
				
				<div class="form-actions">
			        	<button type="submit" id="create_post" class="btn" value="target1" >Update</button>
        		</div>
				
		
				</fieldset>
			</form>
			</div>
			
      <?php } ?>
</div>

<script type="text/javascript"> 
// this will give you your path ie /light/saber/ 
urlPath=window.location.pathname; 
//this splits your url in pieces using the / as a separator 
urlPathArray = urlPath.split('/'); 
//get the first section of your path ie light 
urlPath1=urlPathArray[5]; 
var jsid = urlPath1; 

</script>