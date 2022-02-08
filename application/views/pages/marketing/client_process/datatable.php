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
							<th width="20%">Project Activity</th>
							<th width="5%">Price</th>
							<th>Process</th>
							<th width="7%">Product</th>
							<th width="7%">Action</th>
						</tr>
					 </thead>
						</tbody>
							<?php 
							$id = 1;
							foreach($client_process_table as $ct){ 
							?>
							<tr>
								<td><?php echo $id++ ?></td>
								<td><a  target="_blank" href="<?php echo base_url(). 'upload/'.$ct->upload ; ?>" class="btn-primary view-pdf" ><?php echo $ct->no_po ?></a></td>
								<td><?php echo $ct->name ?></td>
								<td><?php
									$string = $ct->project_activity;
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
									<b>Bid Price :</b> <span style="color: red;"><?php echo number_format($ct->price_penawaran ,0,',','.') ?></span><br>
									<b>Price     :</b> <span style="color: green;"><?php echo number_format($ct->price_po ,0,',','.') ?></span>
									<?php }?>
								</td>
								<td>
									 <b>Penwaran : </b><br>
									 <?php echo $ct->no_penawaran;?> - 
									 <?php echo $ct->date_penawaran;?> - 
									 <?php echo $ct->price_penawaran;?> - 
									 <?php echo $ct->info_penawaran;?>
									 <hr>
									 <b>Confirmation : </b><br>
									 <?php echo $ct->date_confirmation;?> - 
									 <?php echo $ct->info_confirmation;?> 
									 <hr>
									 <b>PO/ Kontrak : </b><br>
									 <?php echo $ct->date_po;?> - 
									 <?php echo $ct->price_po;?> - 
									 <?php echo $ct->info_po;?> 


								</td>
								<td><?php echo $ct->product_name ?></td>
								<td  class="row justify-content-center">	
								<?php if ( (in_array($this->session->userdata('level'), array(1,2))) ) { ?>		
								 	<?php if ($ct->id >'0') { ?>							
					                  <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $ct->id ?>">
					                    <span class="icon text-white-50">
										  <i class="fa fa-edit"></i>
										  <!-- <i class="fas fa-check"></i> -->
					                    </span>
					                  </a>
					                  
					                  &#160;
					                   <a href="#" class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#Upload<?php echo $ct->id ?>">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-upload"></i>
					                    </span>
					                  </a>	
					                  &#160;	
					                
					                   <a href="<?php echo base_url(). 'index.php/Client_Process/delete/'.$ct->id ; ?>" class="btn btn-danger btn-circle btn-sm">
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
							<?php }?>
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
									<div class="form-group ">
										<label for="inputdefault">Project Activity:</label>
										<textarea class="form-control" type='text' rows="" id="project_activity" name="project_activity"  placeholder="Activity"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
							        <div class="form-group">
							        	<label>Surat Penawaran :</label>
							            <div id="inputFormRow_penawaran">
							                <div class="input-group mb-3">
							                    <input size="100" type="text" id="no_penawaran" name="no_penawaran[]" class="form-control m-input" placeholder="No penawaran" autocomplete="off">	               
							                    <input type="date" id="date_penawaran" name="date_penawaran[]" class="form-control m-input" placeholder="date" autocomplete="off">
							                    <input type="number" id="bid_price" name="bid_price[]" class="form-control m-input" placeholder="Bid Price" autocomplete="off">
							                     <div class="input-group-append">                
							                        <button id="removeRow_penawaran" type="button" class="btn btn-primary btn-danger btn-sm">-</button>
							                    </div>								                    				                
							                </div>
							                <div class="input-group mb-3">
							                    <textarea class="form-control" type='text' rows="" id="info_penawaran" name="info_penawaran[]"  placeholder="Information" autocomplete="off"></textarea>
							                </div>    
							            </div>
							            <div id="newRow_penawaran"></div>
							            <button id="addRow_penawaran" type="button" class="btn btn-facebook">+Add</button>
							        </div><hr>
								</td>
							</tr>
							<tr>
								<td>
							        <div class="form-group">
							        	<label>History Confirmation :</label>
							            <div id="inputFormRow_confirmation">
							                <div class="input-group mb-3">                
							                    <input type="date" id="date_confirmation" name="date_confirmation[]" class="form-control m-input" placeholder="date" autocomplete="off">
							                    <div class="input-group-append">                
							                        <button id="removeRow_confirmation" type="button" class="btn btn-primary btn-danger btn-sm">-</button>
							                    </div>		                
							                </div>
							                <div class="input-group mb-3">
							                    <textarea class="form-control" type="text" rows="" id="info_confirmation" name="info_confirmation[]"  placeholder="Information" autocomplete="off"></textarea>
							                </div>    
							            </div>
							            <div id="newRow_confirmation"></div>
							            <button id="addRow_confirmation" type="button" class="btn btn-facebook">+Add</button>
							        </div><hr>
								</td>
							</tr>
							<tr>
								<td>
							        <div class="form-group">
							        	<label>PO / Kontrak :</label>
							            <div id="inputFormRow_po">
							                <div class="input-group mb-3">
							                    <input size="100" type="text" id="no_po" name="no_po[]" class="form-control m-input" placeholder="No PO / Kontrak" autocomplete="off">       
							                    <input type="date" id="date_po" name="date_po[]" class="form-control m-input" placeholder="date" autocomplete="off">		               
							                    <input type="number" id="price" name="price[]" class="form-control m-input" placeholder="Price" autocomplete="off">
							                     <div class="input-group-append">                
							                        <button id="removeRow_po" type="button" class="btn btn-primary btn-danger btn-sm">-</button>
							                    </div>								                    				                
							                </div>
							                <div class="input-group mb-3">
							                    <textarea class="form-control" type="text" rows="" id="info_po" name="info_po[]"  placeholder="Information" autocomplete="off"></textarea>
							                </div>    
							            </div>
							            <div id="newRow_po"></div>
							            <button id="addRow_po" type="button" class="btn btn-facebook">+Add</button>
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
										<div class="input-group mb-3">
										<input type="text" name="client_id" value="<?php echo $c->id; ?>" hidden>
										<input type="text" name="name" id="name" value="<?php echo $c->name; ?>" class="form-control m-input" readonly>
										</div>
										
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Project Activity:</label>
										<textarea class="form-control" type='text' rows="" id="project_activity" name="project_activity"  placeholder="Activity"><?php echo $c->project_activity; ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
							        <div class="form-group">
							        	<label>Surat Penawaran :</label>
							        	<?php foreach($penawaran as $p){ 
							        		if($p->client_id == $c->id) {?>
							            <div id="inputFormRow_penawaran_<?php echo $c->id ?>">
							                <div class="input-group mb-3">
							                	<input type="hidden" name="id_penawaran" value="<?php echo $p->id_penawaran ?>" >  
							                    <input size="100" type="text" id="no_penawaran" name="no_penawaran[]" class="form-control m-input" placeholder="No penawaran" autocomplete="off" value="<?php echo $p->no_penawaran ?>" >	                
							                    <input type="date" id="date_penawaran" name="date_penawaran[]" class="form-control m-input" placeholder="date" autocomplete="off" value="<?php echo $p->date_penawaran ?>" >
							                    <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" id="bid_price" name="bid_price[]" class="form-control m-input" placeholder="Bid Price" autocomplete="off" value="<?php echo number_format($p->bid_price,0,'.',',') ?>" >
							                     <div class="input-group-append">                
							                        <button id="removeRow_penawaran_<?php echo $p->id ?>" type="button" class="btn btn-primary btn-danger btn-sm" hidden>-</button>
							                    </div>								                    				                
							                </div>
							                <div class="input-group mb-3">
							                    <textarea class="form-control" type='text' rows="" id="info_penawaran" name="info_penawaran[]"  placeholder="Information" autocomplete="off"><?php echo $p->info_penawaran ?></textarea>
							                </div>    
							            </div>
							            <?php }  }?>
							            <div id="newRow_penawaran_<?php echo $c->id ?>"></div>
							            <button id="addRow_penawaran_<?php echo $c->id ?>" type="button" class="btn btn-facebook">+Add</button>
							        </div><hr>
								</td>
							</tr>
							<tr>
								<td>
							        <div class="form-group">							        	
							        	<label>History Confirmation :</label>
							        	<?php foreach($confirmation as $co){ 
							        		if($co->client_id == $c->id) {?>
							            <div id="inputFormRow_confirmation_<?php echo $co->id ?>">
							                <div class="input-group mb-3">  
							                	<input type="hidden" name="id_confirmation" value="<?php echo $co->id_confirmation ?> " >              
							                    <input type="date" id="date_confirmation" name="date_confirmation[]" class="form-control m-input" placeholder="date" autocomplete="off" value="<?php echo $co->date_confirmation ?>">
							                    <div class="input-group-append">                
							                        <button id="removeRow_confirmation_<?php echo $co->id ?>" type="button" class="btn btn-primary btn-danger btn-sm" hidden>-</button>
							                    </div>		                
							                </div>							               
							                <div class="input-group mb-3">
							                    <textarea class="form-control" type="text" rows="" id="info_confirmation" name="info_confirmation[]"  placeholder="Information" autocomplete="off"><?php echo $co->info_confirmation ?></textarea>
							                </div>    
							            </div>
							             <?php }  }?>
							            <div id="newRow_confirmation_<?php echo $c->id ?>"></div>
							            <button id="addRow_confirmation_<?php echo $c->id ?>" type="button" class="btn btn-facebook">+Add</button>
							        </div><hr>
								</td>
							</tr>
							<tr>
								<td>
							        <div class="form-group">							        	
							        	<label>PO / Kontrak :</label>
							        	<?php foreach($po as $po){ 
							        		if($po->client_id == $c->id) { ?>
							            <div id="inputFormRow_po_<?php echo $po->id ?>">
							                <div class="input-group mb-3">
							                	<input type="hidden" name="id_po" value="<?php echo $po->id_po ?>" >
							                    <input size="100" type="text" id="no_po" name="no_po[]" class="form-control m-input" placeholder="No PO / Kontrak" autocomplete="off" value="<?php echo $po->no_po ?>">       
							                    <input type="date" id="date_po" name="date_po[]" class="form-control m-input" placeholder="date" autocomplete="off" value="<?php echo $po->date_po ?>">		               
							                    <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" id="price" name="price[]" class="numbers form-control m-input" placeholder="Price" autocomplete="off" value="<?php echo number_format($po->price, 0,'.',',')?>">
							                     <div class="input-group-append">                
							                        <button id="removeRow_po_<?php echo $po->id ?>" type="button" class="btn btn-primary btn-danger btn-sm" hidden>-</button>
							                    </div>								                    				                
							                </div>							                
							                <div class="input-group mb-3">
							                    <textarea class="form-control" type="text" rows="" id="info_po" name="info_po[]"  placeholder="Information" autocomplete="off"><?php echo $po->info_po ?></textarea>
							                </div>    
							            </div>
							            <?php }  }?>
							            <div id="newRow_po_<?php echo $c->id ?>"></div>
							            <button id="addRow_po_<?php echo $c->id ?>" type="button" class="btn btn-facebook">+Add</button>
							        </div>
								</td>
							</tr>	
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Tipe Process:</label>
										<select class="form-control" name="status_client">
											<option value="<?php echo $c->status_client ?>">
												<?php if ($c->status_client === '0') : ?> Contact
												<?php elseif ($c->status_client === '1'): ?> Client Process
												<?php else: ?> Client Closing
												<?php endif; ?>
											</option><hr>	
											<option value="1">Client Process</option>
											<option value="2">Client Closing</option>
											<option value="3">Black List</option>
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

			
		</div>
</div>

<script type="text/javascript">

    // add row penawaran
    $("#addRow_penawaran").click(function () {
        var html = '';
        html += '<div id="inputFormRow_penawaran">';
        html += '<div class="input-group mb-3">';
        html += '<input size="100" type="text" id="no_penawaran" name="no_penawaran[]" class="form-control m-input" placeholder="No penawaran" autocomplete="off">';	                
        html += '<input type="date" id="date_penawaran" name="date_penawaran[]" class="form-control m-input" placeholder="date" autocomplete="off">';				               
        html += '<input type="number" id="bid_price" name="bid_price[]" class="form-control m-input" placeholder="Price" autocomplete="off">';
        html += '<div class="input-group-append">';                
        html += '<button id="removeRow_penawaran" type="button" class="btn btn-primary btn-danger btn-sm">-</button>';
        html += '</div>';								                    				                
        html += '</div>';
        html += '<div class="input-group mb-3">';
        html += '<textarea class="form-control" type="text" rows="" id="info_penawaran" name="info_penawaran[]"  placeholder="Information" autocomplete="off"></textarea>';
        html += '</div>'; 
        html += '</div>';

        $('#newRow_penawaran').append(html);
    });

    // edit row penawaran
    <?php  foreach($client_process as $c){  ?>
    $("#addRow_penawaran_<?php echo $c->id ?>").click(function () {
        var html = '';
        html += '<div id="inputFormRow_penawaran">';
        html += '<div class="input-group mb-3">';
        html += '<input size="100" type="text" id="no_penawaran" name="no_penawaran[]" class="form-control m-input" placeholder="No penawaran" autocomplete="off">';	                
        html += '<input type="date" id="date_penawaran" name="date_penawaran[]" class="form-control m-input" placeholder="date" autocomplete="off">';				               
        html += '<input type="number" id="bid_price" name="bid_price[]" class="form-control m-input" placeholder="Price" autocomplete="off">';
        html += '<div class="input-group-append">';                
        html += '<button id="removeRow_penawaran" type="button" class="btn btn-primary btn-danger btn-sm">-</button>';
        html += '</div>';								                    				                
        html += '</div>';
        html += '<div class="input-group mb-3">';
        html += '<textarea class="form-control" type="text" rows="" id="info_penawaran" name="info_penawaran[]"  placeholder="Information" autocomplete="off"></textarea>';
        html += '</div>'; 
        html += '</div>';

        $('#newRow_penawaran_<?php echo $c->id ?>').append(html);
    });
    <?php } ?>


 // ================================================//
    // add row confirmation
    $("#addRow_confirmation").click(function () {
    	var html = '';
	    html += '<div id="inputFormRow_confirmation">';
	    html += '<div class="input-group mb-3">';                
	    html += '<input type="date" id="date_confirmation" name="date_confirmation[]" class="form-control m-input" placeholder="date" autocomplete="off">';
	    html += '<div class="input-group-append">';                
	    html += '<button id="removeRow_confirmation" type="button" class="btn btn-primary btn-danger btn-sm">-</button>';
	    html += '</div>';		                
	    html += '</div>';
	    html += '<div class="input-group mb-3">';
	    html += '<textarea class="form-control" type="text" rows="" id="info_confirmation" name="info_confirmation[]"  placeholder="Information" autocomplete="off"></textarea>';
	    html += '</div>';   
		html += '</div>';

		$('#newRow_confirmation').append(html);
    });

	// edit row confirmation
	<?php  foreach($client_process as $c){  ?>
    $("#addRow_confirmation_<?php echo $c->id ?>").click(function () {
    	var html = '';
	    html += '<div id="inputFormRow_confirmation">';
	    html += '<div class="input-group mb-3">';                
	    html += '<input type="date" id="date_confirmation" name="date_confirmation[]" class="form-control m-input" placeholder="date" autocomplete="off">';
	    html += '<div class="input-group-append">';                
	    html += '<button id="removeRow_confirmation" type="button" class="btn btn-primary btn-danger btn-sm">-</button>';
	    html += '</div>';		                
	    html += '</div>';
	    html += '<div class="input-group mb-3">';
	    html += '<textarea class="form-control" type="text" rows="" id="info_confirmation" name="info_confirmation[]"  placeholder="Information" autocomplete="off"></textarea>';
	    html += '</div>';   
		html += '</div>';

		$('#newRow_confirmation_<?php echo $c->id ?>').append(html);
    });
    <?php } ?>


 // ================================================//
    // add row po
    $("#addRow_po").click(function () {
    	var html = '';
	    html += '<div id="inputFormRow_po">';
        html += '<div class="input-group mb-3">';
        html += '<input size="100" type="text" id="no_po" name="no_po[]" class="form-control m-input" placeholder="No PO / Kontrak" autocomplete="off">';       
        html += '<input type="date" id="date_po" name="date_po[]" class="form-control m-input" placeholder="date" autocomplete="off">';		               
        html += '<input type="number" id="price" name="price[]" class="form-control m-input" placeholder="Price" autocomplete="off">';
        html += '<div class="input-group-append">';                
        html += '<button id="removeRow_po" type="button" class="btn btn-primary btn-danger btn-sm">-</button>';
        html += '</div>	';							                    				                
        html += '</div>';
        html += '<div class="input-group mb-3">';
        html += '<textarea class="form-control" type="text" rows="" id="info_po" name="info_po[]"  placeholder="Information" autocomplete="off"></textarea>';
        html += ' </div> ';   
    	html += '</div>';


		$('#newRow_po').append(html);
    });

    // edit row po
    <?php  foreach($client_process as $c){  ?>
    $("#addRow_po_<?php echo $c->id ?>").click(function () {
    	var html = '';
	    html += '<div id="inputFormRow_po">';
        html += '<div class="input-group mb-3">';
        html += '<input size="100" type="text" id="no_po" name="no_po[]" class="form-control m-input" placeholder="No PO / Kontrak" autocomplete="off">';       
        html += '<input type="date" id="date_po" name="date_po[]" class="form-control m-input" placeholder="date" autocomplete="off">';		               
        html += '<input type="number" id="price" name="price[]" class="form-control m-input" placeholder="Price" autocomplete="off">';
        html += '<div class="input-group-append">';                
        html += '<button id="removeRow_po" type="button" class="btn btn-primary btn-danger btn-sm">-</button>';
        html += '</div>	';							                    				                
        html += '</div>';
        html += '<div class="input-group mb-3">';
        html += '<textarea class="form-control" type="text" rows="" id="info_po" name="info_po[]"  placeholder="Information" autocomplete="off"></textarea>';
        html += ' </div> ';   
    	html += '</div>';


		$('#newRow_po_<?php echo $c->id ?>').append(html);
    });
    <?php } ?>



// remove row penawaran
    $(document).on('click', '#removeRow_penawaran', function () {
        $(this).closest('#inputFormRow_penawaran').remove();
    });


// remove row confirmation
    $(document).on('click', '#removeRow_confirmation', function () {
        $(this).closest('#inputFormRow_confirmation').remove();
    });


// remove row po
    $(document).on('click', '#removeRow_po', function () {
        $(this).closest('#inputFormRow_po').remove();
    });


<?php foreach($penawaran as $p){ ?>
 	// remove row penawaran
    $(document).on('click', '#removeRow_penawaran_<?php echo $p->id ?>', function () {
        $(this).closest('#inputFormRow_penawaran_<?php echo $p->id ?>').remove();
        console.log('#removeRow_penawaran_<?php echo $p->id ?>');
    });
<?php }?>


<?php foreach($confirmation as $co){ ?>
 	// remove row confirmation
    $(document).on('click', '#removeRow_confirmation_<?php echo $co->id ?>', function () {
        $(this).closest('#inputFormRow_confirmation_<?php echo $co->id ?>').remove();
        console.log('#removeRow_confirmation_<?php echo $co->id ?>');
    });
<?php }?>


<?php foreach($po as $po){ ?>
 	// remove row po
    $(document).on('click', '#removeRow_po_<?php echo $po->id ?>', function () {
        $(this).closest('#inputFormRow_po_<?php echo $po->id ?>').remove();
        console.log('#removeRow_po_<?php echo $po->id ?>');
    });
<?php }?>



</script>