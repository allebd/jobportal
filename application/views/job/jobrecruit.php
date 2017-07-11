
		</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 page-content">
					<div class="title-lines">
						<h3 class="mt0">My Jobs</h3>
					</div>

					<div class="clearfix mb30">
					</div>	
					<div class="table-responsive" style='text-align:center'>				
						<table class="table-bordered">
							<thead>
								<tr>
									<th style='text-align:center'>Job</th>
									<th style='text-align:center'>Created On</th>
									<th style='text-align:center'>Applicants</th>
									<th style='text-align:center'>Edit</th>
									<th style='text-align:center'>Delete</th>
									<th style='text-align:center'>Status</th>
								</tr>
							</thead>
							<tbody class='brown-container'>
							<?php if($jobquery->num_rows() < 1): ?>
								<p>No jobs posted</p>
							<?php endif; ?>
							<?php if($jobquery->num_rows() > 0): ?>
								<?php foreach($jobquery->result() as $row): ?>
								<tr>
									<td><?=$row->job_position?> at <?=$row->company_name?> in <?=$row->job_location?><br>
										<a href="<?=base_url();?>jobs_recruit/job_selected/<?=$row->job_id?>" class="read-more">Read More</a>
									</td>
									<td><?=date_format(date_create($row->job_post_date), 'M j, Y');?></td>
									<td><a href="<?=base_url();?>jobs_recruit/job_candidates/<?=$row->job_id?>" class="btn btn-gray">View Applicants 
														<?php 
															$this->db->select('*');		
															$this->db->from('application');
															$this->db->where('job_id', $this->uri->segment(3));
															$this->db->join('users', 'users.username = application.candidate_username');															
															echo "(".$this->db->count_all_results().")";
														?>
										</a>
									</td>
									<td><a href="<?=base_url();?>jobs_recruit/job_edit/<?=$row->job_id?>" class="btn btn-gray fa fa-edit" title='Edit Job'></a></td>								
									<td><a href="<?=base_url();?>jobs_recruit/job_delete/<?=$row->job_id?>" class="btn btn-gray fa fa-trash-o" title='Delete Job'></a></td>
									<?php if($row->job_end_date_conv < strtotime('now')){ ?>
									<td><a href="#" class="btn btn-red" title='Click to change status'>Expired</a></td>
									<?php } else if($row->suspend == 0){ ?>
									<td><a href="<?=base_url();?>jobs_recruit/job_suspend/<?=$row->job_id?>" class="btn btn-gray" title='Click to change status'>Active</a></td>
									<?php } else if($row->suspend == 1){ ?>
									<td><a href="<?=base_url();?>jobs_recruit/job_unsuspend/<?=$row->job_id?>" class="btn btn-red btn-blue" title='Click to change status'>Pending</a></td>
									<?php } ?>
									<td><a href="<?=base_url();?>jobs_recruit/job_similar/<?=$row->job_id?>" class="btn btn-gray">Post Similar Job</a></td>
								</tr>
								<?php endforeach; ?>							
							<?php endif; ?>	
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
	