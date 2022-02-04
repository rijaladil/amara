<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
									$string = $c->info_po;
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
									<b>Bid Price :</b> <span style="color: red;"><?php echo number_format($c->price_penawaran ,0,',','.') ?></span><br>
									<b>Price     :</b> <span style="color: green;"><?php echo number_format($c->price_po ,0,',','.') ?></span>
									<?php }?>
								</td>
								<td>
									 Kosong
								</td>
								<td><?php echo $c->product_name ?></td>
								<td  class="row justify-content-center">	
								<?php if ( (in_array($this->session->userdata('level'), array(1,2))) ) { ?>		
								 	<?php if ($c->id >'0') { ?>							
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
					                   <?php } else { ?>

										<a href="#" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#Finput">
								                <span class="icon text-white-50">
								                  <i class="fas fa-flag"></i>
								                </span>
								        </a>

					                   <?php } ?>
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
							        	<label>Surat Penawaran :</label>
							            <div id="inputFormRow_pic">
							                <div class="input-group mb-3">
							                    <input size="100" type="text" id="no_penawaran" name="no_penawaran[]" class="form-control m-input" placeholder="No Penwaran" autocomplete="off">	                
							                    <input type="date" id="date" name="date[]" class="form-control m-input" placeholder="date" autocomplete="off">							               
							                    <input type="number" id="price" name="price[]" class="form-control m-input" placeholder="Price" autocomplete="off">
							                     <div class="input-group-append">                
							                        <button id="removeRow_pic" type="button" class="btn btn-primary btn-danger btn-sm">-</button>
							                    </div>								                    				                
							                </div>
							                <div class="input-group mb-3">
							                    <textarea class="form-control" type='text' rows="" id="info_penawaran" name="info_penawaran"  placeholder="Information"></textarea>
							                </div>    
							            </div>
							            <div id="newRow_pic"></div>
							            <button id="addRow_pic" type="button" class="btn btn-facebook">+Add</button>
							        </div><hr>
								</td>
							</tr>
							<!-- <tr>
								<td>
							        <div class="form-group">
							            <div id="inputFormRow_pic">
							            	<label>Surat Penawaran :</label>
							                <div class="input-group mb-3" class="border">
							                    <input size="100" type="text" id="no_penawaran" name="no_penawaran[]" class="form-control m-input" placeholder="No Penwaran" autocomplete="off">	                
							                    <input type="date" id="date" name="date[]" class="form-control m-input" placeholder="date" autocomplete="off">							               
							                    <input type="number" id="price" name="price[]" class="form-control m-input" placeholder="Price" autocomplete="off">
							                     <div class="input-group-append">                
							                        <button id="removeRow_pic" type="button" class="btn btn-primary btn-danger btn-sm">-</button>
							                    </div>								                    				                
							                </div>
							                <div class="input-group mb-3">
							                    <textarea class="form-control" type='text' rows="" id="info_penawaran" name="info_penawaran"  placeholder="Information"></textarea>
							                </div>    
							            </div>
							            <div id="newRow_pic"></div>
							            <button id="addRow_pic" type="button" class="btn btn-facebook">+Add</button>
							        </div><hr>
								</td>
							</tr>
							<tr>
								<td>
							        <div class="form-group">
							            <div id="inputFormRow_pic">
							            	<label>Surat Penawaran :</label>
							                <div class="input-group mb-3" class="border">
							                    <input size="100" type="text" id="no_penawaran" name="no_penawaran[]" class="form-control m-input" placeholder="No Penwaran" autocomplete="off">	                
							                    <input type="date" id="date" name="date[]" class="form-control m-input" placeholder="date" autocomplete="off">							               
							                    <input type="number" id="price" name="price[]" class="form-control m-input" placeholder="Price" autocomplete="off">
							                     <div class="input-group-append">                
							                        <button id="removeRow_pic" type="button" class="btn btn-primary btn-danger btn-sm">-</button>
							                    </div>								                    				                
							                </div>
							                <div class="input-group mb-3">
							                    <textarea class="form-control" type='text' rows="" id="info_penawaran" name="info_penawaran"  placeholder="Information"></textarea>
							                </div>    
							            </div>
							            <div id="newRow_pic"></div>
							            <button id="addRow_pic" type="button" class="btn btn-facebook">+Add</button>
							        </div>
								</td>
							</tr> -->
							
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
					

					<form action="<?php echo base_url(). 'index.php/Client_Process/do_upload'; ?>" method="post" enctype="multipart/form-data">
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

<script type="text/javascript">

    // add row pic
    $("#addRow_pic").click(function () {
        var html = '';
        html += '<div id="inputFormRow_pic">';
        html += '<div class="input-group mb-3">';
        html += '<input size="100" type="text" id="no_penawaran" name="no_penawaran[]" class="form-control m-input" placeholder="No Penwaran" autocomplete="off">';	                
        html += '<input type="date" id="date" name="date[]" class="form-control m-input" placeholder="date" autocomplete="off">';							               
        html += '<input type="number" id="price" name="price[]" class="form-control m-input" placeholder="Price" autocomplete="off">';
        html += '<div class="input-group-append">';                
        html += '<button id="removeRow_pic" type="button" class="btn btn-primary btn-danger btn-sm">-</button>';
        html += '</div>';								                    				                
        html += '</div>';
        html += '<div class="input-group mb-3">';
        html += '<textarea class="form-control" type="text" rows="" id="info_penawaran" name="info_penawaran"  placeholder="Information"></textarea>';
        html += '</div>'; 
        html += '</div>';

        $('#newRow_pic').append(html);
    });
    

// remove row pic
    $(document).on('click', '#removeRow_pic', function () {
        $(this).closest('#inputFormRow_pic').remove();
    });

<?php foreach($penawaran as $p){ ?>
 	// remove row pic
    $(document).on('click', '#removeRow_pic_<?php echo $p->id ?>', function () {
        $(this).closest('#inputFormRow_pic_<?php echo $p->id ?>').remove();
        console.log('#removeRow_pic_<?php echo $p->id ?>');
    });
<?php }?>

</script>