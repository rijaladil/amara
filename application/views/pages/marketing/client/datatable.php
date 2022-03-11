<div class="container-fluid">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Client</h6>
					<!-- <a href="#" class="btn btn-primary btn-icon-split" style="float: right;" data-toggle="modal" data-target="#Finput">
		                <span class="icon text-white-50">
		                  <i class="fas fa-flag"></i>
		                </span>
		                <span class="text">Add +</span>
		              </a> -->
            </div>
            <div class="card-body">
              	<div class="table-responsive">
	                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                 <thead>
						<tr>
						<th width="2%">No</th>
							<th width="20%">Company Name</th>
							<th width="25%">Kegiatan Usaha</th>
							<th>Address</th>
						</tr>
					 </thead>
						</tbody>
							<?php 
							$id = 1;
							foreach($client as $c){ 
							?>
							<tr>
								<td><?php echo $id++ ?></td>
								<td><b><?php echo $c->name ?></b></td>
								<td><?php echo $c->information ?></td>
								<td><?php echo $c->address ?>, 
								<b><?php echo $c->city_kabupaten ?></b>, 
								<b><i><?php echo $c->province ?></b></i></td>

							<?php } ?>
						</tbody>
					</table>
			   	</div>
			</div>
								
			
			
		</div>
</div>

