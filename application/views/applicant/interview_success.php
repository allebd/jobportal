	</header> <!-- end #header -->


	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul>
								<li><?=anchor('applicant/createcv', 'Create a CV');?></li>
								<li class='active'><?=anchor('applicant/interview', 'Interview Prepping');?></li>
							</ul>
						</div>
					</aside>
				</div> <!-- end .page-sidebar -->

				<div class="col-sm-8 page-content">
					<div class='alert alert-success mb0'>
							<h6>Payment Successful</h6>
							<a href='#' class='close fa fa-times'></a>
					</div>
					<div class="jobs-item jobs-single-item">
								<?php echo form_open('applicant/interviewpay'); ?>	
								<table>
									<tbody>
										<tr>
											<td>Topic<br>
											<?php echo form_error('topic', '<div class="error">', '</div>'); ?>
											<?php echo form_input('topic', set_value('topic'), 'id="topic" class="form-control"');?></td>
										</tr>							
									</tbody>
								</table>
								<div class="text-center">					
									<input type="submit" class="btn btn-default mtm30" value="PAY">
								</div>
								<?php echo form_close(); ?>	
					</div>
				</div>				
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	