	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 page-content">
					<!-- <div class="title-lines">
						<h3>Recruiter Packages</h3>
					</div> -->

					<div class="table-responsive brown-container">
						<table class="table-bordered">
							<thead>
								<tr>
									<th class='text-center'>Can't see a package to suit you?<br> Call us now on <br><span>08100373149</span></th>
									<?php foreach($packages->result() as $row): ?>
									<?php 
										$plan = explode(' ',$row->package_plan); ?>
									<th class='text-center'><?php echo $plan[0];?></th>
									<?php endforeach; ?>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td class='text-center recruit-subhead'>Job posting</td>
									<?php foreach($packages->result() as $row): ?>
										<td class='text-center'>Free</td>
									<?php endforeach; ?>
								</tr>
								<tr>
									<td>Job Postings (per day)</td>
									<?php foreach($packages->result() as $row): ?>
									<td class='text-center'><?=$row->job_posting?></td>
									<?php endforeach; ?>
								</tr>
								<tr>
									<td>Premium upgrade on postings</td>
									<?php foreach($packages->result() as $row): ?>
									<?php if($row->premium_upgrade == FALSE): ?>
									<td class='text-center'>-</td>
									<?php endif; ?>
									<?php if($row->premium_upgrade == TRUE): ?>
									<td class='text-center'><i class='fa fa-check'></i></td>
									<?php endif; ?>
									<?php endforeach; ?>
								</tr>
								<tr>
									<td>Typical applications per posting</td>
									<?php foreach($packages->result() as $row): ?>
									<?php if($row->typical_applications == ''): ?>
									<td class='text-center'>-</td>
									<?php endif; ?>
									<?php if($row->typical_applications != ''): ?>
									<td class='text-center'><?=$row->typical_applications?></td>
									<?php endif; ?>
									<?php endforeach; ?>
								</tr>
								<tr>
									<td>Estimated total applications Share <br>
										on Facebook, Twitter, Display your <br>
										job ads on Vanguard, Punch,<br>
										 Thisday, Business Day and 400+<br>
										  other websites</td>
									<?php foreach($packages->result() as $row): ?>
									<?php if($row->applications_share == ''): ?>
									<td class='text-center'>-</td>
									<?php endif; ?>
									<?php if($row->applications_share != ''): ?>
									<td class='text-center'><?=$row->applications_share?></td>
									<?php endif; ?>
									<?php endforeach; ?>
								</tr>
								<tr>
									<td>Premium position in search results</td>
									<?php foreach($packages->result() as $row): ?>
									<?php if($row->premium_position == FALSE): ?>
									<td class='text-center'>-</td>
									<?php endif; ?>
									<?php if($row->premium_position == TRUE): ?>
									<td class='text-center'><i class='fa fa-check'></i></td>
									<?php endif; ?>
									<?php endforeach; ?>
								</tr>
								<tr>
									<td class='text-center recruit-subhead'>CV Search</td>
									<?php foreach($packages->result() as $row): ?>
									<td></td>
									<?php endforeach; ?>
								</tr>
								<tr>
									<td>CV Search access</td>
									<?php foreach($packages->result() as $row): ?>
									<?php if($row->cv_search_access == FALSE): ?>
									<td class='text-center'>-</td>
									<?php endif; ?>
									<?php if($row->cv_search_access == TRUE): ?>
									<td class='text-center'><i class='fa fa-check'></i></td>
									<?php endif; ?>
									<?php endforeach; ?>
								</tr>
								<tr>
									<td>CV downloads per day</td>
									<?php foreach($packages->result() as $row): ?>
									<td class='text-center'><?=$row->cv_downloads?></td>
									<?php endforeach; ?>
								</tr>
								<tr>
									<td>Email alerts</td>
									<?php foreach($packages->result() as $row): ?>
									<?php if($row->email_alerts == ''): ?>
									<td class='text-center'>-</td>
									<?php endif; ?>
									<?php if($row->email_alerts != ''): ?>
									<td class='text-center'><?=$row->email_alerts?></td>
									<?php endif; ?>
									<?php endforeach; ?>
								</tr>
								<tr>
									<td class='text-center recruit-subhead'>Branding</td>
									<?php foreach($packages->result() as $row): ?>
									<td></td>
									<?php endforeach; ?>
								</tr>
								<tr>
									<td>Logo in job search results</td>
									<?php foreach($packages->result() as $row): ?>
									<?php if($row->logo_in_job_search == FALSE): ?>
									<td class='text-center'>-</td>
									<?php endif; ?>
									<?php if($row->logo_in_job_search == TRUE): ?>
									<td class='text-center'><i class='fa fa-check'></i></td>
									<?php endif; ?>
									<?php endforeach; ?>
								</tr>
								<tr>
									<td>Logo in job adverts</td>
									<?php foreach($packages->result() as $row): ?>
									<?php if($row->logo_in_job_adverts == FALSE): ?>
									<td class='text-center'>-</td>
									<?php endif; ?>
									<?php if($row->logo_in_job_adverts == TRUE): ?>
									<td class='text-center'><i class='fa fa-check'></i></td>
									<?php endif; ?>
									<?php endforeach; ?>
								</tr>
								<tr>
									<td>Inclusion in Recruiter Directory</td>
									<?php foreach($packages->result() as $row): ?>
									<?php if($row->recruiter_directory == FALSE): ?>
									<td class='text-center'>-</td>
									<?php endif; ?>
									<?php if($row->recruiter_directory == TRUE): ?>
									<td class='text-center'><i class='fa fa-check'></i></td>
									<?php endif; ?>
									<?php endforeach; ?>
								</tr>
								<tr>
									<td>Prices Package </td>
									<?php foreach($packages->result() as $row): ?>
									<td class='text-center'><?=$row->prices_package?></td>
									<?php endforeach; ?>
								</tr>
								<tr>
									<td></td>
									<?php foreach($packages->result() as $row): ?>
									<td class='text-center'><a href="<?=base_url()?>payment/index/<?=$row->package_id?>" class="btn btn-default">Order</a></td>
									<?php endforeach; ?>
								</tr>
							</tbody>
						</table>
					</div> <!-- end .packages-tables -->
				</div> 
			</div>
		</div> <!-- end .container -->

		<div class="container">
			<div class="row">
				<div class="col-sm-12 page-content">					
				</div> <!-- end .page-content -->				
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

