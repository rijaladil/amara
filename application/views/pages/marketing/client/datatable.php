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
							<th width="10%">Kegiatan Usaha</th>
							<th>Address</th>
							<th width="10%">Status Project</th>
							<th width="7%">Action</th>
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
								 <td><?php echo $c->status_project ?></td>
								<td class="row justify-content-center">										
					                  <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $c->id ?>">
					                    <span class="icon text-white-50">
										  <i class="fa fa-edit"></i>
										  <!-- <i class="fas fa-check"></i> -->
					                    </span>
					                  </a>

					                   <a href="<?php echo base_url(). 'index.php/client/delete/'.$c->id ; ?>" class="btn btn-danger btn-circle btn-sm">
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
								
			

			<?php $id = 1; 	foreach($client as $c){ 
			?>
			<div class="modal fade" id="Fedit<?php echo $c->id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Edit Client</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					
					<form action="<?php echo base_url(). 'index.php/client/update'; ?>" method="post">
						<table width="100%">
							<tr>
								<td>
									<div class="form-group">
									<input type="hidden" name="id" value="<?php echo $c->id ?>">
									<label for="inputdefault">Company Name:</label>
									<input type="text" class="form-control" id="usr" name="name" value="<?php echo $c->name ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Kegiatan Usaha:</label>
										<textarea class="form-control" rows="5" id="comment" name="information" ><?php echo $c->information ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Address:</label>
										<textarea class="form-control" type='text' rows="" id="comment" name="address"><?php echo $c->address ?></textarea><br>
										<input class="form-control" id="inputdefault" type="text" name="city_kabupaten" placeholder="City or Kabupaten" value="<?php echo $c->city_kabupaten ?>"><br>
										<input class="form-control" id="inputdefault" type="text" name="province" placeholder="Provinsi" value="<?php echo $c->province ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Mailing Address:</label>
										<textarea class="form-control" type='text' rows="" id="comment" name="address2"><?php echo $c->address2 ?></textarea>
									</div>
								</td>
							</tr>
						</table>

						<table width="100%">
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Contact:</label>
										<input class="form-control" id="inputdefault" type="text" name="contact" value="<?php echo $c->contact ?>">
									</div>
								</td>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Email:</label>
										<input class="form-control" id="inputdefault"  name="email" value="<?php echo $c->email ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Sector:</label>
										<input class="form-control" id="inputdefault"  name="sector" value="<?php echo $c->sector ?>">
									</div>
								</td>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Status Project:</label>
										<input class="form-control" id="inputdefault"  name="status_project" value="<?php echo $c->status_project ?>">
									</div>
								</td>
							</tr>
							</table>
							<table while="100%">
							<tr>
								<td>
									<!-- <div class="form-group "> -->
										<label for="inputdefault">Pic Contact:</label>
									<!-- </div> -->
								</td>
							</tr>
							<tr>
								<div class="form-group ">
									<td><input class="form-control" id="inputdefault" type="text" name="pic" placeholder="Pic 1" value="<?php echo $c->pic ?>"></td>
									<td><input class="form-control" id="inputdefault" type="text" name="pic_2" placeholder="Pic 2" value="<?php echo $c->pic_2 ?>"></td>
									<td><input class="form-control" id="inputdefault" type="text" name="pic_3" placeholder="Pic 3" value="<?php echo $c->pic_3 ?>"></td>
									<td><input class="form-control" id="inputdefault" type="text" name="pic_4" placeholder="Pic 4" value="<?php echo $c->pic_4 ?>"></td>
									<td><input class="form-control" id="inputdefault" type="text" name="pic_5" placeholder="Pic 5" value="<?php echo $c->pic_5 ?>"></td>
								</div>
							</tr>
							<tr>
								<div class="form-group ">
									<td><input class="form-control" id="inputdefault" type="text" name="pic_contact" placeholder="Contact 1" value="<?php echo $c->pic_contact ?>"></td>
									<td><input class="form-control" id="inputdefault" type="text" name="pic_contact_2" placeholder="Contact 2" value="<?php echo $c->pic_contact_2 ?>"></td>
									<td><input class="form-control" id="inputdefault" type="text" name="pic_contact_3" placeholder="Contact 3" value="<?php echo $c->pic_contact_3 ?>"></td>
									<td><input class="form-control" id="inputdefault" type="text" name="pic_contact_4" placeholder="Contact 4" value="<?php echo $c->pic_contact_4 ?>"></td>
									<td><input class="form-control" id="inputdefault" type="text" name="pic_contact_5" placeholder="Contact 5" value="<?php echo $c->pic_contact_5 ?>"></td>
								</div>
									
							</tr>
						</table>			
						<br>
						<table  while="100%">
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Status:</label>
										<select class="form-control" name="status_client">
											<option>
												<?php if ($c->status_client === '0') : ?> Contact
												<?php elseif ($c->status_client === '1'): ?> Client Process
												<?php else: ?> Client Closing
												<?php endif; ?>
											</option><hr>	
											<option value="0">Contact</option>
											<option value="1">Client Process</option>
											<option value="2">Client Closing</option>
										</select>
										<!-- <input class="form-control" id="inputdefault" type="text" name="pic_contact" value="<?php echo $c->status_client ?>"> -->
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

