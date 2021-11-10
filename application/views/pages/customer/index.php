<div class="container-fluid">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
               		<a href="<?php echo base_url(). 'index.php/user/input';?>" class="btn btn-primary btn-icon-split" style="float: right;">
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
							<th>Name</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Department</th>
							<th width="10%">Action</th>
						</tr>

						</thead>
						</tbody>
							<?php 
							$id = 1;
							foreach($user as $u){ 
							?>

							<tr>
								<td><?php echo $id++ ?></td>
								<td><b><?php echo $u->name ?></b></td>
								<td><a href = "mailto:<?php echo $u->email ?>"><?php echo $u->email ?></a></td>
								<td><?php echo $u->contact ?></td>
								<td><?php echo $u->department ?></td>
								<td>
							

					                  <a href="<?php echo base_url(). 'index.php/user/edit/'.$u->id ; ?>"  class="btn btn-success btn-circle" >
									  	<span class="icon text-white-50">
					                      <i class="fas fa-check"></i>
					                    </span>
					                  </a>

					                   <a href="<?php echo base_url(). 'index.php/user/delete/'.$u->id ; ?>" class="btn btn-danger btn-circle">
									   <span class="icon text-white-50">
					                      <i class="fas fa-trash"></i>
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

