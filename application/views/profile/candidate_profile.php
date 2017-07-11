	</header> <!-- end #header -->


	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="clearfix mb30">
							
							<a href="<?=base_url();?>profile_admin/manage_candidates" class="btn btn-gray">View all Applicants</a>
							
						</div>
						<div class="widget sidebar-widget white-container brown-container candidates-single-widget">
							<div class="widget-content">
								<div class="row">
									<?php foreach($dquery->result() as $row): ?>
									<?php if($row->profile_photo != ''):?>
											<div class='col-sm-6'><p><img src='<?=base_url()?>uploads/<?=$row->profile_photo?>' width='125px' height='125px'></p></div> 
									<?php endif; ?>	
									<?php endforeach?>
								</div>
							</div>
						</div>
						<div class="widget sidebar-widget white-container brown-container candidates-single-widget">
							<div class="widget-content mtm30">
								<?php foreach($dquery->result() as $row): ?>															
								<h5 class="bottom-line bottomwhite-line">Contact</h5>

								<table id='candidate-contact-normal'>
									<tbody>
										<tr>
											<td>E-mail</td>
											<td><a href="mailto:<?=$row->email?>"><?=$row->email?></a></td>
										</tr>
										<tr>
											<td>Phone</td>
											<td><?=$row->mobile_number?></td>
										</tr>
										<tr>
											<td>Date Of Birth</td>
											<td><?=$row->dob?></td>
										</tr>

										<tr>
											<td>Address</td>
											<td><?=$row->contact_address?></td>
										</tr>

										<tr>
											<td>Location</td>
											<td><?=$row->location?></td>
										</tr>

										<tr>
											<td>Gender</td>
											<td><?=$row->gender?></td>
										</tr>

										<tr>
											<td>Language Spoken</td>
											<td><?=$row->language?></td>
										</tr>
										
									</tbody>
								</table>
								<?php endforeach; ?>
							</div>
						</div>
					</aside>
				</div> <!-- end .page-sidebar -->

				<div class="col-sm-8 page-content">
					<div class="candidates-item candidates-single-item">
									<h4 class="bottom-line mtm3">Career Details</h4>

								<table id='candidate-career-normal' class='mtm3'>
									<tbody>
										<tr>
											<td>Desire Job Type</td>
											<td><?=$row->desired_job_type?></td>
										</tr>
										<tr>
											<td>Experience</td>
											<td><?=$row->years_of_exp?></td>
										</tr>
										<tr>
											<td>Specialization</td>
											<td><?=$row->area_of_special?></td>
										</tr>
										<tr>
											<td>Willing to Relocate</td>
											<td><?=$row->relocate?></td>
										</tr>
										<tr>
											<td>Current Industry</td>
											<td><?=$row->c_work_industry?></td>
										</tr>
										<tr>
											<td>Recent Employer</td>
											<td><?=$row->most_r_employer?></td>
										</tr>									

										<tr>
											<td>Highest Education</td>
											<td><?=$row->highest_education?></td>
										</tr>
										<tr>
											<td>Skills</td>
											<td><?=$row->skill?></td>
										</tr>

										<tr>
											<td>Expected Salary</td>
											<td><?=$row->expected_salary?></td>
										</tr>
										
									</tbody>
								</table>
								<hr>
								<hr>
							<h4 class="bottom-line mt30">Work Experience </h4>
							<div id="candidate-work-general">
								<?php if($workquery->num_rows() > 0):?>
								<?php foreach($workquery->result() as $row): ?>
									<div id="candidate-work-individual">
										<h6 class="title"><a href="#"><?=$row->work_name?></a></h6>
										<span class="meta"><?=$row->work_industry?></span>

										<p><?=$row->work_description?></p>

										<ul class="list-unstyled">
											<li><strong>Duration:</strong> <?=$row->work_from?> to <?=$row->work_to?></li>
											<li><strong>Position Held:</strong> <?=$row->work_position?></li>
											<li><strong>Job Type:</strong> <?=$row->work_type?></li>
										</ul>
									</div>

									<hr>
								<?php endforeach; ?>		
								<?php endif;?>
							</div>
						<hr>					

							<h4 class="bottom-line mt30">Education History </h4>
							<div id="candidate-edu-general">
								<?php if($eduquery->num_rows() > 0):?>
								<?php foreach($eduquery->result() as $row): ?>
									<div id="candidate-edu-individual">
										<h6 class="title"><a href="#"><?=$row->education_name?></a></h6>
										<span class="meta"><?=$row->education_type?></span>

										<ul class="list-unstyled">
											<li><strong>Duration:</strong> <?=$row->degree_from?> to <?=$row->degree_to?></li>
											<li><strong>Degree Obtained:</strong> <?=$row->degree_obtained?></li>
											<li><strong>Classification:</strong> <?=$row->degree_class?></li>
										</ul>
									</div>

									<hr>
								<?php endforeach; ?>
								<?php endif;?>	
							</div>
						<hr>

							<h4 class="bottom-line mt30">Certifications	</h4>
							<div id="candidate-cert-general">
							<?php if($certquery->num_rows() > 0):?>
								<?php foreach($certquery->result() as $row): ?>
									<div id="candidate-cert-individual">
										<h6 class="title"><a href="#"><?=$row->certificate_title?></a></h6>
										<span class="meta"><?=$row->certificate_date?></span>
										
									</div>

									<hr>
								<?php endforeach; ?>							
							<?php endif; ?>
							</div>	
							
							<hr>
					</div>					
				</div> <!-- end .page-content -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	