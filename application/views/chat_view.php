<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Messages - AMI</title>
<meta name="description" content="overview &amp; stats"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!--basic styles-->
<link href="<?php echo base_url();?>
assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>
assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>
assets/css/font-awesome.min.css" /> 
<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
<!--page specific plugin styles-->
<!--fonts-->
<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->
<!--ace styles-->
<link rel="stylesheet" href="<?php echo base_url();?>
assets/css/font.css" />
<link rel="stylesheet" href="<?php echo base_url();?>
assets/css/style.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/<?php if($this->session->userdata("permission") == "Client") { echo 'client'; } else if($this->session->userdata("permission") == "Trainer") { echo 'training'; } else if($this->session->userdata("permission") == "HR") { echo 'hr'; } else if($this->session->userdata("permission") == "Trainee") { echo 'manpower'; } else if($this->session->userdata("permission") == "Administrator") { echo 'admin'; } ?>/custom.css" />
<link rel="stylesheet" href="<?php echo base_url();?>
assets/css/style-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>
assets/css/style-skins.min.css" /> 
<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->
<!--inline styles if any-->
</head>
<body>
<div class="navbar navbar-inverse">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a href="#" class="brand">
			<small>
			<i class="icon-group"></i>
			AMI - Training Center Administration </small>
			</a>
			<!--/.brand-->
			<ul class="nav ace-nav pull-right">
				<li class="grey">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">
				<i class="icon-tasks"></i>
				<span class="badge badge-grey">4</span>
				</a>
				<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
					<li class="nav-header">
					<i class="icon-ok"></i>
					4 Tasks to complete </li>
					<li>
					<a href="#">
					<div class="clearfix">
						<span class="pull-left">Task 1</span>
						<span class="pull-right">65%</span>
					</div>
					<div class="progress progress-mini ">
						<div style="width:65%" class="bar">
						</div>
					</div>
					</a>
					</li>
					<li>
					<a href="#">
					<div class="clearfix">
						<span class="pull-left">Task 2</span>
						<span class="pull-right">35%</span>
					</div>
					<div class="progress progress-mini progress-danger">
						<div style="width:35%" class="bar">
						</div>
					</div>
					</a>
					</li>
					<li>
					<a href="#">
					<div class="clearfix">
						<span class="pull-left">Task 3</span>
						<span class="pull-right">15%</span>
					</div>
					<div class="progress progress-mini progress-warning">
						<div style="width:15%" class="bar">
						</div>
					</div>
					</a>
					</li>
					<li>
					<a href="#">
					<div class="clearfix">
						<span class="pull-left">Task 4</span>
						<span class="pull-right">90%</span>
					</div>
					<div class="progress progress-mini progress-success progress-striped active">
						<div style="width:90%" class="bar">
						</div>
					</div>
					</a>
					</li>
					<li>
					<a href="#">
					See tasks with details <i class="icon-arrow-right"></i>
					</a>
					</li>
				</ul>
				</li>
				<li class="purple">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">
				<i class="icon-bell-alt icon-only icon-animated-bell"></i>
				<span class="badge badge-important">8</span>
				</a>
				<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
					<li class="nav-header">
					<i class="icon-warning-sign"></i>
					8 Notifications </li>
					<li>
					<a href="#">
					<div class="clearfix">
						<span class="pull-left">
						<i class="btn btn-mini no-hover btn-pink icon-comment"></i>
						New Comments </span>
						<span class="pull-right badge badge-info">+12</span>
					</div>
					</a>
					</li>
					<li>
					<a href="#">
					<i class="btn btn-mini btn-primary icon-user"></i>
					Bob just signed up as an editor ... </a>
					</li>
					<li>
					<a href="#">
					<div class="clearfix">
						<span class="pull-left">
						<i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
						New Members </span>
						<span class="pull-right badge badge-success">+8</span>
					</div>
					</a>
					</li>
					<li>
					<a href="#">
					<div class="clearfix">
						<span class="pull-left">
						<i class="btn btn-mini no-hover btn-info icon-twitter"></i>
						Followers </span>
						<span class="pull-right badge badge-info">+11</span>
					</div>
					</a>
					</li>
					<li>
					<a href="#">
					See all notifications <i class="icon-arrow-right"></i>
					</a>
					</li>
				</ul>
				</li>
				<li class="green">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">
				<i class="icon-envelope-alt icon-only icon-animated-vertical"></i>
				<span class="badge badge-success">5</span>
				</a>
				<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
					<li class="nav-header">
					<i class="icon-envelope"></i>
					5 Messages </li>
					<li>
					<a href="#">
					<img src="<?php echo base_url();?>assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" /> <span class="msg-body">
					<span class="msg-title">
					<span class="blue">Alex:</span>
					Ciao sociis natoque penatibus et auctor ... </span>
					<span class="msg-time">
					<i class="icon-time"></i>
					<span>a moment ago</span>
					</span>
					</span>
					</a>
					</li>
					<li>
					<a href="#">
					<img src="<?php echo base_url();?>assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" /> <span class="msg-body">
					<span class="msg-title">
					<span class="blue">Susan:</span>
					Vestibulum id ligula porta felis euismod ... </span>
					<span class="msg-time">
					<i class="icon-time"></i>
					<span>20 minutes ago</span>
					</span>
					</span>
					</a>
					</li>
					<li>
					<a href="#">
					<img src="<?php echo base_url();?>assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" /> <span class="msg-body">
					<span class="msg-title">
					<span class="blue">Bob:</span>
					Nullam quis risus eget urna mollis ornare ... </span>
					<span class="msg-time">
					<i class="icon-time"></i>
					<span>3:15 pm</span>
					</span>
					</span>
					</a>
					</li>
					<li>
					<a href="messenger">
					See all messages <i class="icon-arrow-right"></i>
					</a>
					</li>
				</ul>
				</li>
				<li class="light-blue user-profile">
				<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
				<img class="nav-user-photo" src="<?php echo base_url();?>assets/avatars/user.jpg" alt="User's Photo" /> <span id="user_info">
				<small>Welcome,</small>
				<?php echo $this->session->userdata('username');?></span>
				<i class="icon-caret-down"></i>
				</a>
				<ul class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer" id="user_menu">
					<li>
					<a href="#">
					<i class="icon-cog"></i>
					Settings </a>
					</li>
					<li>
					<a href="#">
					<i class="icon-user"></i>
					Profile </a>
					</li>
					<li class="divider"></li>
					<li>
					<a href="<?php echo base_url();?>index.php/logout"> <i class="icon-off"></i>
					Logout </a>
					</li>
				</ul>
				</li>
			</ul>
			<!--/.ace-nav-->
		</div>
		<!--/.container-fluid-->
	</div>
	<!--/.navbar-inner-->
