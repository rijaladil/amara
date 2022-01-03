<div class="container-fluid">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Sector</h6>
               		<a href="#" class="btn btn-primary btn-icon-split" style="float: right;" data-toggle="modal" data-target="#Finput">
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
							<th>Sector Name</th>
							<th>Keterangan</th>
							<th width="10%">Action</th>
						</tr>

						</thead>
						</tbody>
							<?php 
							$id = 1;
							foreach($sector as $s){ 
							?>

							<tr>
								<td><?php echo $id++ ?></td>
								<td><b><?php echo $s->name ?></b></td>
								<td><?php echo $s->ket ?></td>
								
								<td class="text-centert">
							         <a href="#"  class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $s->id ?>">
									  	<span class="icon text-white-50">
										  <i class="fa fa-edit"></i>
										  <!-- <i class="fas fa-check"></i> -->
					                    </span>
					                  </a>

					                   <a href="<?php echo base_url(). 'index.php/sector/delete/'.$s->id ; ?>" class="btn btn-danger btn-circle btn-sm">
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
		


			<div class="modal fade" id="Finput" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header ">	
						<h4 class="modal-title">Input Sector</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					<form action="<?php echo base_url(). 'index.php/sector/p_input'; ?>" method="post">

						<table width="100%">
							
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Sector Name:</label>								
										<input class="form-control" id="inputdefault" type="text" name="name">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Description:</label>
									<textarea class="form-control" type='text' rows="7" id="ket" name="ket"></textarea>
									</div>
								</td>
							</tr>
						</table>

					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-info" value="Input">
						<button type="submit" class="btn btn-info" data-dismiss="modal">Close</button>
					</div>
					</form>	
				</div>
				</div>
			</div>



			<?php $id = 1; 	foreach($sector as $s){ ?>
			<div class="modal fade" id="Fedit<?php echo $s->id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Edit Sector</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					
					<form action="<?php echo base_url(). 'index.php/sector/update'; ?>" method="post">
					<table width="100%">
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Name:</label>			
										<input type="hidden" name="id" value="<?php echo $s->id ?>">				
										<input class="form-control" id="inputdefault" type="text" name="name" value="<?php echo $s->name ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Description:</label>	
									<textarea class="form-control" type='text' rows="7" id="ket" name="ket"><?php echo $s->ket ?></textarea>
									</div>
								</td>
							</tr>
						</table>			
					
						<div class="modal-footer">
							<input type="submit" class="btn btn-info" value="Edit">
							<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
						</div>
					</form>	
					</div>
				</div>
				</div>
			</div>
			<?php } ?>
			
		</div>
</div>

