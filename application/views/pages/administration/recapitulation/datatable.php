<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="container-fluid">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Summary Project Progress</h6>
			  	<?php if ( (in_array($this->session->userdata('level'), array(1,3))) ) { ?>
               		<a href="<?php echo base_url(). 'index.php/recapitulation/input';?>" class="btn btn-primary btn-icon-split" style="float: right;">
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
	                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
	                 <thead>
						<tr >
							<th width="2%">No</th>
							<th width="7%">No. Order</th>
							<th width="7%">No. Report</th>
							<th>Contract Start Date</th>
							<th>Contract Finish Date</th>
							<th>Product Document</th>
							<th>Company</th>
							<th>Project Activity</th>
							<th>Termin</th>
							<th>Output Pekerjaan</th>
							<th>Denda</th>
							<th>PIC</th>
							<th width="10%">Action</th>
						</tr>
					 </thead>
						</tbody>
							<?php 
							$id = 1;
							foreach($recapitulation as $r){ 
								
							?>
							<tr>
								<td><?php echo $id++ ?></td>
								<td><?php echo $r->no_order ?></td>
								<td><?php echo $r->no_report ?></td>
								<td><?php echo $r->contract_start_date ?></td>
								<td><?php echo $r->contract_start_date ?></td>
								<td class="text-left">
									<?php $ids = 1; foreach($data_product as $dp){
									if($dp->client_id == $r->client_id){
										echo $ids++.".";
										echo "&#160;";
										echo $dp->product_name ; 
										echo "<br>";
									} }?>
										
								</td>
								<td class="text-left"><?php echo $r->name ?></a></td>
								<td class="text-left"><?php echo $r->project_activity ?></td>
								<td class="text-left"><?php echo $r->termin ?></td>
								<td class="text-left"><?php echo $r->output_pekerjaan ?></td>
								<td class="text-left"><?php echo $r->denda ?></td>
								<td><?php echo $r->user_name ?></td>
								<td  class="row justify-content-center">	
								
									<a href="#" class="btn btn-info btn-circle btn-sm" data-toggle="modal" data-target="#View<?php echo $r->id ?>">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-check"></i>
					                    </span>
					                  </a>	
									 &#160;		
									 <a href="#" class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#Upload<?php echo $r->id ?>">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-upload"></i>
					                    </span>
					                  </a>	
									 &#160;	
									 <?php if ( (in_array($this->session->userdata('level'), array(1,3))) ) { ?>					
					                  <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $r->client_id ?>">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-edit"></i>
					                    </span>
					                  </a>

									  &#160;	
					                   <a href="<?php echo base_url(). 'index.php/recapitulation/delete/'.$r->id ; ?>" class="btn btn-danger btn-circle btn-sm" >
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
<!-- 			<div class="modal fade" id="Finput" role="dialog">
				<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Input Recapitulation Project</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					<form action="<?php echo base_url(). 'index.php/recapitulation/p_input'; ?>" method="post">

						<table width="100%">
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">No Order:</label>
									<input type="text" class="form-control" id="" name="no_order">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Contract Start Date:</label>
									<input type="date" class="form-control" id="" name="contract_start_date">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Contract Finish Date:</label>
									<input type="date" class="form-control" id="" name="contract_finish_date">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Company:</label>
									<select class="form-control" name="client_id">
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
										<textarea class="form-control" rows="5" id="" name="project_activity" ></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Review SPK:</label>
										<textarea class="form-control" rows="5" id="" name="termin"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">PIC:</label>
										<select class="form-control" name="user_id">
											<option value="0">Pilih</option>
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
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-info" value="Input">
						<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
					</div>
					</form>	
				</div>
				</div>
			</div> -->


			<!-- UPLOAD DATA  -->
			<?php foreach($recapitulation as $ru){ 
			?>
			<div class="modal fade" id="Upload<?php echo $ru->id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Upload Project</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					

					<form action="<?php echo base_url(). 'index.php/recapitulation/do_upload'; ?>" method="post" enctype="multipart/form-data">
						<table width="100%">
							
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Upload:</label>								
									<input type="hidden" name="id" value="<?php echo $ru->id ?>">
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

			<!-- EDIT DATA  -->
			<?php $id = 1; 	foreach($recapitulation as $r){ 
			?>
			<div class="modal fade" id="Fedit<?php echo $r->client_id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Edit Recapitulation Project</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					

					<form action="<?php echo base_url(). 'index.php/recapitulation/update'; ?>" method="post">
						<table width="100%">
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">No Order:</label>
									<input type="hidden" name="id" value="<?php echo $r->id ?>">
									<input type="hidden" name="client_id" value="<?php echo $r->client_id ?>">
									<input type="text" class="form-control" id="" name="no_order" value="<?php echo $r->no_order ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Contract Start Date:</label>
									<input type="date" class="form-control" id="" name="contract_start_date" value="<?php echo $r->contract_start_date ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Contract Finish Date:</label>
									<input type="date" class="form-control" id="" name="contract_finish_date" value="<?php echo $r->contract_finish_date ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Company:</label>
									<select class="form-control" name="client_id">
											<option value="<?php echo $r->client_id ?>"><?php echo $r->name ?></option>
											<option>Pilih</option>
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
										<textarea class="form-control" rows="5" id="" name="project_activity" readonly><?php echo $r->project_activity ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Termin:</label>
										<textarea class="form-control" rows="5" id="" name="termin"><?php echo $r->termin ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
							        <div class="form-group">
							        	<label for="inputdefault">Termin:</label>
							            <div id="inputFormRow_termin">
							                <div class="input-group mb-1">
							                    <input type="text" id="termin" name="termin[]" class="form-control m-input" placeholder="Termin" >
							                    <input type="text" id="percentage" name="percentage[]" class="form-control m-input" placeholder="Percentage" autocomplete="off">
							                    <input type="text" id="nominal" name="nominal[]" class="form-control m-input" placeholder="Nominal" autocomplete="off">
							                     <div class="input-group-append">                
							                        <button id="removeRow_termin" type="button" class="btn btn-danger btn-sm">-</button>
							                    </div>
							                </div>
							                <div class="input-group mb-1">
							                	<textarea class="form-control m-input" rows="2" id="information" name="information[]" placeholder="Information" ></textarea>							                	
							                </div>
							                 <div class="input-group mb-3">
							                    <textarea class="form-control m-input" rows="2" id="status" name="status[]" placeholder="Status" ></textarea>
							                </div>
							            </div>
							            <div id="newRow_termin"></div>
							            <button id="addRow_termin" type="button" class="btn btn-facebook">+Add</button>
							        </div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Output Pekerjaan:</label>
										<textarea class="form-control" rows="5" id="" name="output_pekerjaan"><?php echo $r->output_pekerjaan ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td valign="top" width=50%>
									<div class="form-group ">
										<label for="inputdefault">Contact:</label>
										<div id="inputFormRow_contact">
										 	<div class="input-group mb-3">
												<input class="form-control" id="contact" type="text" name="contact[]"  placeholder="Company Contact">
												<div class="input-group-append">
													<button id="removeRow_contact" type="button" class="btn btn-danger btn-sm">-</button>
												</div>
											</div>
										</div>
										<div id="newRow_contact"></div>
							            <button id="addRow_contact" type="button" class="btn btn-facebook">+Add</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Denda:</label>
										<textarea class="form-control" rows="5" id="" name="denda"><?php echo $r->denda ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">PIC:</label>
										<select class="form-control" name="user_id">
											<option value="<?php echo $r->user_id ?>"><?php echo $r->user_name ?></option>
											<option>Pilih</option>
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
							<input type="submit" class="btn btn-info" value="Edit">
							<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
						</div>
					</form>	
					</div>
				</div>
				</div>
			</div>
			<?php } ?>
			
			<!-- VIEW DATA TEKNIK -->
			<?php $id = 1; 	foreach($recapitulation as $r){ 
			?>
			<div class="modal fade" id="View<?php echo $r->id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">View Progress Teknik</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					
					<form>
						<table width="100%">
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">No Order:</label>
									<input type="hidden" name="id" value="<?php echo $r->id ?>">
									<input type="text" class="form-control" id="" name="no_order" value="<?php echo $r->no_order ?>" disabled>
									</div>
								</td>
								<td>
									<div class="form-group">
									<label for="inputdefault">Contract Start Date:</label>
									<input type="date" class="form-control" id="" name="contract_start_date" value="<?php echo $r->contract_start_date ?>" disabled>
									</div>
								</td>
								<td>
									<div class="form-group">
									<label for="inputdefault">Contract Finish Date:</label>
									<input type="date" class="form-control" id="" name="contract_finish_date" value="<?php echo $r->contract_finish_date ?>" disabled>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Company:</label>
									<select class="form-control" name="client_id" disabled>
											<option value="<?php echo $r->client_id ?>"><?php echo $r->name ?></option>
											<option>Pilih</option>
											<?php 
											foreach($client as $c){ 
											?>
											<option value="<?php echo $c->id ?>"><?php echo $c->name ?></option>
											<?php }?>
										</select>
									</div>
								</td>
								
								<td>
									<div class="form-group ">
										<label for="inputdefault">PIC:</label>
										<select class="form-control" name="user_id" disabled>
											<option value="<?php echo $r->user_id ?>"><?php echo $r->user_name ?></option>
											<option>Pilih</option>
											<?php 
											foreach($user as $u){ 
											?>
											<option value="<?php echo $u->id ?>"><?php echo $u->name ?></option>
											<?php }?>
										</select>
									</div>
								</td>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Show doc upload:</label><br>
										<a  target="_blank" href="<?php echo base_url(). 'upload/'.$r->upload ; ?>" class="btn btn-primary view-pdf" ><?php echo $r->upload ?></a>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<div class="form-group ">
										<label for="inputdefault">Project Activity:</label>
										<textarea class="form-control" rows="3" id="" name="project_activity" disabled ><?php echo $r->project_activity ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<div class="form-group ">
										<label for="inputdefault">Termin:</label>
										<textarea class="form-control" rows="3" id="" name="termin" disabled><?php echo $r->termin ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<div class="form-group ">
										<label for="inputdefault">Output Pekerjaan:</label>
										<textarea class="form-control" rows="3" id="" name="output_pekerjaan" disabled><?php echo $r->output_pekerjaan ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<div class="form-group ">
										<label for="inputdefault">Denda:</label>
										<textarea class="form-control" rows="3" id="" name="denda" disabled><?php echo $r->denda ?></textarea>
									</div>
								</td>
							</tr>
						</table>

						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                 <thead>
						<tr>
						    <th width="2%">No</th>
						    <!--<th width="15%">Project Activity</th>-->
						    <!--<th>Pemrakarsa Name</th>-->
						    <th>Document Runtime</th>
						    <th>Document Product</th>
						    <th>Planing This week</th>
						    <th>Realization</th>
						    <th>Problem</th>
						    <th>Solution</th>
						    <th>Planing Next Week</th>
						    <th>PIC</th>
						  </tr>
					 </thead>
						</tbody>
							<?php 
							$id = 1;
							foreach($teknik as $tk){ 
								if($tk->project_activity == $r->project_activity){
							?>
							<tr>
					
								<td><?php echo $id++ ?></td>
								<!--<td><?php echo $tk->project_activity ?></td>	-->
								<!--<td><?php echo $tk->pemrakarsa ?></td>						-->
								<td><?php echo $tk->start_date .' s/d '.$tk->finish_date ?></td>
								<td><?php echo $tk->document_product ?></td>	
								<td><?php echo $tk->planing_this_week ?></td>
								<td><?php echo $tk->realization ?></td>			
								<td><?php echo $tk->problem ?></td>		
								<td><?php echo $tk->solution ?></td>					
								<td><?php echo $tk->planing_next_week ?></td>		
								<td><?php echo $tk->user ?></td>							

							</tr>
							<?php } }?> 
						</tbody>
					</table>
					
						<div class="modal-footer">
							<!-- <input type="submit" class="btn btn-info" value="Edit"> -->
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
    $("#addRow_termin").click(function () {
        var html = '';
        html += '<div id="inputFormRow_termin">';
        html += '<div class="input-group mb-1">';
        html += '<input type="text" id="termin" name="termin[]" class="form-control m-input" placeholder="Termin" >';
        html += '<input type="text" id="percentage" name="percentage[]" class="form-control m-input" placeholder="Percentage" autocomplete="off">';
        html += '<input type="text" id="nominal" name="nominal[]" class="form-control m-input" placeholder="Nominal" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow_termin" type="button" class="btn btn-danger btn-sm">-</button>';
        html += '</div>';
        html += '</div>';
        html += '<div class="input-group mb-1">';
       	html += '<textarea class="form-control m-input" rows="2" id="information" name="information[]" placeholder="Information" ></textarea>';							                	
        html += '</div>';
        html += '<div class="input-group mb-3">';
        html += '<textarea class="form-control m-input" rows="2" id="status" name="status[]" placeholder="Status" ></textarea>';
        html += '</div>';
    	html += '</div>';

        $('#newRow_termin').append(html);
    });
    
    //edit row pic


    // ================================================//
    // add row contact
    $("#addRow_contact").click(function () {
        var html = '';
        html += '<div id="inputFormRow_contact">';
        html += '<div class="input-group mb-3">';
        html += '<input class="form-control" id="contact" type="text" name="contact[]" placeholder="Company Contact">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow_contact" type="button" class="btn btn-danger">-</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow_contact').append(html);
    });
    





										



    // remove row pic
    $(document).on('click', '#removeRow_pic', function () {
        $(this).closest('#inputFormRow_pic').remove();
    });

    // remove row contact
    $(document).on('click', '#removeRow_contact', function () {
        $(this).closest('#inputFormRow_contact').remove();
    });






</script>