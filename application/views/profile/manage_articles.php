	</header> <!-- end #header -->


	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul>
								<li><?=anchor('profile_admin/admin_area', 'My Account');?></li>
								<?php foreach($query->result() as $row): ?>
									<?php if($row->admin_username == 'super admin'): ?>
										<li><?=anchor('profile_admin/manage_admins', 'Manage Admins');?></li>
									<?php endif; ?>
								<?php endforeach; ?>
								<li><?=anchor('profile_admin/manage_presets', 'Presets');?></li>
								<li><?=anchor('profile_admin/manage_candidates', 'Manage Applicants');?></li>
								<li><?=anchor('profile_admin/manage_recruiters', 'Manage Recruiters');?></li>
								<li><?=anchor('profile_admin/manage_package', 'Manage Recruiter Packages');?></li>
								<li><?=anchor('profile_admin/manage_toprecruit', 'Manage Top Recruiters');?></li>
								<li><?=anchor('profile_admin/manage_jobs', 'Manage jobs');?></li>
								<li><?=anchor('profile_admin/manage_social', 'Manage Social Media Links');?></li>
								<li><?=anchor('profile_admin/manage_applicantservices', 'Applicants Services');?></li>
								<li><?=anchor('profile_admin/manage_interviewprep', 'Interview Prepping Applicants');?></li>
								<li><?=anchor('profile_admin/manage_stats', 'Statistics');?></li>
								<li><?=anchor('profile_admin/manage_team', 'About Team');?></li>
								<li><?=anchor('profile_admin/manage_board', 'Board of directors');?></li>
								<li><?=anchor('profile_admin/manage_careers', 'MPS Careers');?></li>
								<li><?=anchor('profile_admin/manage_trainings', 'Trainings');?></li>
								<li class="active"><?=anchor('profile_admin/manage_articles', 'Career Hub Articles');?></li>
								<li><?=anchor('profile_admin/manage_testimonies', 'Testimonies');?></li>
								<li><?=anchor('profile_admin/manage_slide', 'Slide Show');?></li>
								<li><?=anchor('profile_admin/manage_contact', 'Contact Info');?></li>
								<li><?=anchor('profile_admin/welcome_message', 'Welcome Message');?></li>
								<li><?=anchor('profile_admin/password_reset', 'Password Reset Message');?></li>
								<li><?=anchor('profile_admin/privacyandterms', 'Privacy, Terms & Conditions');?></li>
							</ul>
						</div>
					</aside>
				</div> <!-- end .page-sidebar -->

				<div class="col-sm-8 page-content">
					<div class="jobs-item">
						
						<?php echo form_open_multipart('profile_admin/articles_insert'); ?>
							<h5 class="bottom-line mtm3">Manage Articles
									<span class="pull-right">
										<a href="#" class="btn btn-gray" id='recruiter-desc-edit'>Add Article</a>
										<input type='submit' class='btn btn-gray' id='recruiter-desc-save' value='Save' />
										<a href="#" class="btn btn-gray" id='recruiter-desc-cancel'>Cancel</a>									
									</span>
							</h5>
								<table id='recruiter-desc-general'>
									<tbody>
										<tr>
											<th>Title</th>
											<th>Author</th>
											<th>Date</th>
											<th>Comments</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>										
										<?php foreach($article->result() as $row): ?>
										<tr>
											<td><?=$row->title?></td>
											<td><?=$row->author?></td>
											<td><?=date_format(date_create($row->date), 'M j, Y');?></td>
											<td><a href="<?=base_url();?>profile_admin/comment/<?=$row->id?>" class="btn btn-gray">View Comments</a></td>
											<td><a href="<?=base_url();?>profile_admin/article_edit/<?=$row->id?>" class="btn btn-gray fa fa-edit" title='Edit'></a></td>
											<td><a href="<?=base_url();?>profile_admin/article_delete/<?=$row->id?>" class="btn btn-gray fa fa-trash-o" title='Delete'></a></td>
										</tr>
										<?php endforeach; ?>																									
									</tbody>
								</table>
								<table id='recruiter-desc-editing'>
									<tbody>
										<tr>
											<td>Title</td>
											<td><?php echo form_input('title', set_value('title'), 'id="title" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Author</td>
											<td><?php echo form_input('author', set_value('author'), 'id="author" class="form-control"');?></td>
										</tr>
										<tr class='mt50'>
											<td>Article body</td>
											<td><?php echo form_textarea('body', set_value('body'), 'id="body" class="form-control"');?>
												<script>
												    CKEDITOR.replace('body');
												</script>
											</td>
										</tr>
										<tr>
											<td>Cover Photo</td>
											<td><?php echo $error; ?><input type="file" name="userfile" /></td>
										</tr>																																					
									</tbody>
								</table>
						<?=form_close();?>						
					</div>


				</div>				
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	