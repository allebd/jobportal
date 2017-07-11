	</header> <!-- end #header -->


	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 page-content">
					<div class="clearfix mb30">
							
							<a href="<?=base_url();?>profile_admin/manage_recruiters" class="btn btn-gray">View all Recruiters</a>
							
					</div>
					<div class="jobs-item jobs-single-item">
						<?php foreach($rquery->result() as $row): ?>															
								<h5 class="bottom-line mtm3">Contact Information</h5>

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
									</tbody>
								</table>
			
						<?php endforeach; ?>
							<h5 class="bottom-line mtm3">Company Description</h5>

							<?php foreach($rquery->result() as $row): ?>
								<div id="recruiter-desc-general">									
									<?php echo $error; ?>							
									<div class="thumb"><img src="<?=base_url()?>uploads/<?=$row->org_logo?>" alt="Company Logo"></div>
									
									<p><?=$row->org_description?></p>
								
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>				
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	