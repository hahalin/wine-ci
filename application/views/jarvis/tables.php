<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <title>{JARVIS}Admin</title>
    <meta name="description" content="">
    <meta name="author" content="">
    
	<!-- http://davidbcalhoun.com/2010/viewport-metatag -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!--// OPTIONAL & CONDITIONAL CSS FILES //-->   
	<!-- date picker css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/datepicker.css?v=1">
	<!-- full calander css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/fullcalendar.css?v=1">
	<!-- data tables extended CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/TableTools.css?v=1">
	<!-- bootstrap wysimhtml5 editor -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/bootstrap-wysihtml5.css?v=1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/wysiwyg-color.css">
	<!-- custom/responsive growl messages -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/toastr.custom.css?v=1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/toastr-responsive.css?v=1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/jquery.jgrowl.css?v=1">
	
	<!-- // DO NOT REMOVE OR CHANGE ORDER OF THE FOLLOWING // -->
	<!-- bootstrap default css (DO NOT REMOVE) -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/bootstrap.min.css?v=1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/bootstrap-responsive.min.css?v=1">
	<!-- font awsome and custom icons -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/font-awesome.min.css?v=1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/cus-icons.css?v=1">
	<!-- jarvis widget css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/jarvis-widgets.css?v=1">
	<!-- Data tables, normal tables and responsive tables css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/DT_bootstrap.css?v=1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/responsive-tables.css?v=1">
	<!-- used where radio, select and form elements are used -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/uniform.default.css?v=1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/select2.css?v=1">
	<!-- main theme files -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/theme.css?v=1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jarvis/css/theme-responsive.css?v=1">
    
	<!-- // THEME CSS changed by javascript: the CSS link below will override the rules above // -->
	<!-- For more information, please see the documentation for "THEMES" -->
    <link rel="stylesheet" id="switch-theme-js" href="<?php echo base_url();?>assets/jarvis/css/themes/default.css?v=1">   
	
   	<!-- To switch to full width -->
    <link rel="stylesheet" id="switch-width" href="<?php echo base_url();?>assets/jarvis/css/full-width.css?v=1">
    
	<!-- Webfonts -->
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:300,400,700' type='text/css'>
	
	<!-- All javascripts are located at the bottom except for HTML5 Shim -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
   		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
   		<script src="js/include/respond.min.js"></script>
   	<![endif]-->

	<!-- For Modern Browsers -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/jarvis/img/favicons/favicon.png">
	<!-- For everything else -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/jarvis/img/favicons/favicon.ico">
	<!-- For retina screens -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/jarvis/img/favicons/apple-touch-icon-retina.png">
	<!-- For iPad 1-->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/jarvis/img/favicons/apple-touch-icon-ipad.png">
	<!-- For iPhone 3G, iPod Touch and Android -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/jarvis/img/favicons/apple-touch-icon.png">
	
	<!-- iOS web-app metas -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!-- Add your custom home screen title: -->
	<meta name="apple-mobile-web-app-title" content="Jarvis"> 

	<!-- Startup image for web apps -->
	<link rel="apple-touch-startup-image" href="<?php echo base_url();?>assets/jarvis/img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
	<link rel="apple-touch-startup-image" href="<?php echo base_url();?>assets/jarvis/img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
	<link rel="apple-touch-startup-image" href="<?php echo base_url();?>assets/jarvis/img/splash/iphone.png" media="screen and (max-device-width: 320px)">
	
  </head>

  <body>
  	<!-- .height-wrapper -->
	<div class="height-wrapper">
		
		<!-- header -->
		<header>
			<!-- tool bar -->
			<div id="header-toolbar" class="container-fluid">
				<!-- .contained -->
				<div class="contained">
					
					<!-- theme name -->
					<h1> {JARVIS} <span class="hidden-phone">- Smart Admin Template</span> </h1>
					<!-- end theme name -->
					
					<!-- span4 -->
					<div class="pull-right">
						<!-- demo theme switcher-->
						<div id="theme-switcher" class="btn-toolbar">
							
							<!-- search and log off button for phone devices -->
							<div class="btn-group pull-right visible-phone">
								<a href="javascript:void(0)" class="btn btn-inverse btn-small"><i class="icon-search"></i></a>
								<a href="login.html" class="btn btn-inverse btn-small"><i class="icon-off"></i></a>
							</div>
							<!-- end buttons for phone device -->
							
							<!-- dropdown mini-inbox-->
							<div class="btn-group">
								<!-- new mail ticker -->
								<a href="javascript:void(0)" class="btn btn-small btn-inverse dropdown-toggle" data-toggle="dropdown">
									<span class="mail-sticker">3</span>
									<i class="cus-email"></i>
								</a>
								<!-- end new mail ticker -->
								
								<!-- email lists -->
								<div class="dropdown-menu toolbar pull-right">
									<h3>Inbox</h3>
									<ul id="mailbox-slimscroll-js" class="mailbox">
										<li>
											<a href="javascript:void(0)" class="unread">
												<img src="img/email-important.png" alt="important mail">
												From: David Simpson
												<i class="icon-paper-clip"></i>
												<span>Dear Victoria, Congratulations! Your work has been uploaded to wrapbootstrap.com...</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="unread attachment">
												
												<img src="img/email-unread.png" alt="important mail">
												Re:Last Year sales
												<i class="icon-paper-clip"></i>
												<span>Hey Vicky, find attached! Thx :-)</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="unread">
												<img src="img/email-unread.png" alt="important mail">
												Company Party
												<i class="icon-paper-clip"></i>
												<span>Hi, You have been cordially invited to join new year after party.</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="read">
												<img src="img/email-read.png" alt="important mail">
												RE: 2 Bugs found...
												<i class="icon-paper-clip"></i>
												<span>I have found two more bugs in this your beta version, maybe its not working...</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="read">
												<img src="img/email-read.png" alt="important mail">
												2 Bugs found...
												<i class="icon-paper-clip"></i>
												<span>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales.</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)" class="read">
												<img src="img/email-read.png" alt="important mail">
												Welcome to Jarvis!
												<i class="icon-paper-clip"></i>
												<span>Feugiat a, tellus. Phasellus viverra nulla ut metus varius. Quisque rutrum. Aenean imperdiet... </span>
											</a>
										</li>
									</ul>
									<a href="javascript:void(0);" id="go-to-inbox">Go to Inbox <i class="icon-double-angle-right"></i></a>
								</div>
								<!-- end email lists -->
							</div>
							<!-- end dropdown mini-inbox-->
							
							<!-- Tasks -->
							<div class="btn-group hidden-phone">
								<a href="javascript:void(0)" class="btn btn-inverse btn-small">My Tasks</a>
								<a href="javascript:void(0)" class="btn btn-inverse dropdown-toggle btn-small" data-toggle="dropdown"><span class="caret"></span></a>
					
								<div class="dropdown-menu toolbar pull-right">
									<h3>Showing All Tasks</h3>
									<ul class="progressbox">
						                <li>
						                    <strong><i class="online pull-left"></i>Urgent Bug Fixes</strong><b>Complete</b>
						                    <div class="progress progress-success slim"><div class="bar" style="width: 100%;"></div></div>
						                </li>
						                <li>
						                    <strong>Added functionality</strong><b>70%</b>
						                    <div class="progress progress-info slim"><div class="bar" style="width: 70%;"></div></div>
						                </li>
						                <li>
						                    <strong>CAD Changes</strong><b>50%</b>
						                    <div class="progress progress-info slim"><div class="bar" style="width: 50%;"></div></div>
						                </li>
						                <li>
						                    <strong>Marketing Campaign Mocup</strong><b>22%</b>
						                    <div class="progress progress-danger slim"><div class="bar" style="width: 22%;"></div></div>
						                </li>
						                <li>
						                    <strong><i class="offline pull-left"></i>Proposal</strong><b>Pending</b>
						                    <div class="progress progress-info slim"><div class="bar" style="width: 0%;"></div></div>
						                </li>
						            </ul>
								</div>

							</div>
							<!-- end Tasks -->
							
							<!-- theme dropdown -->
							<div class="btn-group hidden-phone">
								<a href="javascript:void(0)" class="btn btn-small btn-inverse" id="reset-widget"><i class="icon-refresh"></i></a>
								<a href="javascript:void(0)" class="btn btn-small btn-inverse dropdown-toggle" data-toggle="dropdown">Themes <span class="caret"></span></a>
								<ul id="theme-links-js" class="dropdown-menu toolbar pull-right">
									<li>
										<a href="javascript:void(0)" data-rel="purple"><i class="icon-sign-blank purple-icon"></i>Royal Purple</a>
									</li>
									<li>
										<a href="javascript:void(0)" data-rel="blue"><i class="icon-sign-blank navyblue-icon"></i>Navy Blue</a>
									</li>
									<li>
										<a href="javascript:void(0)" data-rel="green"><i class="icon-sign-blank green-icon "></i>Emerald</a>
									</li>
									<li>
										<a href="javascript:void(0)" data-rel="darkred"><i class="icon-sign-blank red-icon "></i>Dark Rose</a>
									</li>
									<li>
										<a href="javascript:void(0)" data-rel="default"><i class="icon-sign-blank grey-icon"></i>Default</a>
									</li>
								</ul>
							</div>
							<!-- end theme dropdown-->
							
						</div>
					  	<!-- end demo theme switcher-->
					</div>
					<!-- end span4 -->
				</div>
				<!-- end .contained -->
			</div>
			<!-- end tool bar -->
			
		</header>
		<!-- end header -->
		
	    <div id="main" role="main" class="container-fluid">
			<div class="contained">
				<!-- aside -->	
				<aside>	
					
					<!-- search box -->
					<div class="main-search">
						<label for="main-search"><i class="icon-search"></i></label>
	                    <input id="main-search" type="text" placeholder="Search..." />
                	</div>
					<div class="divider"></div>
					<!-- end search box -->
										
					<!-- aside item: Mini profile -->
					<div class="my-profile">
						<a href="javascript:void(0)" class="my-profile-pic">
							<img src="<?php echo base_url();?>assets/jarvis/img/avatar/avatar_0.jpg" alt="" />
						</a>
						<span class="first-child">Welcome <strong>Victoria!</strong></span>
						<span><a href="javascript:void(0);">Edit Profile </a></span>
					</div>
					<div class="divider"></div>
					<!-- end aside item: Mini profile -->

					<!-- aside item: Menu -->
					<div class="sidebar-nav-fixed">
						
						<ul class="menu" id="accordion-menu-js">
							
							<?php
								
								$i=1;
								//$bzcategory=array();
								foreach ($bzcategory as $item) {
									
									//$active = $item -> active ? 'open' : '';
									$active=$item->active?'open':'closed';
									
									echo '<li class="'.$active.'">';
									echo '<a href="javascript:void(0)" class="head">';
									echo '<i class="icon-user"></i>';
									//echo '<a href="#">';
									//echo '<i class="icon-chevron-right"></i>';
									echo $item -> name;
									//echo '</a>';
									if (count($item->children)>0)
									{
									    //echo '<span class="badge">'.count($item->children).'</span></a>';
									    
									}
									else 
									{
										//echo '<span class="badge">'.$item->cmpcount.'</span></a>';
									}
									echo '<span class="badge">'.$item->cmpcount.'</span></a>';
									
									if (count($item->children)>0)
									{
										echo '<ul';
										if ($active=="")
										{
											//echo 'style="display:none;"';
										}
										else 
										{
											//echo 'style="display:block;"';
										}
										echo '>';
										
										$j=0;
										foreach ($item->children as $childitem)
										{
											//$active = $childitem -> active ? 'open' : 'closed';
											$active=$childitem->active? 'expanded':'';
											if (($item->active) && ($active=='') && ($j==0))
											{
												$active='expanded';
											}
											echo '<li>';
											
											echo '<a href="#" class="'.$active.'">';
											//echo '<i class="icon-chevron-right"></i>';
											echo $childitem -> name;
											//badge-info special
											echo '<span class="badge">'.$childitem->cmpcount;
											echo '</span>';
											
											echo '</a>';
											echo '</li>';
											$j++;
										}
										echo '</ul>';
										}
									echo '</li>';
									$i++;
									if ($i>3)
									{
										//break;
									}
								}
					 		?>
	
							
							
							
							<li class="">
								<a href="javascript:void(0)"><i class="icon-off"></i>Dashboard <span class="badge">2</span></a>
								<ul>
									<li>
										<a href="index.html">Dashboard</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="logout-js" data-rel="login.html">Logout</a>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="inbox.html"><i class="icon-envelope"></i>Inbox</a>
							</li>
							<li class="">
								<a href="javascript:void(0)"><i class="icon-check"></i>Forms<span class="badge">3</span></a>
								<ul>
									<li>
										<a href="forms.html">Form Elements</a>
									</li>
									<li>
										<a href="validation.html">Validation</a>
									</li>
									<li>
										<a href="wizard.html">Wizards</a>
									</li>
								</ul>
							</li>
							<li class="current">
								<a href="javascript:void(0)"><i class="icon-user"></i>Interface<span class="badge">3</span></a>
								<ul>
									<li>
										<a href="interface.html">Interface Elements</a>
									</li>
									<li>
										<a href="buttons.html">Buttons &amp; Icons</a>
									</li>
									<li>
										<a href="tables.html" class="expanded">Tables</a>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="javascript:void(0)"><i class="icon-signal"></i>Charts &amp; Graphs<span class="badge">3</span></a>
								<ul>
									<li>
										<a href="basic_charts.html">Basic Charts</a>
									</li>
									<li>
										<a href="adv_charts.html">Advanced Charts</a>
									</li>
									<li>
										<a href="raphael.html">Raphael Engine</a>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="widgets.html"><i class="icon-refresh"></i>Smart Widgets</a>
							</li>
							<li class="">
								<a href="javascript:void(0)"><i class="icon-plus"></i>Bonus<span class="badge">4</span></a>
								<ul>
									<li>
										<a href="invoice.html">Invoice</a>
									</li>
									<li>
										<a href="typography.html">Typography</a>
									</li>
									<li>
										<a href="chat.html">Chat</a>
									</li>
									<li>
										<a href="error-page.html">Error Page</a>
									</li>
								</ul>
							</li>
						</ul>
						
					</div>
					<div class="divider"></div>
					<!-- end aside item: Menu -->
					

					<!-- aside buttons -->
					<div class="aside-buttons">
		                <a href="javascript:void(0);" title="" class="btn btn-info">Add new table</a>
		                <a href="javascript:void(0);" title="" class="btn btn-success">Add a new row</a>
		                <a href="javascript:void(0);" title="" class="btn btn-warning">Update table</a>
		                <a href="javascript:void(0);" title="" class="btn btn-danger">Delete Table</a>
		            </div>
		            <div class="divider"></div>
		            <!-- end aside buttons -->
					
				</aside>
				<!-- aside end -->
				
				<!-- main content -->
				<div id="page-content">
					<!-- page header -->
					<h1 id="page-header">企業類別-<?php echo $activebread; ?></h1>
					<div class="fluid-container">
						
						<!-- widget grid -->
						<section id="widget-grid" class="">
							
							<!-- row-fluid -->
							
							<div class="row-fluid">
								<article class="span12">
									<!-- new widget -->
									<div class="jarviswidget" id="widget-id-0">
									    <header>
									        <h2>Smart Responsive Data Table</h2>                           
									    </header>
									    <!-- wrap div -->
									    <div>
									    
									        <div class="jarviswidget-editbox">
									            <div>
									                <label>Title:</label>
									                <input type="text" />
									            </div>
									            <div>
									                <label>Styles:</label>
									                <span data-widget-setstyle="purple" class="purple-btn"></span>
									                <span data-widget-setstyle="navyblue" class="navyblue-btn"></span>
									                <span data-widget-setstyle="green" class="green-btn"></span>
									                <span data-widget-setstyle="yellow" class="yellow-btn"></span>
									                <span data-widget-setstyle="orange" class="orange-btn"></span>
									                <span data-widget-setstyle="pink" class="pink-btn"></span>
									                <span data-widget-setstyle="red" class="red-btn"></span>
									                <span data-widget-setstyle="darkgrey" class="darkgrey-btn"></span>
									                <span data-widget-setstyle="black" class="black-btn"></span>
									            </div>
									        </div>
            
									        <div class="inner-spacer"> 
									        <!-- content goes here -->
												<div class="widget alert alert-info adjusted">
													<button class="close" data-dismiss="alert">×</button>
													<i class="cus-exclamation"></i>
													<strong>Cool export features:</strong> This dynamtic table can also export <strong>PDF</strong> and <strong>Excel</strong> files, feel free to click on the PDF or Excel button to see the result
												</div>
												
												<!--
												<table class="table table-striped table-bordered responsive" id="dtablea">
												-->
												<table class="table table-striped table-bordered responsive" id="col-filter">
												
													<thead>
														<tr>
															<th>province</th>
															<th>name</th>
															<th>addr</th>
															<th>tel</th>
															<th>fax</th>
															<th>web</th>
															<th>email</th>
														</tr>
													</thead>
													<tbody>
													<?php
														$idx=0;
														foreach($companies as $cmp)
														{
															$class=$idx % 2==0?'odd gradeX':'even gradeC';
															echo '<tr class="'.$class.'"">';
															$p=$cmp->province->get();
															
															echo '<td>'.$p->name.'</td>';
															echo '<td>'.$cmp->name.'</td>';
															echo '<td>'.$cmp->addr.'</td>';
															echo '<td>'.$cmp->tel.'</td>';
															echo '<td>'.$cmp->fax.'</td>';
															echo '<td>'.'<a href="http://'.$cmp->web.'">'.$cmp->web.'</a>'.'</td>';
															echo '<td>'.$cmp->email.'</td>';
															echo '</tr>';
															$idx++;				
														}
													?>
													</tbody>
												</table>
												
												
												<table class="table table-striped table-bordered responsive" id="dtablea">
													<thead>
														<tr>
															<th>Rendering engine</th>
															<th>Browser</th>
															<th>Platform(s)</th>
															<th>Engine version</th>
															<th>CSS grade</th>
														</tr>
													</thead>
													<tbody>
														<tr class="odd gradeX">
															<td>Trident</td>
															<td>Internet
																 Explorer 4.0</td>
															<td>Win 95+</td>
															<td class="center"> 4</td>
															<td class="center">X</td>
														</tr>
														<tr class="even gradeC">
															<td>Trident</td>
															<td>Internet
																 Explorer 5.0</td>
															<td>Win 95+</td>
															<td class="center">5</td>
															<td class="center">C</td>
														</tr>
														<tr class="odd gradeA">
															<td>Trident</td>
															<td>Internet
																 Explorer 5.5</td>
															<td>Win 95+</td>
															<td class="center">5.5</td>
															<td class="center">A</td>
														</tr>
														<tr class="even gradeA">
															<td>Trident</td>
															<td>Internet
																 Explorer 6</td>
															<td>Win 98+</td>
															<td class="center">6</td>
															<td class="center">A</td>
														</tr>
														<tr class="odd gradeA">
															<td>Trident</td>
															<td>Internet Explorer 7</td>
															<td>Win XP SP2+</td>
															<td class="center">7</td>
															<td class="center">A</td>
														</tr>
														<tr class="even gradeA">
															<td>Trident</td>
															<td>AOL browser (AOL desktop)</td>
															<td>Win XP</td>
															<td class="center">6</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Firefox 1.0</td>
															<td>Win 98+ / OSX.2+</td>
															<td class="center">1.7</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Firefox 1.5</td>
															<td>Win 98+ / OSX.2+</td>
															<td class="center">1.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Firefox 2.0</td>
															<td>Win 98+ / OSX.2+</td>
															<td class="center">1.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Firefox 3.0</td>
															<td>Win 2k+ / OSX.3+</td>
															<td class="center">1.9</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Camino 1.0</td>
															<td>OSX.2+</td>
															<td class="center">1.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Camino 1.5</td>
															<td>OSX.3+</td>
															<td class="center">1.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Netscape 7.2</td>
															<td>Win 95+ / Mac OS 8.6-9.2</td>
															<td class="center">1.7</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Netscape Browser 8</td>
															<td>Win 98SE+</td>
															<td class="center">1.7</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Netscape Navigator 9</td>
															<td>Win 98+ / OSX.2+</td>
															<td class="center">1.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.0</td>
															<td>Win 95+ / OSX.1+</td>
															<td class="center">1</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.1</td>
															<td>Win 95+ / OSX.1+</td>
															<td class="center">1.1</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.2</td>
															<td>Win 95+ / OSX.1+</td>
															<td class="center">1.2</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.3</td>
															<td>Win 95+ / OSX.1+</td>
															<td class="center">1.3</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.4</td>
															<td>Win 95+ / OSX.1+</td>
															<td class="center">1.4</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.5</td>
															<td>Win 95+ / OSX.1+</td>
															<td class="center">1.5</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.6</td>
															<td>Win 95+ / OSX.1+</td>
															<td class="center">1.6</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.7</td>
															<td>Win 98+ / OSX.1+</td>
															<td class="center">1.7</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.8</td>
															<td>Win 98+ / OSX.1+</td>
															<td class="center">1.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Seamonkey 1.1</td>
															<td>Win 98+ / OSX.2+</td>
															<td class="center">1.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Epiphany 2.20</td>
															<td>Gnome</td>
															<td class="center">1.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Webkit</td>
															<td>Safari 1.2</td>
															<td>OSX.3</td>
															<td class="center">125.5</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Webkit</td>
															<td>Safari 1.3</td>
															<td>OSX.3</td>
															<td class="center">312.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Webkit</td>
															<td>Safari 2.0</td>
															<td>OSX.4+</td>
															<td class="center">419.3</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Webkit</td>
															<td>Safari 3.0</td>
															<td>OSX.4+</td>
															<td class="center">522.1</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Webkit</td>
															<td>OmniWeb 5.5</td>
															<td>OSX.4+</td>
															<td class="center">420</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Webkit</td>
															<td>iPod Touch / iPhone</td>
															<td>iPod</td>
															<td class="center">420.1</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Webkit</td>
															<td>S60</td>
															<td>S60</td>
															<td class="center">413</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Opera 7.0</td>
															<td>Win 95+ / OSX.1+</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Opera 7.5</td>
															<td>Win 95+ / OSX.2+</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Opera 8.0</td>
															<td>Win 95+ / OSX.2+</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Opera 8.5</td>
															<td>Win 95+ / OSX.2+</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Opera 9.0</td>
															<td>Win 95+ / OSX.3+</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Opera 9.2</td>
															<td>Win 88+ / OSX.3+</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Opera 9.5</td>
															<td>Win 88+ / OSX.3+</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Opera for Wii</td>
															<td>Wii</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Nokia N800</td>
															<td>N800</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Nintendo DS browser</td>
															<td>Nintendo DS</td>
															<td class="center">8.5</td>
															<td class="center">C/A<sup>1</sup></td>
														</tr>
														<tr class="gradeC">
															<td>KHTML</td>
															<td>Konqureror 3.1</td>
															<td>KDE 3.1</td>
															<td class="center">3.1</td>
															<td class="center">C</td>
														</tr>
														<tr class="gradeA">
															<td>KHTML</td>
															<td>Konqureror 3.3</td>
															<td>KDE 3.3</td>
															<td class="center">3.3</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>KHTML</td>
															<td>Konqureror 3.5</td>
															<td>KDE 3.5</td>
															<td class="center">3.5</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeX">
															<td>Tasman</td>
															<td>Internet Explorer 4.5</td>
															<td>Mac OS 8-9</td>
															<td class="center">-</td>
															<td class="center">X</td>
														</tr>
														<tr class="gradeC">
															<td>Tasman</td>
															<td>Internet Explorer 5.1</td>
															<td>Mac OS 7.6-9</td>
															<td class="center">1</td>
															<td class="center">C</td>
														</tr>
														<tr class="gradeC">
															<td>Tasman</td>
															<td>Internet Explorer 5.2</td>
															<td>Mac OS 8-X</td>
															<td class="center">1</td>
															<td class="center">C</td>
														</tr>
														<tr class="gradeA">
															<td>Misc</td>
															<td>NetFront 3.1</td>
															<td>Embedded devices</td>
															<td class="center">-</td>
															<td class="center">C</td>
														</tr>
														<tr class="gradeA">
															<td>Misc</td>
															<td>NetFront 3.4</td>
															<td>Embedded devices</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeX">
															<td>Misc</td>
															<td>Dillo 0.8</td>
															<td>Embedded devices</td>
															<td class="center">-</td>
															<td class="center">X</td>
														</tr>
														<tr class="gradeX">
															<td>Misc</td>
															<td>Links</td>
															<td>Text only</td>
															<td class="center">-</td>
															<td class="center">X</td>
														</tr>
														<tr class="gradeX">
															<td>Misc</td>
															<td>Lynx</td>
															<td>Text only</td>
															<td class="center">-</td>
															<td class="center">X</td>
														</tr>
														<tr class="gradeC">
															<td>Misc</td>
															<td>IE Mobile</td>
															<td>Windows Mobile 6</td>
															<td class="center">-</td>
															<td class="center">C</td>
														</tr>
														<tr class="gradeC">
															<td>Misc</td>
															<td>PSP browser</td>
															<td>PSP</td>
															<td class="center">-</td>
															<td class="center">C</td>
														</tr>
														<tr class="gradeU">
															<td>Other browsers</td>
															<td>All others</td>
															<td>-</td>
															<td class="center">-</td>
															<td class="center">U</td>
														</tr>
													</tbody>
												</table>
										        	
										    </div>
										    <!-- end content-->
									    </div>
									    <!-- end wrap div -->
									</div>
									<!-- end widget -->
								</article>
							</div>
							
							<!-- end row-fluid -->

							<!-- row-fluid -->
							
							<div class="row-fluid">
								<article class="span12">
									<!-- new widget -->
									<div class="jarviswidget" id="widget-id-1">
									    <header>
									        <h2>Column Filtering</h2>                           
									    </header>
									    <!-- wrap div -->
									    <div>
									    
									        <div class="jarviswidget-editbox">
									            <div>
									                <label>Title:</label>
									                <input type="text" />
									            </div>
									            <div>
									                <label>Styles:</label>
									                <span data-widget-setstyle="purple" class="purple-btn"></span>
									                <span data-widget-setstyle="navyblue" class="navyblue-btn"></span>
									                <span data-widget-setstyle="green" class="green-btn"></span>
									                <span data-widget-setstyle="yellow" class="yellow-btn"></span>
									                <span data-widget-setstyle="orange" class="orange-btn"></span>
									                <span data-widget-setstyle="pink" class="pink-btn"></span>
									                <span data-widget-setstyle="red" class="red-btn"></span>
									                <span data-widget-setstyle="darkgrey" class="darkgrey-btn"></span>
									                <span data-widget-setstyle="black" class="black-btn"></span>
									            </div>
									        </div>
            
									        <div class="inner-spacer"> 
									        <!-- content goes here -->
									        
												<table class="table table-striped table-bordered responsive" id="col-filter">
													<thead>
														<tr>
															<th>Rendering engine</th>
															<th>Browser</th>
															<th>Platform(s)</th>
															<th>Engine version</th>
															<th>CSS grade</th>
														</tr>
														<tr class="second">
															<td>
																<input type="text" name="search_engine" value="Filter engines" class="search_init">
															</td>
															<td>
																<input type="text" name="search_browser" value="Filter browsers" class="search_init">
															</td>
															<td>
																<input type="text" name="search_platform" value="Filter platforms" class="search_init">
															</td>
															<td>
																<input type="text" name="search_version" value="Filter versions" class="search_init">
															</td>
															<td>
																<input type="text" name="search_grade" value="Filter grades" class="search_init">
															</td>
														</tr>
													</thead>
													<tbody>
														<tr class="odd gradeX">
															<td>Trident</td>
															<td>Internet
																 Explorer 4.0</td>
															<td>Win 95+</td>
															<td class="center"> 4</td>
															<td class="center">X</td>
														</tr>
														<tr class="even gradeC">
															<td>Trident</td>
															<td>Internet
																 Explorer 5.0</td>
															<td>Win 95+</td>
															<td class="center">5</td>
															<td class="center">C</td>
														</tr>
														<tr class="odd gradeA">
															<td>Trident</td>
															<td>Internet
																 Explorer 5.5</td>
															<td>Win 95+</td>
															<td class="center">5.5</td>
															<td class="center">A</td>
														</tr>
														<tr class="even gradeA">
															<td>Trident</td>
															<td>Internet
																 Explorer 6</td>
															<td>Win 98+</td>
															<td class="center">6</td>
															<td class="center">A</td>
														</tr>
														<tr class="odd gradeA">
															<td>Trident</td>
															<td>Internet Explorer 7</td>
															<td>Win XP SP2+</td>
															<td class="center">7</td>
															<td class="center">A</td>
														</tr>
														<tr class="even gradeA">
															<td>Trident</td>
															<td>AOL browser (AOL desktop)</td>
															<td>Win XP</td>
															<td class="center">6</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Firefox 1.0</td>
															<td>Win 98+ / OSX.2+</td>
															<td class="center">1.7</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Firefox 1.5</td>
															<td>Win 98+ / OSX.2+</td>
															<td class="center">1.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Firefox 2.0</td>
															<td>Win 98+ / OSX.2+</td>
															<td class="center">1.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Firefox 3.0</td>
															<td>Win 2k+ / OSX.3+</td>
															<td class="center">1.9</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Camino 1.0</td>
															<td>OSX.2+</td>
															<td class="center">1.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Camino 1.5</td>
															<td>OSX.3+</td>
															<td class="center">1.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Netscape 7.2</td>
															<td>Win 95+ / Mac OS 8.6-9.2</td>
															<td class="center">1.7</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Netscape Browser 8</td>
															<td>Win 98SE+</td>
															<td class="center">1.7</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Netscape Navigator 9</td>
															<td>Win 98+ / OSX.2+</td>
															<td class="center">1.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.0</td>
															<td>Win 95+ / OSX.1+</td>
															<td class="center">1</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.1</td>
															<td>Win 95+ / OSX.1+</td>
															<td class="center">1.1</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.2</td>
															<td>Win 95+ / OSX.1+</td>
															<td class="center">1.2</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.3</td>
															<td>Win 95+ / OSX.1+</td>
															<td class="center">1.3</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.4</td>
															<td>Win 95+ / OSX.1+</td>
															<td class="center">1.4</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.5</td>
															<td>Win 95+ / OSX.1+</td>
															<td class="center">1.5</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.6</td>
															<td>Win 95+ / OSX.1+</td>
															<td class="center">1.6</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.7</td>
															<td>Win 98+ / OSX.1+</td>
															<td class="center">1.7</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Mozilla 1.8</td>
															<td>Win 98+ / OSX.1+</td>
															<td class="center">1.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Seamonkey 1.1</td>
															<td>Win 98+ / OSX.2+</td>
															<td class="center">1.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Gecko</td>
															<td>Epiphany 2.20</td>
															<td>Gnome</td>
															<td class="center">1.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Webkit</td>
															<td>Safari 1.2</td>
															<td>OSX.3</td>
															<td class="center">125.5</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Webkit</td>
															<td>Safari 1.3</td>
															<td>OSX.3</td>
															<td class="center">312.8</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Webkit</td>
															<td>Safari 2.0</td>
															<td>OSX.4+</td>
															<td class="center">419.3</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Webkit</td>
															<td>Safari 3.0</td>
															<td>OSX.4+</td>
															<td class="center">522.1</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Webkit</td>
															<td>OmniWeb 5.5</td>
															<td>OSX.4+</td>
															<td class="center">420</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Webkit</td>
															<td>iPod Touch / iPhone</td>
															<td>iPod</td>
															<td class="center">420.1</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Webkit</td>
															<td>S60</td>
															<td>S60</td>
															<td class="center">413</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Opera 7.0</td>
															<td>Win 95+ / OSX.1+</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Opera 7.5</td>
															<td>Win 95+ / OSX.2+</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Opera 8.0</td>
															<td>Win 95+ / OSX.2+</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Opera 8.5</td>
															<td>Win 95+ / OSX.2+</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Opera 9.0</td>
															<td>Win 95+ / OSX.3+</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Opera 9.2</td>
															<td>Win 88+ / OSX.3+</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Opera 9.5</td>
															<td>Win 88+ / OSX.3+</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Opera for Wii</td>
															<td>Wii</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Nokia N800</td>
															<td>N800</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>Presto</td>
															<td>Nintendo DS browser</td>
															<td>Nintendo DS</td>
															<td class="center">8.5</td>
															<td class="center">C/A<sup>1</sup></td>
														</tr>
														<tr class="gradeC">
															<td>KHTML</td>
															<td>Konqureror 3.1</td>
															<td>KDE 3.1</td>
															<td class="center">3.1</td>
															<td class="center">C</td>
														</tr>
														<tr class="gradeA">
															<td>KHTML</td>
															<td>Konqureror 3.3</td>
															<td>KDE 3.3</td>
															<td class="center">3.3</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeA">
															<td>KHTML</td>
															<td>Konqureror 3.5</td>
															<td>KDE 3.5</td>
															<td class="center">3.5</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeX">
															<td>Tasman</td>
															<td>Internet Explorer 4.5</td>
															<td>Mac OS 8-9</td>
															<td class="center">-</td>
															<td class="center">X</td>
														</tr>
														<tr class="gradeC">
															<td>Tasman</td>
															<td>Internet Explorer 5.1</td>
															<td>Mac OS 7.6-9</td>
															<td class="center">1</td>
															<td class="center">C</td>
														</tr>
														<tr class="gradeC">
															<td>Tasman</td>
															<td>Internet Explorer 5.2</td>
															<td>Mac OS 8-X</td>
															<td class="center">1</td>
															<td class="center">C</td>
														</tr>
														<tr class="gradeA">
															<td>Misc</td>
															<td>NetFront 3.1</td>
															<td>Embedded devices</td>
															<td class="center">-</td>
															<td class="center">C</td>
														</tr>
														<tr class="gradeA">
															<td>Misc</td>
															<td>NetFront 3.4</td>
															<td>Embedded devices</td>
															<td class="center">-</td>
															<td class="center">A</td>
														</tr>
														<tr class="gradeX">
															<td>Misc</td>
															<td>Dillo 0.8</td>
															<td>Embedded devices</td>
															<td class="center">-</td>
															<td class="center">X</td>
														</tr>
														<tr class="gradeX">
															<td>Misc</td>
															<td>Links</td>
															<td>Text only</td>
															<td class="center">-</td>
															<td class="center">X</td>
														</tr>
														<tr class="gradeX">
															<td>Misc</td>
															<td>Lynx</td>
															<td>Text only</td>
															<td class="center">-</td>
															<td class="center">X</td>
														</tr>
														<tr class="gradeC">
															<td>Misc</td>
															<td>IE Mobile</td>
															<td>Windows Mobile 6</td>
															<td class="center">-</td>
															<td class="center">C</td>
														</tr>
														<tr class="gradeC">
															<td>Misc</td>
															<td>PSP browser</td>
															<td>PSP</td>
															<td class="center">-</td>
															<td class="center">C</td>
														</tr>
														<tr class="gradeU">
															<td>Other browsers</td>
															<td>All others</td>
															<td>-</td>
															<td class="center">-</td>
															<td class="center">U</td>
														</tr>
													</tbody>
												</table>
										        	
										    </div>
										    <!-- end content-->
									    </div>
									    <!-- end wrap div -->
									</div>
									<!-- end widget -->
								</article>
							</div>
							
							<!-- end row-fluid -->

							<!-- row-fluid -->
							
							<div class="row-fluid">
								<article class="span12">
									<!-- new widget -->
									<div class="jarviswidget" id="widget-id-2">
									    <header>
									        <h2>Static table with borders only</h2>                           
									    </header>
									    <!-- wrap div -->
									    <div>
									    
									        <div class="jarviswidget-editbox">
									            <div>
									                <label>Title:</label>
									                <input type="text" />
									            </div>
									            <div>
									                <label>Styles:</label>
									                <span data-widget-setstyle="purple" class="purple-btn"></span>
									                <span data-widget-setstyle="navyblue" class="navyblue-btn"></span>
									                <span data-widget-setstyle="green" class="green-btn"></span>
									                <span data-widget-setstyle="yellow" class="yellow-btn"></span>
									                <span data-widget-setstyle="orange" class="orange-btn"></span>
									                <span data-widget-setstyle="pink" class="pink-btn"></span>
									                <span data-widget-setstyle="red" class="red-btn"></span>
									                <span data-widget-setstyle="darkgrey" class="darkgrey-btn"></span>
									                <span data-widget-setstyle="black" class="black-btn"></span>
									            </div>
									        </div>
            
									        <div class="inner-spacer"> 
									        <!-- content goes here -->
												<table class="table table-bordered" id="s-table-bordered">
													<thead>
														<tr>
															<th>Column name</th>
															<th>Column name</th>
															<th>Column name</th>
															<th>Column name</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Row 1</td>
															<td>Row 2</td>
															<td>Row 3</td>
															<td>Row 4</td>
														</tr>
														<tr>
															<td>Row 1</td>
															<td>Row 2</td>
															<td>Row 3</td>
															<td>Row 4</td>
														</tr>
														<tr>
															<td>Row 1</td>
															<td>Row 2</td>
															<td>Row 3</td>
															<td>Row 4</td>
														</tr>
														<tr>
															<td>Row 1</td>
															<td>Row 2</td>
															<td>Row 3</td>
															<td>Row 4</td>
														</tr>
														<tr>
															<td>Row 1</td>
															<td>Row 2</td>
															<td>Row 3</td>
															<td>Row 4</td>
														</tr>
														<tr>
															<td>Row 1</td>
															<td>Row 2</td>
															<td>Row 3</td>
															<td>Row 4</td>
														</tr>
													</tbody>
												</table>
										    </div>
										    <!-- end content-->
									    </div>
									    <!-- end wrap div -->
									</div>
									<!-- end widget -->
								</article>
							</div>
							
							<!-- end row-fluid -->

							<!-- row-fluid -->
							
							<div class="row-fluid">
								<article class="span12">
									<!-- new widget -->
									<div class="jarviswidget" id="widget-id-3">
									    <header>
									        <h2>Static table with stripes and borders</h2>                           
									    </header>
									    <!-- wrap div -->
									    <div>
									    
									        <div class="jarviswidget-editbox">
									            <div>
									                <label>Title:</label>
									                <input type="text" />
									            </div>
									            <div>
									                <label>Styles:</label>
									                <span data-widget-setstyle="purple" class="purple-btn"></span>
									                <span data-widget-setstyle="navyblue" class="navyblue-btn"></span>
									                <span data-widget-setstyle="green" class="green-btn"></span>
									                <span data-widget-setstyle="yellow" class="yellow-btn"></span>
									                <span data-widget-setstyle="orange" class="orange-btn"></span>
									                <span data-widget-setstyle="pink" class="pink-btn"></span>
									                <span data-widget-setstyle="red" class="red-btn"></span>
									                <span data-widget-setstyle="darkgrey" class="darkgrey-btn"></span>
									                <span data-widget-setstyle="black" class="black-btn"></span>
									            </div>
									        </div>
            
									        <div class="inner-spacer"> 
									        <!-- content goes here -->
											<table class="table table-bordered table-striped responsive" id="s-table">
														<thead>
															<tr>
																<th>Column name</th>
																<th>Column name</th>
																<th>Column name</th>
																<th>Column name</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Row 1</td>
																<td>Row 2</td>
																<td>Row 3</td>
																<td>Row 4</td>
															</tr>
															<tr>
																<td>Row 1</td>
																<td>Row 2</td>
																<td>Row 3</td>
																<td>Row 4</td>
															</tr>
															<tr>
																<td>Row 1</td>
																<td>Row 2</td>
																<td>Row 3</td>
																<td>Row 4</td>
															</tr>
															<tr>
																<td>Row 1</td>
																<td>Row 2</td>
																<td>Row 3</td>
																<td>Row 4</td>
															</tr>
															<tr>
																<td>Row 1</td>
																<td>Row 2</td>
																<td>Row 3</td>
																<td>Row 4</td>
															</tr>
															<tr>
																<td>Row 1</td>
																<td>Row 2</td>
																<td>Row 3</td>
																<td>Row 4</td>
															</tr>
														</tbody>
														</table>
										    </div>
										    <!-- end content-->
									    </div>
									    <!-- end wrap div -->
									</div>
									<!-- end widget -->
								</article>
							</div>
							
							<!-- end row-fluid -->


							<!-- row-fluid -->
							
							<div class="row-fluid">
								
								<!-- article -->
								<article class="span6">
									<!-- new widget -->
									<div class="jarviswidget" id="widget-id-4">
									    <header>
									        <h2>Default Table with hover</h2>                           
									    </header>
									    <!-- wrap div -->
									    <div>
									    
									        <div class="jarviswidget-editbox">
									            <div>
									                <label>Title:</label>
									                <input type="text" />
									            </div>
									            <div>
									                <label>Styles:</label>
									                <span data-widget-setstyle="purple" class="purple-btn"></span>
									                <span data-widget-setstyle="navyblue" class="navyblue-btn"></span>
									                <span data-widget-setstyle="green" class="green-btn"></span>
									                <span data-widget-setstyle="yellow" class="yellow-btn"></span>
									                <span data-widget-setstyle="orange" class="orange-btn"></span>
									                <span data-widget-setstyle="pink" class="pink-btn"></span>
									                <span data-widget-setstyle="red" class="red-btn"></span>
									                <span data-widget-setstyle="darkgrey" class="darkgrey-btn"></span>
									                <span data-widget-setstyle="black" class="black-btn"></span>
									            </div>
									        </div>
            
									        <div class="inner-spacer"> 
									        <!-- content goes here -->
												<table class="table text-left table-hover" id="just-table">
													<thead>
														<tr>
															<th>#</th>
															<th>First Name</th>
															<th>Last Name</th>
															<th>Username</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Mark</td>
															<td>Otto</td>
															<td>@mdo</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Jacob</td>
															<td>Thornton</td>
															<td>@fat</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Larry</td>
															<td>the Bird</td>
															<td>@twitter</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Wise</td>
															<td>Man</td>
															<td>@myorange</td>
														</tr>
													</tbody>
												</table>
										    </div>
										    <!-- end content-->
									    </div>
									    <!-- end wrap div -->
									</div>
									<!-- end widget -->
								</article>
								<!-- end article -->
								
								<!-- article -->
								<article class="span6">
									<!-- new widget -->
									<div class="jarviswidget" id="widget-id-5">
									    <header>
									        <h2>Optional row classes</h2>                           
									    </header>
									    <!-- wrap div -->
									    <div>
									    
									        <div class="jarviswidget-editbox">
									            <div>
									                <label>Title:</label>
									                <input type="text" />
									            </div>
									            <div>
									                <label>Styles:</label>
									                <span data-widget-setstyle="purple" class="purple-btn"></span>
									                <span data-widget-setstyle="navyblue" class="navyblue-btn"></span>
									                <span data-widget-setstyle="green" class="green-btn"></span>
									                <span data-widget-setstyle="yellow" class="yellow-btn"></span>
									                <span data-widget-setstyle="orange" class="orange-btn"></span>
									                <span data-widget-setstyle="pink" class="pink-btn"></span>
									                <span data-widget-setstyle="red" class="red-btn"></span>
									                <span data-widget-setstyle="darkgrey" class="darkgrey-btn"></span>
									                <span data-widget-setstyle="black" class="black-btn"></span>
									            </div>
									        </div>
            
									        <div class="inner-spacer"> 
									        <!-- content goes here -->
													<table class="table text-left">
														<thead>
															<tr>
																<th>#</th>
																<th>Product</th>
																<th>Payment Taken</th>
																<th>Status</th>
															</tr>
														</thead>
														<tbody>
															<tr class="success">
																<td>1</td>
																<td>TB - Monthly</td>
																<td>01/04/2012</td>
																<td>Approved</td>
															</tr>
															<tr class="error">
																<td>2</td>
																<td>TB - Monthly</td>
																<td>02/04/2012</td>
																<td>Declined</td>
															</tr>
															<tr class="warning">
																<td>3</td>
																<td>TB - Monthly</td>
																<td>03/04/2012</td>
																<td>Pending</td>
															</tr>
															<tr class="info">
																<td>4</td>
																<td>TB - Monthly</td>
																<td>04/04/2012</td>
																<td>Call in to confirm</td>
															</tr>
														</tbody>
													</table>
										    </div>
										    <!-- end content-->
									    </div>
									    <!-- end wrap div -->
									</div>
									<!-- end widget -->
								</article>
								<!-- end article -->
								
							</div>
							
							<!-- end row-fluid -->


							<!-- row-fluid -->
							
							<div class="row-fluid">
								<article class="span12">
									<!-- new widget -->
									<div class="jarviswidget" id="widget-id-6">
									    <header>
									        <h2>Static table with checkboxes</h2>                           
									    </header>
									    <!-- wrap div -->
									    <div>
									    
									        <div class="jarviswidget-editbox">
									            <div>
									                <label>Title:</label>
									                <input type="text" />
									            </div>
									            <div>
									                <label>Styles:</label>
									                <span data-widget-setstyle="purple" class="purple-btn"></span>
									                <span data-widget-setstyle="navyblue" class="navyblue-btn"></span>
									                <span data-widget-setstyle="green" class="green-btn"></span>
									                <span data-widget-setstyle="yellow" class="yellow-btn"></span>
									                <span data-widget-setstyle="orange" class="orange-btn"></span>
									                <span data-widget-setstyle="pink" class="pink-btn"></span>
									                <span data-widget-setstyle="red" class="red-btn"></span>
									                <span data-widget-setstyle="darkgrey" class="darkgrey-btn"></span>
									                <span data-widget-setstyle="black" class="black-btn"></span>
									            </div>
									        </div>
            
									        <div class="inner-spacer"> 
									        <!-- content goes here -->
												<table class="table table-bordered table-striped checked-in responsive has-checkbox" id="sc-table">
													<thead>
														<tr>
															<th class="first"><i class="icon-resize-vertical"></i></th>
															<th>Column name</th>
															<th>Column name</th>
															<th>Column name</th>
															<th>Column name</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
															<input type="checkbox">
															</td>
															<td>Row 1</td>
															<td>Row 2</td>
															<td>Row 3</td>
															<td>Row 4</td>
														</tr>
														<tr>
															<td>
															<input type="checkbox">
															</td>
															<td>Row 1</td>
															<td>Row 2</td>
															<td>Row 3</td>
															<td>Row 4</td>
														</tr>
														<tr>
															<td>
															<input type="checkbox">
															</td>
															<td>Row 1</td>
															<td>Row 2</td>
															<td>Row 3</td>
															<td>Row 4</td>
														</tr>
														<tr>
															<td>
															<input type="checkbox">
															</td>
															<td>Row 1</td>
															<td>Row 2</td>
															<td>Row 3</td>
															<td>Row 4</td>
														</tr>
														<tr>
															<td>
															<input type="checkbox">
															</td>
															<td>Row 1</td>
															<td>Row 2</td>
															<td>Row 3</td>
															<td>Row 4</td>
														</tr>
														<tr>
															<td>
															<input type="checkbox">
															</td>
															<td>Row 1</td>
															<td>Row 2</td>
															<td>Row 3</td>
															<td>Row 4</td>
														</tr>
													</tbody>
												</table>
												
										    </div>
										    <!-- end content-->
									    </div>
									    <!-- end wrap div -->
									</div>
									<!-- end widget -->
								</article>
							</div>
							
							<!-- end row-fluid -->

						</section>
						<!-- end widget grid -->
					</div>		
				</div>
				<!-- end main content -->
			
				<!-- aside right on high res -->
				<aside class="right">
					
					<!-- sparkline stats -->
					<ul class="mystats indented">
		                <li class="first">
		                    <h1><span>My Balance:</span>$17,349</h1>
		                    <div class="mychart" id="balance" style="width:35px"></div>
		                </li>
		                <li>
		                    <h1><span>Impressions:</span>145k+</h1>
		                    <div class="mychart" id="clicks" style="width:35px"></div>
		                </li>
		                <li>
		                    <h1><span>Subscribers:</span>1,120</h1>
		                    <div class="mychart" id="subscribe" style="width:35px"></div>
		                </li>
		                <li class="last">
		                    <h1><span>Support Ticket:</span>945+</h1>
		                    <div class="mychart" id="support" style="width:35px"></div>
		                </li>
		            </ul>
		            <div class="divider"></div>
		            <!-- end sparkline stats -->
					
					<!-- aside item: Inbox -->
					<!-- inbox message 1-->
					<div class="mini-inbox">
						<div class="alert inbox">
							<button type="button" class="close" data-dismiss="alert">
								×
							</button>
							
							<a href="javascript:void(0)">
								<img src="img/email-important.png" width="22" height="18" alt="important mail" />
								From:David S...
							</a>
							Dear Victoria, Congratulations! You work has been uploade...
						</div>
						<!-- inbox message 2-->
						<div class="alert inbox">
							<button type="button" class="close" data-dismiss="alert">
								×
							</button>
							<a href="javascript:void(0)">
								<img src="img/email-unread.png" width="22" height="18" alt="important mail" />
								Re:Last Year...
							</a>
							Hey Vicky, find attached! Thx :-)
						</div>
						<!-- inbox message 3-->
						<div class="alert inbox last-child">
							<button type="button" class="close" data-dismiss="alert">
								×
							</button>
							<a href="javascript:void(0)">
								<img src="img/email-unread.png" width="22" height="18" alt="important mail" />
								Company Party
							</a>
							Hi, You have been cordially invited to join new year...
						</div>
						
					</div>
					<div class="divider"></div>
					<!-- end aside item: Inbox -->
					
					<!-- aside item: Tiny Stats -->
					<div class="number-stats">
				    	<ul>
				        	<li>4579<span>visitors</span></li>
				            <li>571<span>orders</span></li>
				            <li>879<span>reviews</span></li>
				        </ul>
				    </div>
				    <div class="divider"></div>
					<!-- end aside item: Tiny Stats -->
					
					<!-- aside buttons -->
					<div class="aside-buttons">
		                <a href="javascript:void(0)" title="" class="btn btn-primary">Create an Invoice</a>
		            </div>
		            <div class="divider"></div>
		            <!-- end aside buttons -->
		            
				</aside>
				
				<!-- end aside right -->
			</div>
			
	    </div><!--/.fluid-container-->
		<div class="push"></div>
	</div>
	<!-- end .height-wrapper -->	
	
	<!-- footer -->
	
	<!-- if you like you can insert your footer here -->
	
	<!-- end footer -->

    <!--================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/jarvis/js/libs/jquery.min.js"><\/script>')</script>
    	<!-- OPTIONAL: Use this migrate script for plugins that are not supported by jquery 1.9+ 
		<script src="js/libs/jquery.migrate-1.0.0.min.js"></script>-->
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <script>window.jQuery.ui || document.write('<script src="<?php echo base_url();?>assets/jarvis/js/libs/jquery.ui.min.js"><\/script>')</script>
    
    <!-- IMPORTANT: Jquery Touch Punch is always placed under Jquery UI -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.ui.touch-punch.min.js"></script>
    
    <!-- REQUIRED: Mobile responsive menu generator -->
	<script src="<?php echo base_url();?>assets/jarvis/js/include/selectnav.min.js"></script>

	<!-- REQUIRED: Datatable components -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.accordion.min.js"></script>

	<!-- REQUIRED: Toastr & Jgrowl notifications  -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/toastr.min.js"></script>
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.jgrowl.min.js"></script>
    
    <!-- REQUIRED: Sleek scroll UI  -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/slimScroll.min.js"></script>
	
	<!-- REQUIRED: Datatable components -->
	<script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>assets/jarvis/js/include/DT_bootstrap.js"></script>

    <!-- REQUIRED: Form element skin  -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.uniform.min.js"></script> 

	<!-- REQUIRED: AmCharts  -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/amchart/amcharts.js"></script>
	<script src="<?php echo base_url();?>assets/jarvis/js/include/amchart/amchart-draw1.js"></script>

	<script type="text/javascript">
		var ismobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));	
	    if(!ismobile){
	    	
	    	/** ONLY EXECUTE THESE CODES IF MOBILE DETECTION IS FALSE **/
	    	
	    	/* REQUIRED: Datatable PDF/Excel output componant */
	    	
	    	document.write('<script src="<?php echo base_url();?>assets/jarvis/js/include/ZeroClipboard.min.js"><\/script>');
	    	document.write('<script src="<?php echo base_url();?>assets/jarvis/js/include/TableTools.min.js"><\/script>');
	    	document.write('<script src="<?php echo base_url();?>assets/jarvis/js/include/select2.min.js"><\/script>');
	    	document.write('<script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.excanvas.min.js"><\/script>');
	    	document.write('<script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.placeholder.min.js"><\/script>');
	    }else{
	    	
	    	/** ONLY EXECUTE THESE CODES IF MOBILE DETECTION IS TRUE **/

	    	document.write('<script src="<?php echo base_url();?>assets/jarvis/js/include/responsive-tables.min.js"><\/script>');
	    }
	</script>

	<!-- REQUIRED: iButton -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.ibutton.min.js"></script>
	
	<!-- REQUIRED: Justgage animated charts -->
	<script src="<?php echo base_url();?>assets/jarvis/js/include/raphael.2.1.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/jarvis/js/include/justgage.min.js"></script>
    
    <!-- REQUIRED: Morris Charts -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/morris.min.js"></script> 
    <script src="<?php echo base_url();?>assets/jarvis/js/include/morris-chart-settings.js"></script> 
    
    <!-- REQUIRED: Animated pie chart -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.easy-pie-chart.min.js"></script>
    
    <!-- REQUIRED: Functional Widgets -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jarvis.widget.min.js"></script>
    <script src="<?php echo base_url();?>assets/jarvis/js/include/mobiledevices.min.js"></script>
    <!-- DISABLED (only needed for IE7 <script src="js/include/json2.js"></script> -->
	
	<!-- REQUIRED: Full Calendar -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.fullcalendar.min.js"></script>		
    
    <!-- REQUIRED: Flot Chart Engine -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.flot.cust.min.js"></script>			
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.flot.resize.min.js"></script>		
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.flot.tooltip.min.js"></script>		
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.flot.orderBar.min.js"></script> 	
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.flot.fillbetween.min.js"></script>	
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.flot.pie.min.js"></script> 	 
    
    <!-- REQUIRED: Sparkline Charts -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.sparkline.min.js"></script>

	<!-- REQUIRED: Infinite Sliding Menu (used with inbox page) -->
	<script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.inbox.slashc.sliding-menu.js"></script> 

	<!-- REQUIRED: Form validation plugin -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.validate.min.js"></script>
    
    <!-- REQUIRED: Progress bar animation -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/bootstrap-progressbar.min.js"></script>
    
    <!-- REQUIRED: wysihtml5 editor -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/wysihtml5-0.3.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/jarvis/js/include/bootstrap-wysihtml5.min.js"></script>

	<!-- REQUIRED: Masked Input -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/jquery.maskedinput.min.js"></script>
    
    <!-- REQUIRED: Bootstrap Date Picker -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/bootstrap-datepicker.min.js"></script>

    <!-- REQUIRED: Bootstrap Wizard -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/bootstrap.wizard.min.js"></script> 
    
	<!-- REQUIRED: Bootstrap Color Picker -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/bootstrap-colorpicker.min.js"></script>

    
	<!-- REQUIRED: Bootstrap Time Picker -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/bootstrap-timepicker.min.js"></script> 
    
    <!-- REQUIRED: Bootstrap Prompt -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/bootbox.min.js"></script>
    
    <!-- REQUIRED: Bootstrap engine -->
    <script src="<?php echo base_url();?>assets/jarvis/js/include/bootstrap.min.js"></script>
    
    <!-- DO NOT REMOVE: Theme Config file -->
    <script src="<?php echo base_url();?>assets/jarvis/js/config.js"></script>
    
    <!-- d3 library placed at the bottom for better performance -->
    <!-- DISABLED  <script src="js/include/d3.v3.min.js"></script> -->
    <!-- DISABLED  <script src="js/include/adv_charts/d3-chart-1.js"></script> -->
    <!-- DISABLED  <script src="js/include/adv_charts/d3-chart-2.js"></script> -->

    <!-- Google Geo Chart -->
    <!-- DISABLED <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script> -->
    <!-- DISABLED <script type='text/javascript' src='https://www.google.com/jsapi'></script>-->
    <!-- DISABLED <script src="js/include/adv_charts/geochart.js"></script> -->
    
    <!-- end scripts -->
  </body>
</html>
