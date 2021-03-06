<div class="container-fluid">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Finance</h6>
			  <?php if ( (in_array($this->session->userdata('level'), array(1,5,3))) ) { ?>
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
							<th width="2%">No</th>
							<th width="15%" >Company Name </th>
							<th>Invoice No</th>
							<th>Nominal Price</th>
							<th width="10%">Date</th>
							<th width="10%">Due Date</th>
							<th width="10%">Date Confirmation</th>
							<th width="20%">Info</th>
							<th width="5%">Action</th>
						</tr>
					 </thead>
						</tbody>
							<?php 
							$id = 1;
							foreach($finance as $f){ 
							?>
							<tr>
								<td><?php echo $id++ ?></td>
								<td><?php echo $f->name ?></td>
								<td><?php echo $f->invoice_no ?></td>
								<td><?php echo number_format($f->price ,0,',','.') ?></td>
								<td><?php echo $f->date ?></td>
								<td><?php echo $f->due_date ?></td>
								<td><?php echo $f->date_confirmation ?></td>
								<td><?php echo $f->info ?></td>
								<td  class="row justify-content-center">	
								<?php if ( (in_array($this->session->userdata('level'), array(1,5,3))) ) { ?>									
					                  <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $f->id ?>">
					                    <span class="icon text-white-50">
										  <i class="fa fa-edit"></i>
										  <!-- <i class="fas fa-check"></i> -->
					                    </span>
					                  </a>
					                  &#160;	
					                   <a href="<?php echo base_url(). 'index.php/finance/delete/'.$f->id ; ?>" class="btn btn-danger btn-circle btn-sm">
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
								
			

			<div class="modal fade" id="Finput" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header ">	
						<h4 class="modal-title">Input Finance</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					<form action="<?php echo base_url(). 'index.php/finance/p_input'; ?>" method="post">

						<table width="100%">
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Company Name:</label>
										<select class="form-control" id="client_id" name="client_id" required>
											<option value="">Pilih</option>
											<?php 
											foreach($client as $c){ 
											?>
											<option value="<?php echo $c->id ?>"><?php echo $c->name ?></option>
											<?php }?>
										</select>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Invoice No:</label>								
										<input class="form-control" id="invoice_no" type="text" name="invoice_no" required>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Nominal Price:</label>								
										<input class="form-control" id="price" type="number" name="price">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Date:</label>								
										<input class="form-control" id="date" type="date" name="date">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Due Date:</label>								
										<input class="form-control" id="due_date" type="date" name="due_date">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Date Confirmation:</label>								
										<input class="form-control" id="date_confirmation" type="date" name="date_confirmation">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Information:</label>								
										<textarea class="form-control" type='text' rows="" id="info" name="info" placeholder=""></textarea>
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



			<?php $id = 1; 	foreach($finance as $f){ ?>
			<div class="modal fade" id="Fedit<?php echo $f->id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Edit Finance</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					
					<form action="<?php echo base_url(). 'index.php/finance/update'; ?>" method="post">
					<table width="100%">
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Company Name:</label>
										<input class="form-control" id="id" type="hidden" name="id" value="<?php echo $f->id ?>">
										<select class="form-control" id="client_id" name="client_id" required>
											<option value="<?php echo $f->client_id ?>"><?php echo $f->name ?></option>
											<?php 
											foreach($client as $c){ 
											?>
											<option value="<?php echo $c->id ?>"><?php echo $c->name ?></option>
											<?php }?>
										</select>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Invoice No:</label>								
										<input class="form-control" id="invoice_no" type="text" name="invoice_no" required value="<?php echo $f->invoice_no ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Nominal Price:</label>								
										<input class="form-control" id="price" type="number" name="price" value="<?php echo $f->price ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Date:</label>								
										<input class="form-control" id="date" type="date" name="date" value="<?php echo $f->date ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Due Date:</label>								
										<input class="form-control" id="due_date" type="date" name="due_date" value="<?php echo $f->due_date?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Date Confirmation:</label>								
										<input class="form-control" id="date_confirmation" type="date" name="date_confirmation" value="<?php echo $f->date_confirmation ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Information:</label>								
										<textarea class="form-control" type='text' rows="" id="info" name="info" placeholder=""><?php echo $f->info ?></textarea>
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

