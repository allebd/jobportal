	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">

				<div class="col-sm-12 page-content">
					
					<?php if($recruiter->num_rows() > 0): ?>
					<?php foreach($recruiter->result() as $row): ?>
					<div class="col-sm-6">
						<div class="jobs-item with-thumb">
							<div class="thumb">
								<?php if($row->org_logo != ''): ?>
								<img src="<?=base_url()?>uploads/<?=$row->org_logo?>" alt="Company Logo" title="Company Logo">
								<?php endif;?>
								<?php if($row->org_logo == ''): ?>
								<img src="<?=base_url()?>uploads/imagis.jpg" alt="Company Logo" title="Company Logo">
								<?php endif;?>
							</div>
							
							<h6 class="title"><a href="#"><?=$row->org_name?></a></h6>
							<span class="meta"><?=$row->org_location?></span>

							<ul class="top-btns">
								<li><a href="#" class="btn btn-gray fa fa-plus toggle"></a></li>
							</ul>
							<br>
							<a href="#" class="read-more"> Read More </a>

							<div class="clearfix"></div>

							<div class="content">
								<?php if($row->org_description != ''): ?>
								<p class="description"><?=$row->org_description?></p>
								<?php endif;?>
								<ul class="list-unstyled">
									<?php if($row->org_address != ''): ?>
									<li><strong>Address:</strong> <?=$row->org_address?></li>
									<?php endif; ?>
									<?php if($row->org_industry != ''): ?>
									<li><strong>Industry:</strong> <?=$row->org_industry?></li>
									<?php endif;?>
									<?php if($row->no_of_emp != ''): ?>
									<li><strong>No of employees:</strong> <?=$row->no_of_emp?></li>
									<?php endif;?>
									<?php if($row->org_website != ''): ?>
									<li><strong>Website:</strong> <?=$row->org_website?></li>
									<?php endif;?>
								</ul>														
							</div>
						</div>		
				    </div>
					<?php endforeach; ?>							
					<?php endif; ?>
					<?php if($recruiter->num_rows() < 1): ?>
						<p>No Employer Listed</p>
					<?php endif; ?>		

					<div class="clearfix">
						<?php echo $this->pagination->create_links();?>
					</div>
				</div> <!-- end .page-content -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

