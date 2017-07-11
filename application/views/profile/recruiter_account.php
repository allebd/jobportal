	</header> <!-- end #header -->


	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul>
								<li><?=anchor('profile_recruit/recruiters', 'Profile Settings');?></li>
								<li class="active"><?=anchor('profile_recruit/recruiters_account', 'Account Settings');?></li>
							</ul>
						</div>
					</aside>
				</div> <!-- end .page-sidebar -->

				<div class="col-sm-8 page-content">
					<div class="jobs-item jobs-single-item">
						<?php foreach($query->result() as $row): ?>
								<?php echo form_open('profile_recruit/recruiters_password_insert'); ?>															
								<h5 class="bottom-line mtm3">Account Information<span class="pull-right">
									<input type='submit' class='btn btn-gray' value='Save' id='recruiter-contact-save'/>
									<a href="#" id='recruiter-contact-cancel' class="btn btn-gray">Cancel</a></span></h5>

								<table id='recruiter-contact-normal'>
									<tbody>
										<tr>
											<td>Password</td>											
											<td><?php echo form_error('password', '<p class="error">', '</p>'); ?>
												<?php echo form_error('password2', '<p class="error">', '</p>'); ?>
												<a href="#" id='recruiter-contact-edit' class="btn btn-gray">Change password</a></td>
										</tr>																										
									</tbody>
								</table>

								<table id='recruiter-contact-editing'>
									<tbody>
										<tr>
											<td>New password</td>
											<td><?php echo form_password('password', set_value('password'), 'id="password" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Confirm password</td>
											<td><?php echo form_password('password2', set_value('password2'), 'id="password2" class="form-control"');?></td>
										</tr>																												
									</tbody>
								</table>
								<?php echo form_close(); ?>							
						<?php endforeach; ?>
					</div>
				</div>				
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	