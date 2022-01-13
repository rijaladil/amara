<div class="container-fluid">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Payment</h6>
			  <?php if ( (in_array($this->session->userdata('level'), array(0,1,2,5,3))) ) { ?>
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
							<th width="2%">Tahap</th>
							<th width="10%">Percent (%)</th>
							<th width="10%">Price</th>
							<th>Info</th>
							<th width="10%">Status</th>
							<th width="5%">Action</th>
						</tr>
					 </thead>
						</tbody>
							<?php 
							$id = 1;
							foreach($payment as $p){ 
							?>
							<tr>
								<td><?php echo $id++ ?></td>
								<td><?php echo $p->name ?></td>
								<td><?php echo $p->tahap ?></td>
								<td><?php echo $p->percentage ?></td>
								<td><?php echo number_format($p->price ,0,',','.') ?></td>
								<td><?php echo $p->info ?></td>
								<td><?php if ( $p->status  === '0'): ?>
									        <b><p style="color:red;">Outstanding </p></b>
									<?php else: ?>
									        <b><p style="color:green;">Paid</p></b>
									<?php endif; ?>
								</td>
								<td  class="row justify-content-center">	
								<?php if ( (in_array($this->session->userdata('level'), array(1,5,3))) ) { ?>									
					                  <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $p->id ?>">
					                    <span class="icon text-white-50">
										  <i class="fa fa-edit"></i>
										  <!-- <i class="fas fa-check"></i> -->
					                    </span>
					                  </a>
					                  &#160;	
					                   <a href="<?php echo base_url(). 'index.php/payment/delete/'.$p->id ; ?>" class="btn btn-danger btn-circle btn-sm">
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
						<h4 class="modal-title">Input Payment</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					<form action="<?php echo base_url(). 'index.php/payment/p_input'; ?>" method="post">

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
										<label for="inputdefault">Tahap:</label>								
										<input class="form-control" id="tahap" type="number" name="tahap">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Precent (%):</label>								
										<input class="form-control" id="percentage" type="number" name="percentage">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Price:</label>								
										<input class="form-control" id="price" type="number" name="price">
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
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Status:</label>
										<select class="form-control" id="status" name="status">
											<option value="">Pilih</option>
											<option value="0">Outstanding</option>
											<option value="1">Paid</option>
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



			<?php $id = 1; 	foreach($payment as $p){ ?>
			<div class="modal fade" id="Fedit<?php echo $p->id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Edit Payment</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					
					<form action="<?php echo base_url(). 'index.php/payment/update'; ?>" method="post">
					<table width="100%">
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Company Name:</label>
										<input class="form-control" id="id" type="hidden" name="id" value="<?php echo $p->id ?>">
										<select class="form-control" id="client_id" name="client_id" required>
											<option value="<?php echo $p->client_id ?>"><?php echo $p->name ?></option>
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
										<label for="inputdefault">Tahap:</label>								
										<input class="form-control" id="tahap" type="number" name="tahap" value="<?php echo $p->tahap ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Precent (%):</label>								
										<input class="form-control" id="percentage" type="number" name="percentage" value="<?php echo $p->percentage ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Price:</label>								
										<input class="form-control" id="price" type="number" name="price" value="<?php echo $p->price ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Information:</label>								
										<textarea class="form-control" type='text' rows="" id="info" name="info" placeholder=""><?php echo $p->info ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Status:</label>
										<select class="form-control" id="status" name="status">
											<option value="<?php echo $p->status ?>">
												<?php if ( $p->status  === '0'): ?>
												        Outstanding
												<?php else: ?>
												        Paid
												<?php endif; ?>
													
											</option>
											<option value="">Pilih</option>
											<option value="0">Outstanding</option>
											<option value="1">Paid</option>
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

