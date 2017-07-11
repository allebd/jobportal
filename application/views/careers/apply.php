	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="widget sidebar-widget white-container brown-container contact-form-widget">
							<h5 class="widget-title">Apply Now!</h5>

							<div class="widget-content">
								<p>Please complete the following details.</p>
														
								<?php echo form_open_multipart('careers/sendcareers_email') ?>
									<div class="form-group">
									<?php foreach($mpscareersapply->result() as $row): ?>
										<?php echo form_hidden('mpscareers_id',$row->id);?>
									<?php endforeach; ?>
										<?php echo form_error('name','<p class="error">', '</p>'); ?>
										<input type="text" class="form-control" name='name' placeholder="Full Name" >
									</div>

									<div class="form-group">
										<?php echo form_error('email', '<p class="error">', '</p>'); ?>
										<input type="email" class="form-control" name='email' placeholder="Email" >
									</div>

									<div class="form-group">
										<?php echo form_error('address', '<p class="error">', '</p>'); ?>
										<input type="text" class="form-control" name='address' placeholder="Address" >
									</div>

									<div class="form-group">
										<?php echo form_error('city', '<p class="error">', '</p>'); ?>
										<input type="text" class="form-control" name='city' placeholder="City" >
									</div>

									<div class="form-group">
										<?php echo form_error('state', '<p class="error">', '</p>'); ?>
										<select class="form-control" name='state'>
											<option value='' selected='selected' disabled='disabled'>State</option>
											<?php foreach ($states->result() as $row): ?>
											<option value="<?=$row->name?>"><?=$row->name?></option>
											<?php endforeach;?>
										</select>
									</div>

									<div class="form-group">
										<?php echo form_error('phone', '<p class="error">', '</p>'); ?>
										<input type="text" class="form-control" name='phone' placeholder="Contact Number" >
									</div>

									<div class="form-group">
										<label>Upload CV</label>
										<?php echo $error; ?>
										<input type="file" name="userfile"/>
									</div>

									<div class="text-center">
									<button type="submit" class="btn btn-default"> SUBMIT APPLICATION</button>
									</div>
								<?php echo form_close(); ?>
							</div>
						</div>			
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container links-widget">
							<ul>
								<li>
									<div class="jobs-item">

									<?php foreach($mpscareersapply->result() as $row): ?>
										<h4 class='mt0'><?=$row->name?></h4>

											<p><?=$row->summary?></p>

											<?php if($row->qualification == ''): ?>
											<?php echo ""; ?>
											<?php endif;?>
											<?php if($row->qualification != ''): ?>
											<p><strong>Qualifications:</strong></p>
												<?=$row->qualification?>
											<?php endif;?>
									<?php endforeach; ?>
									</div>
								</li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	