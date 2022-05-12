<div class="container-fluid">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Working Log</h6>
               		<a href="<?php echo base_url(). 'index.php/work/input';?>" class="btn btn-primary btn-icon-split" style="float: right;" data-toggle="modal" data-target="#Finput"> 
		                <span class="icon text-white-50">
		                  <i class="fas fa-flag"></i>
		                </span>
		                <span class="text">Add +</span>
		              </a>
            </div>
            <div class="card-body">
              	<div class="table-responsive">
              		<form method="post" action="<?php echo base_url(); ?>index.php/work/index">
              		<table border="0" cellspacing="5" cellpadding="5" align="right">
				      <tbody>
				      	<tr>
				      		<td> 		
				      			<b>Worker : </b>
				            	<select class="form-select" ria-label="Default select example" id="id_user" name="id_user">
									<option value="">Pilih</option>
									<?php 
									foreach($user as $u){ 
									?>
									<option value="<?php echo $u->id ?>"><?php echo $u->name ?></option>
									<?php }?>
								</select>      			
				            	<b>Date : </b>
				            	<input class="text-center" type="text" id="min" name="min" value="<?php echo ($min == '') ? date('Y-m-01') : $min;?>"> <b>To</b>&nbsp;

				            	<input class="text-center" type="text" id="max" name="max" value="<?php echo ($max == '') ? date('Y-m-31') : $max;?>">

				            	<input type="submit" class="btn btn-success btn-sm" value="Select">
				            </td>
				        </tr>
				    	</tbody>
				  	</table>
				  	</form>



	                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                 <thead>
						<tr">
							<th width="2%">No</th>
							<th>Item</th>
							<th>Job</th>
							<th>Date</th>
							<th>Start Time</th>
							<th>Finish Time</th>
							<th>Note</th>
							<th>Worker</th>
							<th width="8%"  align="center">Action</th>
						</tr>
						</thead>
						</tbody>
							<?php 
							$id = 1;	
											foreach($work_by_date as $w){ 
									if ( (in_array($this->session->userdata('level'), array(0,1))) ) 
										{
											
							?>
							<tr>
								<td><?php echo $id++ ?></td>
								<td><?php if (!empty($w->upload)){?> <a  target="_blank" href="<?php echo base_url(). 'upload_working/'.$w->upload ; ?>" class="btn btn-primary btn-sm" >
									<?php } echo $w->item ?></a>
								</td>
								<td><?php echo $w->id_job ?></td>
								<td><?php echo $w->date ?></td>
								<td><?php echo $w->start ?></td>
								<td><?php echo $w->finish ?></td>
								<td><?php echo $w->note ?></td>
								<td><?php  foreach($user as $u){ 
											if($w->id_user == $u->id) { ?>
									<?php echo $u->name ?>
									<?php } }?></td>
								<td>									
				                  <a href="<?php echo base_url(). 'index.php/work/edit/'.$w->id ; ?>" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $w->id ?>">
				                    <span class="icon text-white-50">
				                      <i class="fas fa-edit"></i>
				                    </span>
				                  </a>
				                   &#160;	
				                    <a href="#" class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#Upload<?php echo $w->id ?>">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-upload"></i>
					                    </span>
					                  </a>	
				                   &#160;	
				                   <a href="<?php echo base_url(). 'index.php/work/delete/'.$w->id ; ; ?>" class="btn btn-danger btn-circle btn-sm">
				                    <span class="icon text-white-50">
				                      <i class="fas fa-trash"></i>
				                    </span>
				                  </a>

								</td>
							</tr>
							<?php } elseif($w->id_user === $this->session->userdata('id')) { ?> 

								<tr>
								<td><?php echo $id++ ?></td>
								<td><a  target="_blank" href="<?php echo base_url(). 'upload_working/'.$w->upload ; ?>" class="btn btn-primary btn-sm" >
									<?php echo $w->item ?></a>
								</td>
								<td><?php echo $w->id_job ?></td>
								<td><?php echo $w->date ?></td>
								<td><?php echo $w->start ?></td>
								<td><?php echo $w->finish ?></td>
								<td><?php echo $w->note ?></td>
								<td><?php  foreach($user as $u){ 
											if($w->id_user == $u->id) { ?>
									<?php echo $u->name ?>
									<?php } }?></td>
								<td>									
				                  <a href="<?php echo base_url(). 'index.php/work/edit/'.$w->id ; ?>" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $w->id ?>">
				                    <span class="icon text-white-50">
				                      <i class="fas fa-edit"></i>
				                    </span>
				                  </a>
				                   &#160;	
				                    <a href="#" class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#Upload<?php echo $w->id ?>">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-upload"></i>
					                    </span>
					                  </a>	
				                   &#160;	
				                   <a href="<?php echo base_url(). 'index.php/work/delete/'.$w->id ; ; ?>" class="btn btn-danger btn-circle btn-sm">
				                    <span class="icon text-white-50">
				                      <i class="fas fa-trash"></i>
				                    </span>
				                  </a>

								</td>
							</tr>

							<?php } } ?>

						</tbody>
					</table>

			   	</div>
			</div>
		</div>
</div>


