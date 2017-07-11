	</header> <!-- end #header -->

	<div id="page-content">
		<div>
			<div class='notbodyclass'>
									<div class='slideregister col-sm-12'>
										<aside>
											<div class="widget sidebar-widget white-container black-container">
												<h5 class="mb20">Reset Password</h5>

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
													<?php echo form_open('recruitlogin/validate_password'); ?>
														<div class="form-group">
															<input type='text' class='form-control' placeholder='Email' name='email' value='<?php echo set_value('email'); ?>'/>
														</div>
														<div class="text-center">
															<button type="submit" class="btn btn-default">Reset</button>
														</div>
															<br>
															<p class="text-center" style='color:white'>I remember now</p>
															<h5 class="text-center"><a href='<?=base_url()?>recruitlogin/signin' >Sign In</a></h5>

													<?php echo form_close(); ?>
												</div>
											</div>
										</aside>
									</div><br>
			</div>
			<div class="header bodyclass">
				<div class="header-banner">
					<div class="flexslider header-slider">
						<ul class="slides">
							<li>
								
								<div class='headermsg headermgr headerwhite'>
									<div class='col-sm-8 text-left'>
										<h3>RECRUITERS
											<span class='fa fa-angle-right'><span class='fa fa-angle-right'><span class='fa fa-angle-right'></span></span></span>
										</h3>
										<h4 id="fourhide">Advertise Jobs <br>for FREEE!!!</h4>
										<h5 id="fivehide">Powerful recruitment tools<br> at affordable packages</h5>
										<h4 id="fourshow">Power CV Search from our database</h4>
										<h5 id="fiveshow">Find the right candidates by engaging our versatile cv matching and qualification tools.</h5>
									</div>
									<div class='slideregister col-sm-4 regshow'>
										<aside>
											<div class="widget sidebar-widget white-container black-container">
												<h5 class="mb20">Reset Password</h5>

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
													<?php echo form_open('recruitlogin/validate_password'); ?>
														<div class="form-group">
															<input type='text' class='form-control' placeholder='Email' name='email' value='<?php echo set_value('email'); ?>'/>
														</div>
														<div class="text-center">
															<button type="submit" class="btn btn-default">Reset</button>
														</div>
															<br>
															<p class="text-center" style='color:white'>I remember now</p>
															<h5 class="text-center"><a href='<?=base_url()?>recruitlogin/signin' >Sign In</a></h5>

													<?php echo form_close(); ?>
												</div>
											</div>
										</aside>
									</div>
								</div>
								<div data-image="<?=base_url();?>img/content/recruiters-landing.jpg"></div>
							</li>
						</ul>
					</div>
				</div> <!-- end .header-banner -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
	<div id="page-content" class='bodyclass'>
		<?php if($toprecruit->num_rows() < 1):?>
		<?php echo ""; ?>
		<?php endif; ?>
		<?php if($toprecruit->num_rows() > 0):?>					
		<div class="success-stories-section">
			<div class="container">
				<h5 class="mt40">Our Top Recruiters</h5>

				<div>
					<div class="flexslider">
						<ul class="slides">
							<?php foreach($toprecruit->result() as $row): ?>
							<?php if($row->photo == ''):?>
							<?php echo ""; ?>
							<?php endif;?>
							<?php if($row->photo != ''):?>
							<li>
								<a href="#">
									<img src='<?=base_url()?>uploads/<?=$row->photo?>' width='125px' height='125px' class="thumb">
									<!-- <p>200 jobs</p> -->
								</a>
							</li>
							<?php endif;?>
							<?php endforeach;?>
						</ul>
					</div>
					<a href="<?=base_url();?>recruiter/all" class="btn btn-default pull-right mt40 mb40">See All Recruiters </a>
				</div>
			</div>
		</div>
		<?php endif;?>
	</div> <!-- end #page-content -->