</div>
<div class="container-fluid" id="main-container">
	<a id="menu-toggler" href="#">
	<span></span>
	</a>
	<div id="sidebar">
		<div id="sidebar-shortcuts">
			<div id="sidebar-shortcuts-large">
				<button class="btn btn-small btn-success">
				<i class="icon-ok"></i>
				</button>
				<button class="btn btn-small btn-info">
				<i class="icon-puzzle-piece"></i>
				</button>
				<button class="btn btn-small btn-danger">
				<i class="icon-star"></i>
				</button>
				<button class="btn btn-small btn-warning">
				<i class="icon-print"></i>
				</button>
			</div>
			<div id="sidebar-shortcuts-mini">
				<span class="btn btn-success"></span>
				<span class="btn btn-info"></span>
				<span class="btn btn-danger"></span>
				<span class="btn btn-warning"></span>
			</div>
		</div>
		<!--#sidebar-shortcuts-->
		<ul class="nav nav-list">
			<li>
			<a href="dashboard">
			<i class="icon-bar-chart"></i>
			<span>Control Panel</span>
			</a>
			</li>
			
		</ul>
		<!--/.nav-list-->
		<div id="sidebar-collapse">
			<i class="icon-double-angle-left"></i>
		</div>
	</div>
	<div id="main-content" class="clearfix">
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
				<i class="icon-home"></i>
				<a href="dashboard">Home</a>
				<span class="divider">
				<i class="icon-angle-right"></i>
				</span>
				</li>
				<li class="active">Messages</li>
			</ul>
			<!--.breadcrumb-->
			<div id="nav-search">
				<form class="form-search">
					<span class="input-icon">
					<input type="text" placeholder="Search ..." class="input-small search-query" id="nav-search-input" autocomplete="off"/>
					<i class="icon-search" id="nav-search-icon"></i>
					</span>
				</form>
			</div>
			<!--#nav-search-->
		</div>
		<div id="page-content" class="clearfix">
			
			<!--/.page-header-->
			<div class="row-fluid">
				<!--PAGE CONTENT STARTS HERE-->
				<div class="span8">
					<div class="widget-box" style="height: 520px">
						<div class="widget-header widget-header-small header-color-blue">
							<h4 class="smaller">
							<i class="icon-comment blue"></i>
							Conversation <small>AMI Messenger</small>
							</h4>
						</div>
						<div class="widget-body">
							<div class="widget-main no-padding">
								
								<!-- LOAD MESSAGES HERE -->
								<div class="slimScrollDiv">
									<div class="dialogs">
								<?php if(isset($records)) : foreach($records as $row) : ?>
								
										
										<div class="itemdiv dialogdiv">
											<div class="user">
												<img alt="" src="assets/avatars/user.jpg">
											</div>
											<div class="body">
												<div class="time">
													<i class="icon-time"></i>
													<span class="orange"><?php echo $row->time_sent?></span>
												</div>
												<div class="name">
													<a href="#"><?php echo $row->full_name?></a>
													<span class="label label-info arrowed arrowed-in-right"><?php echo $row->permission?></span>
												</div>
												<div class="text">
													<?php echo $row->message?>
												</div>
												<div class="tools">
													<a href="#" class="btn btn-minier btn-info">
													<i class="icon-only icon-share-alt"></i>
													</a>
												</div>
											</div>
										</div>
										
									</div>
									<div class="slimScrollBar ui-draggable">
									</div>
									<div class="slimScrollRail">

								<?php endforeach;?>
								<?php endif; ?>

									</div>
								</div>

								<!-- MESSAGES ENDS HERE -->
								<form>
									<div class="form-actions input-append">
										<input placeholder="Type your message here ..." type="text" style="width:85%" name="message">
										
										<button class="btn btn-small btn-info no-radius" onclick="return false;">
										<i class="icon-share-alt"></i>
										<span class="hidden-phone">Send</span>
										</button>
									</div>
								</form>
							</div>
							<!--/widget-main-->
						</div>
						<!--/widget-body-->
					</div>
				</div>
				<div class="span4">
					<div class="widget-box" style="height: 520px">
						<div class="widget-header widget-header-small">
							<h4 class="smaller">
							AMI Staffs <small></small>
							</h4>
						</div>
						<div class="widget-body">
							<div class="widget-main">
								<div class="slimScrollDiv">
									<table class="table">
										<?php if(isset($user_records)) : foreach($user_records as $row) : ?>
										<tr>

											<td>
												<img class="nav-user-photo" src="assets/avatars/user.jpg" style="width: 30px; margin-right: 10px;">
												<i class="icon-circle pull-right" style="color:#387038;"></i><a href=""><?php echo $row->first_name?> <?php echo $row->last_name?></a>
											</td>
										</tr>
										<?php endforeach;?>
										<?php endif; ?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--PAGE CONTENT ENDS HERE-->
			</div>
			<!--/row-->
		</div>
		<!--/#page-content-->
	</div>
	<!--/#main-content-->
</div>
<!--/.fluid-container#main-container-->
<a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
<i class="icon-double-angle-up icon-only bigger-110"></i>
</a>
<!--basic scripts-->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
<script type="text/javascript">
			//window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery-1.9.1.min.js'>"+"<"+"/script>");
			window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery.js'>"+"<"+"/script>");
		</script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<!--page specific plugin scripts-->
<!--[if lte IE 8]>
		  <script src="<?php echo base_url();?>assets/js/excanvas.min.js"></script>
		<![endif]-->
<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.easy-pie-chart.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.resize.min.js"></script>
<!--ace scripts-->
<script src="<?php echo base_url();?>assets/js/style-elements.min.js"></script>
<script src="<?php echo base_url();?>assets/js/style.min.js"></script>
<!--inline scripts related to this page-->
<script type="text/javascript">

	$(document).ready(function(){
	    $('.slimScrollDiv').slimScroll({
	        height: '400px'
	    });
	});
</script>
</body>
</html>