<!-- +ADD -->
<div class="modal fade" id="Finput" role="dialog">
	<div class="modal-dialog modal-xl">
	<div class="modal-content">
		<div class="modal-header ">	
			<h4 class="modal-title">Aktivitas Pekerjaan Harian</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		<div class="modal-body">
			<form action="<?php echo base_url(). 'index.php/work/p_input'; ?>" method="post">
				<table width="100%">
					<tr>
						<td>
							<div class="form-group">
							  <label for="inputdefault">Jenis Pekerjaan:</label>
							  <input type="text" class="form-control" id="item" name="item" required>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<label for="inputdefault">Deskripsi Pekerjaan:</label>
								<textarea class="form-control" rows="5" id="id_job" name="id_job"></textarea>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Date:</label>
								<input class="form-control" id="date" type="date" name="date" value="<?php echo date("Y-m-d");?>" readonly>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Start Time:</label>
								<input class="form-control" id="start" type="time" name="start" required>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Finish Time:</label>
								<input class="form-control" id="finish" type="time" name="finish" required>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Note:</label>
								<textarea class="form-control" rows="5" id="note" name="note"></textarea>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Worker:</label>
								<select class="form-control" id="id_user" name="id_user" required>
									<option value="">Pilih</option>
									<?php 
									foreach($user as $u){ 
									?>
									<option value="<?php echo $u->id ?>"><?php echo $u->name ?></option>
									<?php }?>
								</select>
							</div>
						</td>
					</tr>					
				</table>
					<div class="modal-footer">
						<input type="submit" class="btn btn-success" value="Input">
						<button type="submit" class="btn btn-warning " data-dismiss="modal">Close</button>
					</div>
			</form>	
		</div>
	</div>
	</div>
</div>


<!-- EDIT -->
<?php $id = 1; 	foreach($work as $w){ ?>
<div class="modal fade" id="Fedit<?php echo $w->id ?>" role="dialog">
	<div class="modal-dialog modal-xl">
	<div class="modal-content">
		<div class="modal-header">	
			<h4 class="modal-title">Edit Client</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		<div class="modal-body">
		
		<form action="<?php echo base_url(). 'index.php/work/update'; ?>" method="post">
			<table width="100%">
				<tr>
					<td>
						<div class="form-group">
						  <label for="inputdefault">Item:</label>
						  <input type="hidden" name="id" value="<?php echo $w->id ?>">
						  <input type="text" class="form-control" id="item" name="item" value="<?php echo $w->item ?>">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group">
							<label for="inputdefault">Job:</label>
							<textarea class="form-control" rows="5" id="comment" name="id_job"><?php echo $w->id_job ?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group ">
							<label for="inputdefault">Date:</label>
							<input class="form-control" id="inputdefault" type="text" name="date" value="<?php echo $w->date ?>" readonly>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group ">
							<label for="inputdefault">Start Time:</label>
							<input class="form-control" id="inputdefault" type="time" name="start" value="<?php echo $w->start ?>">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group ">
							<label for="inputdefault">Finish Time:</label>
							<input class="form-control" id="inputdefault" type="time" name="finish" value="<?php echo $w->finish ?>">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group ">
							<label for="inputdefault">Note:</label>
							<textarea class="form-control" rows="5" id="comment" name="note"><?php echo $w->note ?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-group ">
							<label for="inputdefault">Worker:</label>
							<select class="form-control" id="id_user" name="id_user">
								
								<?php  foreach($user as $u){ 
										if($w->id_user == $u->id) { ?>
								<option value="<?php echo $u->id ?>"><?php echo $u->name ?></option>
								<?php } }?>
								<?php  foreach($user as $u){ ?>
								<option value="<?php echo $u->id ?>"><?php echo $u->name ?></option>
								<?php }?>
							</select>
						</div>
					</td>
				</tr>
			</table>
			<div class="modal-footer">
				<input type="submit" class="btn btn-success" value="Edit">
				<button type="submit" class="btn btn-warning " data-dismiss="modal">Close</button>
			</div>
		</form>	
		</div>
	</div>
	</div>
</div>
<?php } ?>
			
<!-- UPLOAD DATA  -->
<?php $id = 1; 	foreach($work as $w){ ?>
<div class="modal fade" id="Upload<?php echo $w->id ?>" role="dialog">
	<div class="modal-dialog modal-xl">
	<div class="modal-content">
		<div class="modal-header">	
			<h4 class="modal-title">Upload Activity</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		<div class="modal-body">
		

		<form action="<?php echo base_url(). 'index.php/work/do_upload'; ?>" method="post" enctype="multipart/form-data">
			<table width="100%">
				
				<tr>
					<td>
						<div class="form-group">
						<label for="inputdefault">Upload:</label>								
						<input type="hidden" name="id" value="<?php echo $w->id ?>">
						<input type="file" name="upload" class="" data-buttonName="btn-primary" id="upload"/>
						</div>

					
						</div>

					</td>
				</tr>
				
			</table>
		
			<div class="modal-footer">
				<input type="submit" class="btn btn-info" value="Upload">
				<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
			</div>
		</form>
		</div>
	</div>
	</div>
</div>
<?php } ?>