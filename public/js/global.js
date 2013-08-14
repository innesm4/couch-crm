!function ($) {

  $(function() {
  		$('#editor').hide();
		$('#editbutton').on('click', function(e){
			 $('#details').fadeOut(function(){
				$('#editor,').fadeIn(); 
			    });
	});

	$('#more_posts').on( 'click', function(event){
	event.preventDefault();
		var location = window.location.pathname + "/" + $('#post_list').children().size();
			$.ajax({
			type:'GET',
			url:location,
			context:$('#post_list'),
				success:function(html){
				$(this).append(html);
				if($('#post_list').children().size()<= parseInt($('#post_count').text())){
				$('#load_more').hide();
				}
			}
		});
	});
	
	$('#full').datepicker({
		inline: true,
		dateFormat: 'dd/mm/yy',
		showOn: "button",
		showOtherMonths: true,		
    	onSelect: function(dateText, inst) {
        var pieces = dateText.split('/');
        $('#eventday').val(pieces[0]);
        $('#eventmonth').val(pieces[1]);
        $('#eventyear').val(pieces[2]);
        }
        
    });
    
    $('#loginHere').validate({
	    rules: {
	      username: {
	        minlength: 2,
	        required: true,
	      },
	      password: {
	        required: true,	      
	      },

	    },	    
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('errorred');
			},
			success: function(element) {
				element
				.text('OK!').addClass('validgreen')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });
	  
	  $('#registerHere').validate({
	    rules: {
	      full_name: {
	        required: true,
	        
	      },
	      email: {
	      	email: true,
	        required: true,	     
	      },
	       username: {
	        minlength: 4,
	        required: true,
	        
	      },
	      password: {
	      minlength: 6,
	        required: true,	     
	      },
	       confirmpassword: {
	        required: true,
	      },

	    },
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('errorred');
			},
			success: function(element) {
				element
				.text('OK!').addClass('validgreen')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });
	/*  
	 $('#eventHere').validate({
	    rules: {
	      clientname: {
	        required: true,
	        
	      },
	      maincontact: {
	        required: true,	     
	      },
	       contactemail: {
	        email: true,
	        required: true,
	      },
	      contacttel: {
	     	number: true,
	        required: true,	     
	      },
	       altcontact: {
	       	number: true,
	        required: true,
	      },
	      cms: {
	        required: true,
	      },
	      cmsversion: {
	     	number: true,
	     	required: true,	     
	      },
	       fulldate: {
	        required: true,
	        date: true,
	      },
	       hours: {
	        required: true,
	        number: true,
	      },
	    },
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('errorred');
			},
			success: function(element) {
				element
				.text('OK!').addClass('validgreen')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });*/
	
	var datastore='http://deerdigital.cloudant.com:5984/deercrm/'+jsid+'?callback=?'; 
	console.log(datastore);
	$.ajax({
		type: "GET",
		url: datastore,
		dataType: "jsonp",
		success: function(data){
		console.log(data);
		$(".iddiv").append("'"+data._id+"'");
		$(".revdiv").append("'"+data._rev+"'");
		$(".clientnameinput").append("<input type='text' id='clientname' name='clientname' class='input-large' value='"+data.clientname+"'/>");
		$(".maincontactinput").append("<input type='text' id='maincontact' name='maincontact' class='input-large' value='"+data.maincontact+"'/>");
		$(".contactemailinput").append("<input type='text' id='contactemail' name='contactemail' class='input-large' value='"+data.contactemail+"'/>");
		$(".contacttelinput").append("<input type='text' id='contacttel' name='contacttel' class='input-large' value='"+data.contacttel+"'/>");
		$(".altcontactinput").append("<input type='text' id='altcontact' name='altcontact' class='input-large' value='"+data.altcontact+"'/>");
		$(".cmsinput").append("<input type='text' id='cms' name='cms' class='input-large' value='"+data.cms+"'/>");
		$(".cmsversioninput").append("<input type='text' id='cmsversion' name='cmsversion' class='input-large' value='"+data.cmsversion+"'/>");
		$(".startdateinput").append("<input type='text' id='fulldate' name='fulldate' class='input-large' value='"+data.startdate+"'/>");
		$(".hoursinput").append("<input type='text' id='hours' name='hours' class='input-large' value='"+data.hours+"'/>");
		  }

	});		

  });
  
}(window.jQuery);





