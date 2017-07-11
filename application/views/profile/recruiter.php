	</header> <!-- end #header -->


	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul>
								<li class="active"><?=anchor('profile_recruit/recruiters', 'Profile Settings');?></li>
								<li><?=anchor('profile_recruit/recruiters_account', 'Account Settings');?></li>
							</ul>
						</div>

						<div class="widget sidebar-widget white-container brown-container candidates-single-widget">
							<div class="widget-content mtm30">
								<?php if($testquery->num_rows() < 1):?>
								<?php echo form_open('profile_recruit/recruiters_test_insert'); ?>
									<h5 class="bottom-line bottomwhite-line">Testimony <span class="pull-right"><a href="#" id='candidate-test-edit' class="btn btn-gray">Add</a>
									<input type='submit' class='btn btn-gray' value='Save' id='candidate-test-save'/>
									<a href="#" id='candidate-test-cancel' class="btn btn-gray">Cancel</a></span></h5>
									<table id='candidate-test-editing'>
									<tbody>
										<tr>
											<td>Testimony</td>
											<td><?php echo form_textarea('body', set_value('body'), 'id="body" class="form-control"');?></td>
										</tr>										
									</tbody>
								</table>
								<?php echo form_close(); ?>
								<?php endif;?>
								<?php if($testquery->num_rows() > 0):?>
								<?php foreach($testquery->result() as $trow): ?>
								<?php echo form_open('profile_recruit/recruiters_test_update'); ?>															
								<h5 class="bottom-line bottomwhite-line">Testimony <span class="pull-right"><a href="#" id='candidate-test-edit' class="btn btn-gray">Edit</a>
									<input type='submit' class='btn btn-gray' value='Save' id='candidate-test-save'/>
									<a href="#" id='candidate-test-cancel' class="btn btn-gray">Cancel</a></span></h5>

								<table id='candidate-test-normal'>
									<tbody>
										<tr>
											<td>Testimony</td>
											<td><?=$trow->body?></td>
										</tr>
									</tbody>
								</table>

								<table id='candidate-test-editing'>
									<tbody>
										<tr>
											<td>Testimony</td>
											<td><?php echo form_textarea('body', set_value('body', $trow->body), 'id="body" class="form-control"');?></td>
										</tr>										
									</tbody>
								</table>
								<?php echo form_close(); ?>
								<?php endforeach; ?>
								<?php endif;?>
							</div>
						</div>
					</aside>
				</div> <!-- end .page-sidebar -->

				<div class="col-sm-8 page-content">
					<div class="jobs-item jobs-single-item">
						<?php foreach($query->result() as $row): ?>
								<?php echo form_open('profile_recruit/recruiters_contact_insert'); ?>															
								<h5 class="bottom-line mtm3">Contact Information<span class="pull-right"><a href="#" id='recruiter-contact-edit' class="btn btn-gray">Edit</a>
									<input type='submit' class='btn btn-gray' value='Save' id='recruiter-contact-save'/>
									<a href="#" id='recruiter-contact-cancel' class="btn btn-gray">Cancel</a></span></h5>

								<table id='recruiter-contact-normal'>
									<tbody>
										<tr>
											<td>Company Type</td>
											<td><?=$row->employer_type ?></td>
										</tr>
										<tr>
											<td>Industry</td>
											<td><?=$row->org_industry ?></td>
										</tr>
										<tr>
											<td>Company Size</td>
											<td><?=$row->no_of_emp ?></td>
										</tr>
										<tr>
											<td>Representative</td>
											<td><?=$row->org_rep_surname ?> <?=$row->org_rep_firstname?></td>
										</tr>
										<tr>
											<td>Representative Position</td>
											<td><?=$row->employer_position ?></td>
										</tr>
										<tr>
											<td>Phone</td>
											<td><?=$row->org_rep_contact_no ?></td>
										</tr>										
										<tr>
											<td>Address</td>
											<td><?=$row->org_address?></td>
										</tr>
										<tr>
											<td>Location</td>
											<td><?=$row->org_location?></td>
										</tr>
										<tr>
											<td>E-mail</td>
											<td><a href="mailto:<?=$row->email?>"><?=$row->email?></a></td>
										</tr>
										<tr>
											<td>Website</td>
											<td><a href="http://<?=$row->org_website?>"><?=$row->org_website?></a></td>
										</tr>
										<tr>
											<td>Link to all Jobs Posted</td>
											<td><a href="<?=base_url()?>job/<?=$row->org_name?>/<?=$row->employer_id?>"><?=base_url()?>job/<?=$row->org_name?>/<?=$row->employer_id?></a></td>
										</tr>																			
									</tbody>
								</table>

								<table id='recruiter-contact-editing'>
									<tbody>
										<tr>
											<td>Company Name</td>
											<td><?php echo form_input('org_name', set_value('org_name', $row->org_name), 'id="org_name" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Company Type</td>
											<td><?php echo "<select name='employer_type' class='form-control'>
												<option value='$row->employer_type' selected='selected'>"?><?=$row->employer_type?><?php echo "</option>												
												<option value='Recruitment Agency'>Recruitment Agency</option>
												<option value='Direct Employer'>Direct Employer</option>
												<option value='Charity Organization'>Charity Organization</option>
												</select>"; ?>
											</td>
										</tr>
										<tr>
											<td>Industry</td>											
											<td><?php echo form_dropdown('org_industry', $industry_options, set_value('org_industry',$row->org_industry), 'id="org_industry" class="form-control"'); ?></td>											
										</tr>
										<tr>
											<td>Company Size</td>											
											<td><?php echo form_dropdown('no_of_emp', $no_of_emp_options, set_value('no_of_emp',$row->no_of_emp), 'id="no_of_emp" class="form-control"'); ?></td>											
										</tr>
										<tr>
											<td>Representative Last Name</td>
											<td><?php echo form_input('org_rep_surname', set_value('org_rep_surname', $row->org_rep_surname), 'id="org_rep_surname" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Representative First Name</td>
											<td><?php echo form_input('org_rep_firstname', set_value('org_rep_firstname', $row->org_rep_firstname), 'id="org_rep_firstname" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Representative Position</td>
											<td><?php echo form_input('employer_position', set_value('employer_position', $row->employer_position), 'id="employer_position" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Phone</td>
											<td><?php echo form_input('org_rep_contact_no', set_value('org_rep_contact_no', $row->org_rep_contact_no), 'id="org_rep_contact_no" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Address</td>
											<td><?php echo form_input('org_address', set_value('org_address', $row->org_address), 'id="org_address" class="form-control"');?></td>
										</tr>

										<tr>
											<td>Location</td>											
											<td><?php echo form_dropdown('org_location', $location_options, set_value('org_location',$row->org_location), 'id="org_location" class="form-control"'); ?></td>											
										</tr>
										<tr>
											<td>E-mail</td>
											<td><input type='email' class='form-control' name='email' value= '<?=$row->email?>' /></td>
										</tr>
										<tr>
											<td>Website</td>
											<td><input type='text' class='form-control' name='org_website' value='<?=$row->org_website?>' /></td>
										</tr>										
									</tbody>
								</table>
								<?php echo form_close(); ?>							
						<?php endforeach; ?>
						<?php echo form_open_multipart('profile_recruit/recruiters_desc_insert'); ?>
							<h5 class="bottom-line mtm3">Company Description
									<span class="pull-right">
										<a href="#" class="btn btn-gray" id='recruiter-desc-edit'>Edit</a>
										<input type='submit' class='btn btn-gray' id='recruiter-desc-save' value='Save' />
										<a href="#" class="btn btn-gray" id='recruiter-desc-cancel'>Cancel</a>									
									</span>
							</h5>

							<?php foreach($query->result() as $row): ?>
								<div id="recruiter-desc-general">									
									<?php echo $error; ?>							
									<div class="thumb"><img src="<?=base_url()?>uploads/<?=$row->org_logo?>" alt="Company Logo"></div>
									
									<p><?=$row->org_description?></p>
								
								</div>
								<div id="recruiter-desc-editing">	
									<?php echo form_label('Company Logo', 'company');?>

									<?php if($row->org_logo != ''):?>
											<?php echo form_hidden('org_logo', $row->org_logo);?>
											<p><img src='<?=base_url();?>uploads/<?=$row->org_logo?>' alt='' width='100px' height='100px' class="p10"></p> 
											<p><a class="btn btn-gray" id='recruiter-logo'>Change</a></p>
											<br>
									<?php endif; ?>	
									<?php if($row->org_logo == ''):?>
									<p><a class="btn btn-gray" id='recruiter-logo'>Upload logo</a></p>
									<?php endif; ?>	

									<div id='recruiter-cv-change'>
									<input type="file" name="userfile" />
									<br />
									</div>								

									<p><?php echo form_label('Company Description', 'company_desc');?>
										<?php echo form_error('org_description'); ?>
									<?php echo form_textarea('org_description', set_value('org_description',$row->org_description), 'id="org_description" class="form-control"'); ?>
									<script>
									    CKEDITOR.replace( 'org_description' );
									</script>
									</p>	
								</div>
							<?php endforeach; ?>
						<?=form_close();?>
										
						</div>
					</div>
				</div>				
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	