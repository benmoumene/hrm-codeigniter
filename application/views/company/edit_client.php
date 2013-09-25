<?php if($this->session->userdata('permission') != 'Administrator') { redirect(base_url() . 'index.php/404');} ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Dashboard - AMI</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

		<!--ace styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui-1.10.3.full.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.gritter.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace/ace.min.css" />		
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/<?php echo $this->session->userdata('permission');?>/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-skins.min.css" />
		

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
		<style type="text/css">
			.no-close .ui-dialog-titlebar-close {display: none }
		</style>
	</head>

	<body>
			<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-group"></i>
							AMI - HRTMS Administration
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
					<!--	
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-ok"></i>
									Tasks to complete
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 1</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="bar"></div>
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
											<div style="width:35%" class="bar"></div>
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
											<div style="width:15%" class="bar"></div>
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
											<div style="width:90%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See tasks with details
										<i class="icon-arrow-right"></i>
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
									Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-mini btn-primary icon-user"></i>
										Error Occured
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
												New Members
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-info icon-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See all notifications
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
					-->
						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope-alt icon-only icon-animated-vertical"></i>
								<span class="badge badge-success"></span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-envelope"></i>
									Messages
								</li>

								

								<li>
									<a href="messenger">
										See all messages
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue user-profile">
							<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url();?>assets/avatars/user.jpg" alt="User's Photo" />
								<span id="user_info">
									<small>Welcome,</small>
									<?php echo $this->session->userdata('username');?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer" id="user_menu">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url();?>logout">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="container-fluid" id="main-container">
		
			<a id="menu-toggler" href="#">
				<span></span>
			</a>

			<div id="sidebar">
				<div id="sidebar-shortcuts">
					<div id="sidebar-shortcuts-large">
						<button class="btn btn-small btn-success">
							<i class="icon-signal"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-pencil"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-group"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-cogs"></i>
						</button>
					</div>

					<div id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div>

				<!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					
					<li class="">
						<a href="<?php echo base_url();?>dashboard">
							<i class="icon-bar-chart"></i>
							<span>Control Panel</span>
						</a>
					</li>

					
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-shield"></i>
							<span>Registration</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
						<?php if($this->session->userdata("permission") == "Administrator") {?>

							<li>
								<a href="<?php echo base_url();?>applicant/batch_control">
									<i class="icon-user"></i>
								   	<span>Batch Control</span>
								</a>
							</li>
						<?php }?>
							<li >
								<a href="<?php echo base_url();?>applicant">
									<i class="icon-archive"></i>
									<span>Applicants</span>
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>applicant/accept">
									<i class="icon-user"></i>
								   	<span>Accept</span>
								</a>
							</li>
						</ul>
					</li>


					<li>
						<a href="<?php echo base_url();?>training">
							<i class="icon-book"></i>
							<span>Training</span>
						</a>
					</li>

					<li class="active">
						<a href="<?php echo base_url();?>client">
							<i class="icon-building"></i>
							<span>Client Companies</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>deployment">
							<i class="icon-tag"></i>
							<span>Deployment Tagging</span>
						</a>
					</li>
 					<?php if($this->session->userdata("permission")=="Administrator") {?>
					<li >
						<a href="#" class="dropdown-toggle">
							<i class="icon-shield"></i>
							<span>Manage Accounts</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li  >
								<a href="<?php echo base_url();?>manage/hr">
									<i class="icon-user"></i>
									HR Department
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>manage/training">
									<i class="icon-user"></i>
									Training Department
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-cog"></i>
							<span>Administrative Tools</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">

							<li>
								<a href="<?php echo base_url();?>administrative/audit">
									<i class="icon-list"></i>
									Audit Logs
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>administrative/backup">
									<i class="icon-download-alt"></i>
									Backup &amp; Maintenance
								</a>
							</li>

							
						</ul>
					</li>
					<?php }?>
					<!--<li>
						<a href="help">
							<i class="icon-question-sign"></i>
							<span>Help</span>
						</a>
					</li>
					-->

					<li>
						<a href="about">
							<i class="icon-info"></i>
							<span>About the Developers</span>
						</a>
					</li>
			
				</ul><!--/.nav-list-->

				<div id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>


		<div id="main-content" class="clearfix">
				<div id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="<?php echo base_url();?>dashboard">Home</a>

							<span class="divider">
								<i class="icon-angle-right"></i>
							</span>
						</li>
						<li class="active">Client</li>
					</ul><!--.breadcrumb-->

					<div id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small search-query" id="nav-search-input" autocomplete="off" />
								<i class="icon-search" id="nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>

				<div id="page-content" class="clearfix">
					<div class="page-header position-relative">
						<h1>
							Clients
							<!--
							<small>
								<i class="icon-double-angle-right"></i>
								Company
							</small>
							-->
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->
						<div class="span12">
							<div class="alert alert-success">
									<b>Note:</b>
									<ul>
										<li>Here you can edit the Client information and account details</li>
										<li>Deactive or Activate client account</li>
									</ul>						
							</div>
							<div id="infoMessage" align=""><?php
						              $message = $this->session->flashdata('delete_client_message');
						              if ($message == null){}
						              else{echo $message;}
						              ?>         
							</div>


						
						</div>
					</div>
						

					<div class="row-fluid">
					<div class="span6">
					<!-- ADD HR START -->
						
						<div class="widget-box">

							<div class="widget-header">
								<h4><i class="icon-user"></i> Edit Client</h4>
								
								<span class="widget-toolbar">
									<a href="#" data-action="collapse">
										<i class="icon-chevron-up"></i>
									</a>

									<a href="#" data-action="reload">
										<i class="icon-refresh"></i>
									</a>

									
								</span>
							</div>

						
							<div class="widget-body"><div class="widget-body-inner">
								<div class="widget-main">
									<div class="row-fluid">
										<div id="infoMessage" align="center"><?php 
												$message = $this->session->flashdata('client_message');
									            $success = $this->session->flashdata('success');
									              if ($message == null){

									              }
									              else{
									              	echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>'.$message.'</div>';
									              }

									              if($success != null){
										              echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
										              echo '<div class="alert alert-success">';
										              echo $success;
										              echo '</div>';

									              }
									              else
									              {
									              	//echo 'asdfasdfasdf';
									              }
									              ?>
									    </div>
									<?php if(isset($records)) : foreach($records as $row) : ?>
										<?php $stat = $row->is_active;
											  $user_id = $row->user_id;
											  $username = $row->username;
											if ($stat == 0){
												$stat = "<button onclick=\"status_update('1')\" id=\"status_update\" value=\"$stat\" class=\"btn btn-mini btn-success\"><i class=\"icon-ok\"></i>Activate Account</button>";
												$stat .= "<input type=\"hidden\" name=\"user_id\" value=\"$user_id\" id=\"user_id\">";
											}
											elseif ($stat == 1){
												$stat = "<button onclick=\"status_update('0')\" id=\"status_update\" value=\"$stat\" class=\"btn btn-mini btn-danger\"><i class=\"icon-remove\"></i>Deactivate Account</button>";
												$stat .= "<input type=\"hidden\" name=\"user_id\" value=\"$user_id\" id=\"user_id\">";
											}
											else{
												$stat ="<button onclick=\"status_update('$stat')\" id=\"status_update\" value=\"$stat\" class=\"btn btn-mini btn-\">Invalid Status</button>";
											}
										?>
										<form method="post" action="<?php echo base_url();?>client/edit_info/<?php echo $row->user_id;?>">
											<label for="client_name" >Name : <?php echo $row->client_name?></label>
											<input id="client_name" value="<?php echo $row->client_name;?>" type="hidden">
											<label for="client_location" > </label>
											<label for="client_location" >Location (<span class="required">*</span>): </label>
											<input id="client_location" required style="width: 94%" type="text" name="client_location" value="<?php echo $row->client_location;?>">

									    	<b>Contact Person</b>
									    	<label for="first_name">First Name (<span class="required">*</span>): </label>
											<input  required style="width: 94%" type="text" id="first_name" name="first_name" value="<?php echo $row->contact_first_name;?>">

											<label for="last_name">Last Name (<span class="required">*</span>): </label>
											<input required style="width: 94%" type="text" id="last_name" name="last_name" value="<?php echo $row->contact_last_name;?>">
											
											<label for="clien_phone" >Phone # (<span class="required">*</span>): </label>
											<input id="clien_phone" class="input-mask-phone" required style="width: 94%" type="text" name="client_phone" value="<?php echo $row->client_mobile;?>">

											<label for="client_tel" >Telephone # (<span class="required">*</span>): </label>
											<input id="client_tel" class="input-mask-tel" required style="width: 94%" type="text" name="client_tel" value="<?php echo $row->client_tel;?>">


											<label for="client_email" >Email (<span class="required">*</span>): </label>
											<input id="client_email" required style="width: 94%" type="email" name="client_email" value="<?php echo $row->client_email;?>">


											<hr>
											<span class="pull-right">
											<button type="submit" class="btn btn-success"><i class="icon-edit icon-white"></i> Edit Client</button>	
											</span>
										</form>
									<?php endforeach;?>
									<?php endif; ?>
									</div>									
								</div>
							</div></div>
						
						</div>

					<!-- ADD HR END -->
						
					</div>
					<div class="span6">
						<div class="widget-box">
							<div class="widget-header header-color-dark">
								<h4 class="smaller">
									Account Details
									<small></small>
								</h4>
								<div class="widget-toolbar" id="widget_stat">
									<?php echo $stat;?>
								</div>
							</div>

							<div class="widget-body">
								<div class="widget-main">
									<table class="table" style=\"width: 100%; word-wrap:break-word; table-layout: fixed;\">
										<tr class="success">
											<td style="width:30%">Username :</td>
											<td><?php echo $username;?></td>
										</tr>
									</table>
									
									<button class="btn btn-info btn-mini"><i class="icon-user"></i> Change Username</button>
									<button class="btn btn-info btn-mini"><i class="icon-user"></i> Change Password</button>
									<form id=""> 
									 	<div class="control-group">

										</div>
										<!--
										<div class="form-actions" style="">
											<button class="btn span6 btn-info btn-mini " type="submit">
												<i class="icon-ok bigger-110"></i>
												Submit
											</button>
											<button class="btn btn-mini span6" type="reset">
												<i class="icon-undo bigger-110"></i>
												Reset
											</button>
										</div>
										-->
									</form>
								</div>
							</div>
						</div>
					</div>
					</div>


						<!--PAGE CONTENT ENDS HERE-->
					<!--/row-->
				</div><!--/#page-content-->

			</div><!--/#main-content-->
		</div><!--/.fluid-container#main-container-->


		<a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
		<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

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
		<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3.full.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.gritter.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>assets/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/style.min.js"></script>

		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.js"></script>



		<!--inline scripts related to this page-->

		<script type="text/javascript">
		
			
			$(function() {
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-tel').mask('999-99-99');


			

				$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
					_title: function(title) {
						var $title = this.options.title || '&nbsp;'
						if( ("title_html" in this.options) && this.options.title_html == true )
							title.html($title);
						else title.text($title);
					}
				}));

				$.extend($.gritter.options, { 
			        position: 'bottom-right', // defaults to 'top-right' but can be 'bottom-left', 'bottom-right', 'top-left', 'top-right' (added in 1.7.1)
					fade_in_speed: 'medium', // how fast notifications fade in (string or int)
					fade_out_speed: 2000, // how fast the notices fade out
					time: 2000 // hang on the screen for...
				});
				
			
			})
			

		var status_update = function(id) {
					//id = $('#')
			//$.gritter.removeAll();
			console.log(id);

			user_id = $('#user_id').val();
			client_name = $('#client_name').val();
			if(id == 0){
				console.log("Account will be Activated");
				new_stat = "<button onclick=\"status_update('1')\" id=\"status_update\" value=\"1\" class=\"btn btn-mini btn-success\"><i class=\"icon-ok\"></i>Activate Account</button>";
			}
			else if(id == 1){
				console.log("Account will be Deactivated");
				new_stat = "<button onclick=\"status_update('0')\" id=\"status_update\" value=\"0\" class=\"btn btn-mini btn-danger\"><i class=\"icon-remove\"></i>Deactivate Account</button>";
			}
			else{
				new_stat = "<button onclick=\"status_update()\" id=\"status_update\" value=\"\" class=\"btn btn-mini btn-\">Invalid Status</button>";
			}
			$.ajax({
				url :"<?php echo base_url();?>client/updateAccountStatus",
				type : "POST",
				data :{ id:id,
						user_id : user_id	
						},

				success: function(e) {
                    //data is the html of the page where the request is made.
                    //showBatchResult(e);
                   
                    console.log(e);

            		$('#status_update').fadeToggle();
            		$('#status_update').remove();
            		$('#widget_stat').append(new_stat);
            		$('#status_update').css('display:block');
            		
            		if(e==1){

                	var active_grit = $.gritter.add({
								title: 'Account Status!',
								text: client_name + ' account has been activated.',
								class_name: 'gritter-success'
							});
					}
					else if(e==0){
					var deactive_grit =	$.gritter.add({
							title: 'Account Status!',
							text: client_name + ' account has been deactivated.',
							class_name: 'gritter-error'
						});
					}
					else{
						$.gritter.add({
							title: 'Account Status!',
							text: 'No Records',
							class_name: 'gritter-regular'
						});

					}

               	}
			});
		}

	
		</script>
		
	</body>
	<div id="dialog">
	   	<div id="client_view"></div>
	  	<div id="request_view"></div>
	</div>
	<div id="edit_dialog" style="display:none">
		<div class="center">
		<div class="alert alert-info">Edit Client Information or deactive/activate its account.</div>
		</div>
	</div>
</html>