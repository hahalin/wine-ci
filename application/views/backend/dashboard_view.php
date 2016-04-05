<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Le styles -->
	    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
	    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">
	    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
       
        <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <?php $this->load->view('frontend/includes/header'); ?>
	    
		<div class="row">
	        <div class="span12">
	
			<h1><?php echo $user_info->username; ?>'s Dashboard <a href="<?php echo base_url(); ?>user/<?php echo $user_info->username; ?>" target="_blank">(See Profile)</a></h1><br/>
			
			<div class="well">
				<div class="tabbable">
				  <ul class="nav nav-tabs">
				    <li class="active"><a href="#account_tab" data-toggle="tab">Account Information</a></li>
				    <li><a href="#profile_tab" data-toggle="tab">Profile</a></li>
				  </ul>
				  <div class="tab-content">
				    <div class="tab-pane active" id="account_tab">
				      <p>
				      	<table class="table table-bordered table-striped">
				      		<tr>
				      			<td>
				      				<img src="<?php echo $user_info->avatar;?>" style="height:150px;" />
				      			</td>
				      		</tr>
				      		<tr>
				      			<td><b>Username:</b></td>
				      			<td><?php echo $user_info->username; ?></td>
				      		</tr>
				      		<tr>
				      			<td><b>E-mail:</b></td>
				      			<td><?php echo $user_info->email; ?></td>
				      		</tr>
				      		<tr>
				      			<td><b>First Name:</b></td>
				      			<td><?php echo $user_info->first_name; ?></td>
				      		</tr>
				      		<tr>
				      			<td><b>Last Name:</b></td>
				      			<td><?php echo $user_info->last_name; ?></td>
				      		</tr>
				      		<tr>
				      			<td><b>Account Created On:</b></td>
				      			<td><?php echo date("m/d/Y H:m",$user_info->created_on); ?></td>
				      		</tr>
				      		<tr>
				      			<td><b>Last Login:</b></td>
				      			<td><?php echo date("m/d/Y H:m",$user_info->last_login); ?></td>
				      		</tr>
				      	</table>
				      	
				      	<a href="<?php echo base_url(); ?>dashboard/account/edit" style="float:right;">Edit Account Information</a>
				      </p>
				    </div>
				    <div class="tab-pane" id="profile_tab">
				      <p>
				      	<table class="table table-bordered table-striped">
				      		<tr>
				      			<td><b>Company:</b></td>
				      			<td><?php echo $user_info->company; ?></td>
				      		</tr>
				      		<tr>
				      			<td><b>Phone:</b></td>
				      			<td><?php echo $user_info->phone; ?></td>
				      		</tr>
				      		<tr>
				      			<td><b>Biography:</b></td>
				      			<td><?php echo $user_info->biography; ?></td>
				      		</tr>
				      	</table>
				      	
				      	<a href="<?php echo base_url(); ?>dashboard/profile/edit" style="float:right;">Edit Profile</a>
				      </p>
				    </div><!--tab pane-->
				  </div><!-- tab content-->
				</div><!--tabbable-->
			</div><!--well-->
			
			</div><!-- /.span 8 -->
		</div><!-- /.row -->
	
	    <?php $this->load->view('frontend/includes/footer'); ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.9.0.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.smooth-scroll.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/lightbox.js"></script>
        
        <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>