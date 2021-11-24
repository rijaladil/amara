<div class="container-fluid">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Client Process</h6>
			  <?php if ( (in_array($this->session->userdata('level'), array(1,2))) ) { ?>
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
							<th width="10%">NO PO</th>
							<th width="10%">Company Name</th>
							<th width="20%">Description</th>
							<th width="5%">Price</th>
							<th>Process</th>
							<th width="7%">Product</th>
							<th width="7%">Action</th>
						</tr>
					 </thead>
						</tbody>
							<?php 
							$id = 1;
							foreach($client_process as $c){ 
							?>
							<tr>
								<td><?php echo $id++ ?></td>
								<td><a  target="_blank" href="<?php echo base_url(). 'upload/'.$c->upload ; ?>" class="btn-primary view-pdf" ><?php echo $c->no_po ?></a></td>
								<td><?php echo $c->name ?></td>
								<td><?php
								$string = $c->description;
									if (strlen($string) > 500) {

									    // truncate string
									    $stringCut = substr($string, 0, 500);
									    $endPoint = strrpos($stringCut, ' ');

									    //if the string doesn't contain any space then it will cut without word basis.
									    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
									     $string .= '  ...';
									}
									echo $string;

								?></td>
								<td><?php if ( (in_array($this->session->userdata('level'), array(0,1,2))) ) { ?>	
									<b>Bid Price :</b> <span style="color: red;"><?php echo number_format($c->price_bid ,0,',','.') ?></span><br>
									<b>Price     :</b> <span style="color: green;"><?php echo number_format($c->price ,0,',','.') ?></span>
									<?php }?>
								</td>
								<td>
									<?php if ( $c->date_1  === NULL or $c->date_1 === '0000-00-00'): ?>
									        
									<?php else: ?>
									        <b>Contact :</b> <?php echo $c->date_1 ?> , <?php echo $c->process_1 ?><hr>
									<?php endif; ?>
									<?php if ( $c->date_2  === NULL or $c->date_2 === '0000-00-00'): ?>
									        
									<?php else: ?>
									        <b>Surat Penawaran :</b> <?php echo $c->date_2 ?> , <?php echo $c->process_2 ?><hr>
									<?php endif; ?>
									<?php if ( $c->date_3  === NULL or $c->date_3 === '0000-00-00'): ?>
									        
									<?php else: ?>
									        <b>Konfirmasi :</b> <?php echo $c->date_3 ?> , <?php echo $c->process_3 ?><hr>
									<?php endif; ?>
									<?php if ( $c->date_4  === NULL or $c->date_4 === '0000-00-00'): ?>
									        
									<?php else: ?>
									        <b>Negosiasi Harga :</b> <?php echo $c->date_4 ?> , <?php echo $c->process_4 ?><hr>
									<?php endif; ?>
									<?php if ( $c->date_5  === NULL or $c->date_5 === '0000-00-00'): ?>
									        
									<?php else: ?>
									        <b>PO / Kontrak :</b> <?php echo $c->date_5 ?> , <?php echo $c->process_5 ?><hr>
									<?php endif; ?>
								</td>
								<td><?php echo $c->product_name ?></td>
								<td  class="row justify-content-center">	
								<?php if ( (in_array($this->session->userdata('level'), array(1,2))) ) { ?>									
					                  <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $c->id ?>">
					                    <span class="icon text-white-50">
										  <i class="fa fa-edit"></i>
										  <!-- <i class="fas fa-check"></i> -->
					                    </span>
					                  </a>
					                  &#160;
					                   <a href="#" class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#Upload<?php echo $c->id ?>">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-upload"></i>
					                    </span>
					                  </a>	
					                  &#160;	
					                   <a href="<?php echo base_url(). 'index.php/Client_Process/delete/'.$c->id ; ?>" class="btn btn-danger btn-circle btn-sm">
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
<!-- INPUT DATA  -->
			<div class="modal fade" id="Finput" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header ">	
						<h4 class="modal-title">+Add Client Process</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					<form action="<?php echo base_url(). 'index.php/Client_Process/p_input'; ?>" method="post">

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
										<label for="inputdefault">Description:</label>
										<textarea class="form-control" type='text' rows="" id="description" name="description"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Status Project:</label>
										<select class="form-control" name="product_id">
					
											<option value="">Pilih</option>
											<?php 
											foreach($products as $p){ 
											?>
											<option value="<?php echo $p->id ?>"><?php echo $p->name ?></option>
											<?php }?>
										</select>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Bid Price:</label>
										<input type="number" class="form-control" id="price_bid" name="price_bid" required><br>
										<label for="inputdefault">Price:</label>
										<input type="number" class="form-control" id="price" name="price" required><br>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2" >
									<div class="form-group">
									<label for="inputdefault">Contact:</label>
									<input type="date" class="form-control" id="date_1" name="date_1" required><br>
									<textarea class="form-control" type='text' rows="" id="process_1" name="process_1" placeholder="Information Contact"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2" >
									<div class="form-group">
									<label for="inputdefault">Surat Penawaran:</label>
									<input type="date" class="form-control" id="date_2" name="date_2"><br>
									<textarea class="form-control" type='text' rows="" id="process_2" name="process_2" placeholder="Information Surat Penawaran"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2" >
									<div class="form-group">
									<label for="inputdefault">Konfirmasi:</label>
									<input type="date" class="form-control" id="date_3" name="date_3" ><br>
									<textarea class="form-control" type='text' rows="" id="process_3" name="process_3" placeholder="Information Konfirmasi"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2" >
									<div class="form-group">
									<label for="inputdefault">Negosiasi:</label>
									<input type="date" class="form-control" id="date_4" name="date_4"><br>
									<textarea class="form-control" type='text' rows="" id="process_4" name="process_4" placeholder="Information Negosiasi"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2" >
									<div class="form-group">
									<label for="inputdefault">PO / Kontrak:</label>
									<input type="text"  placeholder="NO PO" class="form-control" id="no_po" name="no_po" ><br>
									<input type="date" class="form-control" id="date_5" name="date_5" ><br>
									<textarea class="form-control" type='text' rows="" id="process_5" name="process_5" placeholder="Information PO / Kontrak"></textarea><br>									
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

<!-- UPLOAD DATA  -->
			<?php $id = 1; 	foreach($client_process as $c){ 
			?>
			<div class="modal fade" id="Upload<?php echo $c->id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Upload SPK</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					

					<form action="<?php echo base_url(). 'index.php/client_process/do_upload'; ?>" method="post" enctype="multipart/form-data">
						<table width="100%">
							
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Upload:</label>								
									<input type="hidden" name="id" value="<?php echo $c->id ?>">
									<input type="file" name="upload" class="" data-buttonName="btn-primary" id="upload"/>
									</div>

								
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


<!-- UDAPTE DATA -->
			<?php $id = 1; 	foreach($client_process as $c){ 
			?>
			<div class="modal fade" id="Fedit<?php echo $c->id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Edit Client Process</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					
					<form action="<?php echo base_url(). 'index.php/Client_Process/update'; ?>" method="post">
						<table width="100%">
				
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Company Name:</label>
										<input type="hidden" name="id" value="<?php echo $c->id ?> " >
										<select class="form-control" id="" name="" required>
											<option>
												<?php echo $c->name ?>
											</option>
										</select>
									</div>
								</td>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Description:</label>
										<textarea class="form-control" type='text' rows="" id="description" name="description"><?php echo $c->description ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Status Project:</label>
										<select class="form-control" name="product_id">
											<?php 
											foreach($products as $p){ 
												 if($p->id == $c->product_id) {
											?>
											<option value="<?php echo $p->id ?>"><?php echo $p->name ?></option>
											<?php } }?>
											
											<option value="">Pilih</option>
											<?php 
											foreach($products as $p){ 
											?>
											<option value="<?php echo $p->id ?>"><?php echo $p->name ?></option>
											<?php }?>
										</select>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Bid Price:</label>
										<input type="number" class="form-control" id="price_bid" name="price_bid" value="<?php echo $c->price_bid ?>"><br>
										<label for="inputdefault">Price:</label>
										<input type="number" class="form-control" id="price" name="price" value="<?php echo $c->price ?>"><br>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2" >
									<div class="form-group">
									<label for="inputdefault">Contact:</label>
									<input type="date" class="form-control" id="date_1" name="date_1" required value="<?php echo $c->date_1 ?>"><br>
									<textarea class="form-control" type='text' rows="" id="process_1" name="process_1" placeholder="Information Contact"><?php echo $c->process_1 ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2" >
									<div class="form-group">
									<label for="inputdefault">Surat Penawaran:</label>
									<input type="date" class="form-control" id="date_2" name="date_2" value="<?php echo $c->date_2 ?>"><br>
									<textarea class="form-control" type='text' rows="" id="process_2" name="process_2" placeholder="Information Surat Penawaran"><?php echo $c->process_2 ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2" >
									<div class="form-group">
									<label for="inputdefault">Konfirmasi:</label>
									<input type="date" class="form-control" id="date_3" name="date_3" value="<?php echo $c->date_3 ?>"><br>
									<textarea class="form-control" type='text' rows="" id="process_3" name="process_3" placeholder="Information Konfirmasi"><?php echo $c->process_3 ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2" >
									<div class="form-group">
									<label for="inputdefault">Negosiasi:</label>
									<input type="date" class="form-control" id="date_4" name="date_4" value="<?php echo $c->date_4 ?>"><br>
									<textarea class="form-control" type='text' rows="" id="process_4" name="process_4" placeholder="Information Negosiasi"><?php echo $c->process_4 ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2" >
									<div class="form-group">
									<label for="inputdefault">PO / Kontrak:</label>									
									<input type="text" placeholder="NO PO" class="form-control" id="no_po" name="no_po" value="<?php echo $c->no_po ?>"><br>
									<input type="date" class="form-control" id="date_5" name="date_5" value="<?php echo $c->date_5 ?>"><br>
									<textarea class="form-control" type='text' rows="" id="process_5" name="process_5" placeholder="Information PO / Kontrak"><?php echo $c->process_5 ?></textarea><br>				
									</div>
								</td>
							</tr>
							<!-- <tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Tipe Process:</label>
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
									</div>
								</td>
							</tr> -->
							
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

