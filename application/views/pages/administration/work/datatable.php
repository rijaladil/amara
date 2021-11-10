<div class="container-fluid">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Working Log</h6>
               		<a href="<?php echo base_url(). 'index.php/work/input';?>" class="btn btn-primary btn-icon-split" style="float: right;">
		                <span class="icon text-white-50">
		                  <i class="fas fa-flag"></i>
		                </span>
		                <span class="text">Add +</span>
		              </a>
            </div>
            <div class="card-body">
              	<div class="table-responsive">
	                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                 <thead>
						<tr>
							<th width="5%">No</th>
							<th>Item</th>
							<th>Job</th>
							<th>Date</th>
							<th>Start Time</th>
							<th>Finish Time</th>
							<th>Note</th>
							<th>User</th>
							<th width="10%">Action</th>
						</tr>
						</thead>
						</tbody>
							<?php 
							$id = 1;
							foreach($work as $w){ 
							?>
							<tr>
								<td><?php echo $id++ ?></td>
								<td><?php echo $w->item ?></td>
								<td><?php echo $w->id_job ?></td>
								<td><?php echo $w->date ?></td>
								<td><?php echo $w->start ?></td>
								<td><?php echo $w->finish ?></td>
								<td><?php echo $w->note ?></td>
								<td><?php echo $w->id_user ?></td>
								<td>
									

					                  <a href="<?php echo base_url(). 'index.php/work/edit/'.$w->id ; ?>" class="btn btn-success btn-circle">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-check"></i>
					                    </span>
					                  </a>

					                   <a href="<?php echo base_url(). 'index.php/work/delete/'.$w->id ; ; ?>" class="btn btn-danger btn-circle">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-exclamation-triangle"></i>
					                    </span>
					                  </a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
			   	</div>
			</div>
		</div>
</div>

