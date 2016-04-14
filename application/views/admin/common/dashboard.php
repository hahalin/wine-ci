
<div class="hero-unit">
	
</div>
<div class="container">
	<div class="page-header">
		<h1><?php echo $this->lang->line('codeigniter_admin_pro');?></h1>
		<p id="tagline"></p>	
	</div>
	<div class="row">
		<div>
			<h3><i class="glyphicon glyphicon-user"></i>與我聯絡</h3>
			   <dl class="dl-horizontal">
				   <dt>中文名</dt><dd>林春宏</dd>
				   <dt>英文名</dt><dd>Frank Lin</dd>			   
				   <dt>Email<i class="icon-envelope"></i></dt><dd>hahalin@gmail.com</dd>
				   <dt>手機<i class="icon-book"></i></dt><dd>0978380182</dd>			   			   
			   </dl>
			 
	 	</div>
		<div id="container">
		</div>	
	</div>
</div>

<script type='text/javascript'>

	


	$(document).ready(function(){

		var CFG = {
	        url: '<?php echo $this->config->item('base_url');?>',
	        token: '<?php echo $this->security->get_csrf_hash();?>'
    	};
    	
    	$.ajax({
		  
		});

    	$.ajaxSetup({
                statusCode: {
                	401: function () {
                         alert('401 ajax setup');

                    },
                    404: function () {
                         alert('404 ajax setup');

                    },
                    200: function(){
                    	alert('200 ajax setup');
                    }
                }
        });


  //   	$.get("/admin/dashboard/get",
		// 		success:function(data){
		// 			console.log(data);
		// 		},
		// 		function(data)
		// 		{
		// 			console.log(data);
		// 		},
		// 		function(data)
		// 		{
		// 			console.log(data);
		// 		}
		// );
		// return;

    	$.ajax({
		    type: 'GET',
		    url: '/wine/admin/dashboard/get',
		    //data: $form.serialize(),
		    success: function(data){
		        alert('success! 200 status code!');
		    },
		    error: function(jqXHR, textStatus, errorThrown) {
			    alert(jqXHR.status);
			    alert(textStatus);
			    alert(errorThrown);
			},
			statusCodea: {
			  	401: function() {
			      alert('401 status code! user error');
			    },
			    404: function() {
			      alert('404 status code! user error');
			    },
			    500: function() {
			      alert('500 status code! server error');
			    }
		 	}
		});

    	return;
		try
		{
			$.get("/wine/admin/dashboard/get",
				function(data){
					console.log(data);
				},
				function(data)
				{
					console.log(data);
				},
				function(data)
				{
					console.log(data);
				}
			);
		}
		catch(ex)
		{
			console.log(ex);
		}

	});
	


</script>