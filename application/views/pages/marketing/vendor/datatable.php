<div class="container-fluid">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Vendor</h6>
               		<!-- <a href="<?php echo base_url(). 'index.php/vendor/input';?>" class="btn btn-primary btn-icon-split" style="float: right;"> -->
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
							<th width="2%">No</th>
							<th>Company Name</th>
							<th>No. Registered</th>
							<th>Date Registered</th>
							<th>Validity Period</th>
							<th>Link Website</th>
							<th hidden>ID</th>
							<th hidden>Password</th>
							<th>Note</th>
							<th width="5%">Action</th>
						</tr>
					 </thead>
						</tbody>
							<?php 
							$id = 1;
							foreach($vendor as $c){ 
							?>
							<tr>
								<td><?php echo $id++ ?></td>
								<td><?php echo $c->name ?></td>
								<td><?php echo $c->no_registered ?></td>
								<td><?php echo $c->date_registered ?></td>
								<td>
									<?php if ( $c->validity_period <=  date("Y-m-d")): ?>
									        <b><p style="color:red;">Expired : <br> <?php echo $c->validity_period ?></p></b>
									<?php else: ?>
									        <b><p style="color:blue;">On : <br>  <?php echo $c->validity_period ?></p></b>
									<?php endif; ?>
								</td>
								<td><a href = "http://<?php echo $c->link_web ?>"target="_blank"><?php echo $c->link_web ?></a></td>
								<td hidden><?php echo $c->no_id ?></td>
								<td hidden><?php echo $c->password ?></td>
								<td><?php echo $c->information ?></td>
								<td  class="row justify-content-center">									
					                  <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $c->id ?>">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-edit"></i>
					                    </span>
					                  </a>

					                   <a href="<?php echo base_url(). 'index.php/vendor/delete/'.$c->id ; ?>" class="btn btn-danger btn-circle btn-sm" >
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
				<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Input Vendor</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					<form action="<?php echo base_url(). 'index.php/vendor/p_input'; ?>" method="post">

						<table width="100%">
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Company Name:</label>
									<input type="text" class="form-control" id="usr" name="name">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">No. Registered:</label>
									<input type="text" class="form-control" id="usr" name="no_registered">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Date Registered:</label>
									<input type="date" class="form-control" id="usr" name="date_registered">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Validity Period:</label>
										<input class="form-control" id="inputdefault" type="date" name="validity_period">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Link Website:</label>
										<input class="form-control" id="inputdefault"  name="link_web">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">ID:</label>
										<input class="form-control" id="inputdefault"  name="no_id">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Password:</label>
										<input class="form-control" id="inputdefault" type="text" name="password">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Note:</label>
										<textarea class="form-control" rows="5" id="inputdefault" name="information" ></textarea>
									</div>
								</td>
							</tr>
						</table>
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-info" value="Input">
						<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
					</div>
					</form>	
				</div>
				</div>
			</div>

			<?php $id = 1; 	foreach($vendor as $c){ 
			?>
			<div class="modal fade" id="Fedit<?php echo $c->id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Edit Vendor</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					

					<form action="<?php echo base_url(). 'index.php/vendor/update'; ?>" method="post">
					<table width="100%">
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Company Name:</label>
									<input type="hidden" name="id" value="<?php echo $c->id ?>">
									<input type="text" class="form-control" id="usr" name="name" value="<?php echo $c->name ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">No. Registered :</label>
									<input type="text" class="form-control" id="usr" name="no_registered" value="<?php echo $c->no_registered ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Date Registered:</label>
									<input type="date" class="form-control" id="usr" name="date_registered" value="<?php echo $c->date_registered ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Validity Period :</label>
										<input class="form-control" id="inputdefault" type="date" name="validity_period" value="<?php echo $c->validity_period ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Link Website:</label>
										<input class="form-control" id="inputdefault"  name="link_web" value="<?php echo $c->link_web ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">ID:</label>
										<input class="form-control" id="inputdefault"  name="no_id" value="<?php echo $c->no_id ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Password:</label>
										<input class="form-control" id="inputdefault" type="text" name="password" value="<?php echo $c->password ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Note:</label>
										<textarea class="form-control" rows="5" id="inputdefault" name="information"><?php echo $c->information ?></textarea>
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

