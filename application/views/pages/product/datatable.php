<div class="container-fluid">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Product</h6>
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
							<th>Name</th>
							<th>Category Teknik</th>
							<th width="10%">Action</th>
						</tr>

						</thead>
						</tbody>
							<?php 
							$id = 1;
							foreach($product as $p){ 
							?>

							<tr>
								<td><?php echo $id++ ?></td>
								<td><b><?php echo $p->name ?></b></td>
								<td>
									<?php if ($p->category_teknik === '1') : ?> AMDAL
									<?php elseif ($p->category_teknik === '2'): ?> PERTEK
									<?php endif; ?>
								</td>
							
								<td>
							          <a href="#"  class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Ffedit<?php echo $p->id ?>">
									  	<span class="icon text-white-50 ">
					                      <i class="fas fa-edit"></i>
					                    </span>
					                  </a>


					                   <a href="<?php echo base_url(). 'index.php/product/delete/'.$p->id ; ?>" class="btn btn-danger btn-circle btn-sm">
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
						<h4 class="modal-title">Input Product</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					<form action="<?php echo base_url(). 'index.php/product/p_input'; ?>" method="post">

						<table width="100%">
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Name :</label>
									<input class="form-control" id="inputdefault" type="text" name="name" value="">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Category Teknik:</label>								
										<select class="form-control" name="category_teknik">
											
											<option value="">Pilih</option>
											<option value="1">AMDAL</option>
											<option value="2">PERTEK</option>
										</select>	
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



			<?php $id = 1; 	foreach($product as $p){ ?>
			<div class="modal fade" id="Ffedit<?php echo $p->id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Edit Product</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					
					<form action="<?php echo base_url(). 'index.php/product/update'; ?>" method="post">
					<table width="100%">
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Name :</label>
									<input type="hidden" name="id" value="<?php echo $p->id ?>">
									<input class="form-control" id="inputdefault" type="text" name="name" value="<?php echo $p->name ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Category Teknik:</label>		
										<select class="form-control" name="category_teknik">
											
											<option value="<?php echo $p->category_teknik ?>">
												<?php if ($p->category_teknik === '1') : ?> AMDAL
												<?php elseif ($p->category_teknik === '2'): ?> PERTEK
												<?php endif; ?>

											</option>
											<option value="">Pilih</option>
											<option value="1">AMDAL</option>
											<option value="2">PERTEK</option>
										</select>					
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

