<div class="container-fluid">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Project</h6>
			  <?php if ( (in_array($this->session->userdata('level'), array(1,2,3))) ) { ?>
					  <a href="#" class="btn btn-primary btn-icon-split" style="float: right;" data-toggle="modal" data-target="#Finput">
		                <span class="icon text-white-50">
		                  <i class="fas fa-flag"></i>
		                </span>
		                <span class="text">Add +</span>
		              </a>
				<?php }?>
            </div>
            <div class="card-body">
              	<div class="table-responsive">
	                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                 <thead>
						<tr>
							<th width="5%">No</th>
							<th>Name</th>
							<th >Work Package</th>
							<th>Location</th>
							<th>Date</th>
							<th>Project</th>
							<th>Sector</th>
							<th width="7%">Action</th>
						</tr>
						</thead>
						</tbody>

							<?php 
							$id = 1;
							foreach($project as $p){ 
							?>

							<tr>
								<td><?php echo $id++ ?></td>
								<td><b><?php echo $p->name ?></b></td>
								<td><?php echo $p->work_package ?></td>
								<td><?php echo $p->location ?></td>
								<td><?php echo $p->date ?></td>
								<td><?php echo $p->project ?></td>
								<td><?php echo $p->sector ?></td>
								<td>

								<?php if ( (in_array($this->session->userdata('level'), array(1,2,3))) ) { ?>
									 <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $p->id; ?>">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-check"></i>
					                    </span>
					                  </a>

					                   <a href="<?php echo base_url(). 'index.php/project/delete/'.$p->id ; ; ?>" class="btn btn-danger btn-circle btn-sm" >
									   	<span class="icon text-white-50">
					                      <i class="fas fa-trash"></i>
					                    </span>	
					                  </a>
								<?php }?>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
			   	</div>
			</div>


			<?php $id = 1; 	foreach($project as $p){ ?>
			<div class="modal fade" id="Fedit<?php echo $p->id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Edit Client</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					
						<form action="<?php echo base_url(). 'index.php/project/update'; ?>" method="post">
							<table width="100%">
								<tr>
									<td>
										<div class="form-group">
										<label for="inputdefault">Name:</label>
										<input type="hidden" name="id" value="<?php echo $p->id ?>">
										<input type="text" class="form-control" id="usr" name="name" value="<?php echo $p->name ?>">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-group">
											<label for="inputdefault">Work Package:</label>
											<textarea class="form-control" rows="5" id="comment" name="work_package" ><?php echo $p->work_package ?></textarea>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-group ">
											<label for="inputdefault">Location:</label>
											<input class="form-control" id="inputdefault" type="text" name="location" value="<?php echo $p->location ?>">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-group ">
											<label for="inputdefault">Date:</label>
											<input class="form-control" id="inputdefault" type="number"  placeholder="YYYY" name="date" min="2000" max="2100" value="<?php echo $p->date ?>">
											
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-group ">
											<label for="inputdefault">Project:</label>
											<select class="form-control" id="project" name="project">
											<option value="<?php echo $p->project ?>"><?php echo $p->project ?></option>
											<option value="ADDENDUM AMDAL (ANDAL, RKL-RPL)">ADDENDUM AMDAL (ANDAL, RKL-RPL)</option>
											<option value="AMDAL (ANDAL, RKL-RPL)">AMDAL (ANDAL, RKL-RPL)</option>
											<option value="ANDALALIN">ANDALALIN</option>
											<option value="DELH">DELH</option>
											<option value="DPPL/DPLH">DPPL/DPLH</option>
											<option value="IMB">IMB</option>
											<option value="KAJIAN LINGKUNGAN">KAJIAN LINGKUNGAN</option>
											<option value="KAJIAN LINGKUNGAN (PERTEK)">KAJIAN LINGKUNGAN (PERTEK)</option>
											<option value="PEMANTAUAN LINGKUNGAN">PEMANTAUAN LINGKUNGAN</option>
											<option value="SIPA">SIPA</option>
											<option value="UKL-UPL">UKL-UPL</option>
										</select>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-group ">
											<label for="inputdefault">Sector:</label>
											<input class="form-control" id="inputdefault" type="text" name="sector" value="<?php echo $p->sector ?>">
										</div>
									</td>
								</tr>
							</table>

							<div class="modal-footer">
								<input type="submit" class="btn btn-info" value="Edit">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>

						</form>	
					</div>
				</div>
				</div>
			</div>
			<?php } ?>

			<div class="modal fade" id="Finput" role="dialog">
				<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Input Project</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					<form action="<?php echo base_url(). 'index.php/project/p_input'; ?>" method="post">
						<table width="100%">
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Name:</label>
									<input type="text" class="form-control" id="usr" name="name">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Work Package:</label>
										<textarea class="form-control" rows="5" id="comment" name="work_package"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Location:</label>
										<input class="form-control" id="inputdefault" type="text" name="location">
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">date:</label>
										<input class="form-control" id="inputdefault" type="number"  placeholder="YYYY" name="date" min="2000" max="2100">
										<!-- <input class="form-control" id="inputdefault" type="text"  name="date">-->
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Project:</label>
										<select class="form-control" id="project" name="project">
											<option value="">Pilih</option>
											<option value="ADDENDUM AMDAL (ANDAL, RKL-RPL)">ADDENDUM AMDAL (ANDAL, RKL-RPL)</option>
											<option value="AMDAL (ANDAL, RKL-RPL)">AMDAL (ANDAL, RKL-RPL)</option>
											<option value="ANDALALIN">ANDALALIN</option>
											<option value="DELH">DELH</option>
											<option value="DPPL/DPLH">DPPL/DPLH</option>
											<option value="IMB">IMB</option>
											<option value="KAJIAN LINGKUNGAN">KAJIAN LINGKUNGAN</option>
											<option value="KAJIAN LINGKUNGAN (PERTEK)">KAJIAN LINGKUNGAN (PERTEK)</option>
											<option value="PEMANTAUAN LINGKUNGAN">PEMANTAUAN LINGKUNGAN</option>
											<option value="SIPA">SIPA</option>
											<option value="UKL-UPL">UKL-UPL</option>
										</select>
									</div>
								</td>
							</tr>					
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Sector:</label>
										<input class="form-control" id="inputdefault" type="text" name="sector">
									</div>
								</td>
							</tr>
							<tr>
								<td><input type="submit" class="btn btn-info" value="Input"></td>
							</tr>
						</table>
					</form>	
				</div>
				</div>
			</div>
			

			

		</div>
</div>

