	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12" >
					<div class='col-sm-4'>
					</div>
					<div class="col-sm-5 mt60">
						<a href='<?=base_url();?>'>
							<img src='<?=base_url();?>img/header-logo.png' alt=''>
						</a>
					</div>
					<div class='col-sm-3'>
					</div>
				</div>
				<div class="col-sm-12" >
					<div class='col-sm-4'>
					</div>
					<div class="col-sm-4 mt90">
						<h4>Administrator</h4>
					</div>
					<div class='col-sm-4'>
					</div>
				</div>
				<div class="col-sm-12" >
					<div class='col-sm-4'>
					</div>
					<div class="col-sm-4 page-sidebar mtm30 mb160" align="centre">
						<aside>
							<div class="widget sidebar-widget white-container brown-container contact-form-widget">
								<h5 class="widget-title">Sign In</h5>

								<div class="widget-content">
									<?php if($incorrect_login != '')
									{
									echo "<div class='alert alert-error'>
										<h6>$incorrect_login</h6>
										<a href='#' class='close fa fa-times'></a>
									</div>";
									}else
										if($reg_success != '')
									{
									echo "<div class='alert alert-success'>
										<h6>$reg_success</h6>
										<a href='#' class='close fa fa-times'></a>
									</div>";
									}
									?>
									<?php echo form_open('mpsconsults_admin/validate_credentials'); ?>
										<div class="form-group">
											<input type='text' class='form-control' placeholder='Username' name='admin_username' value='<?php echo set_value('admin_username'); ?>'/>
										</div>

										<div class="form-group">
											<?php echo form_error('password', '<p class="error">', '</p>'); ?>
											<input type='password' class='form-control' placeholder='Password' name='admin_password'>
										</div>
										<div class="text-center">
											<button type="submit" class="btn btn-default">Login</button>
										</div>
									<?php echo form_close(); ?>
								</div>
							</div>
						</aside>
					</div>
					<div class='col-sm-4'>
					</div>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->