<div class="container-fluid">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Progress Pekerjaan Teknik</h6>

			  		<?php if ( (in_array($this->session->userdata('level'), array(1,4))) ) { ?>
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
              		<form method="post" action="<?php echo base_url(); ?>index.php/teknik/index">
              		<table border="0" cellspacing="5" cellpadding="5" align="right">
							      <tbody>
							      	<tr>
							      		<td>

							      			<b>Pemrakarsa :</b>
							      			<select class="form-select" aria-label="Default select example" id="name" name="name">
							      				<option value="">-Pilih-</option>
							      				<?php foreach($client as $c){ 
												?>
												<option value="<?php echo $c->name; ?>"><?php echo $c->name; ?></option>
												<?php } ?>
							      			</select>&nbsp;

			 				      			<b>Product : </b>
							      			<select class="form-select w-10" aria-label="Default select example" id="product" name="product">
							      				<option value="">-Pilih-</option>
							      				<?php foreach($product as $prod){ 
												?>
												<option value="<?php echo $prod->name; ?>"><?php echo $prod->name; ?></option>
												<?php }?>
							      			</select>&nbsp; 

							      			
							            	<b>Select Date : </b>
							            	<input class="text-center" type="text" id="min" name="min" value="<?php echo ($min == '') ? date('Y-m-d') : $min;?>"> <b>To</b>&nbsp;

							            	<input class="text-center" type="text" id="max" name="max" value="<?php echo ($max == '') ? date('Y-m-d') : $max;?>">

							            	<input type="submit" class="btn btn-success btn-sm" value="Select">
							            </td>
							        </tr>
							    	</tbody>
							  	</table>
							  	</form>


	                <table id="dataTablepdf" class="display table table-bordered " width="100%" cellspacing="0">
						
	                 <thead>
						<tr>
						    <th>No</th>
						    <th width="15%">Project Activity</th>
						    <th>Pemrakarsa Name</th>
						    <th width="7%">Start Date</th>
						    <th width="7%">Finish Date</th>
						    <th>Document Product</th>
						    <th>Planing This week</th>
						    <th>Realization</th>
						    <th>Problem</th>
						    <th>Solution</th>
						    <th>Planing Next Week</th>
						    <th>PIC</th>
							<th>Note</th>
						    <th>Action</th>	
						  </tr>
					 </thead>
					<tbody>
						<?php 
						$id = 1;
						foreach($teknik_by_date as $tk){ 											
						?>
						<tr>
				
							<td><?php echo $id++ ?></td>
							<td><?php echo $tk->project_activity ?></td>	
							<td><?php echo '<b>'.$tk->name.'</b><br>'. $tk->pemrakarsa ?></td>
							<td><?php echo $tk->start_date ?></td>
							<td><?php echo $tk->finish_date ?></td>
							<td><?php echo $tk->document_product ?></td>	
							<td><?php echo $tk->planing_this_week ?></td>
							<td><?php echo $tk->realization ?></td>			
							<td><?php echo $tk->problem ?></td>		
							<td><?php echo $tk->solution ?></td>					
							<td><?php echo $tk->planing_next_week ?></td>		
							<td><?php echo $tk->user ?></td>
							<td><?php echo $tk->note ?></td>
							
							<td class="row justify-content-center" >
							<?php if ( (in_array($this->session->userdata('level'), array(0))) ) { ?>					
								<a href="#" class="btn btn-info btn-circle btn-sm" data-toggle="modal" data-target="#Note<?php echo $tk->id ?>">
									<span class="icon text-white-50">
									<i class="fas fa-edit"></i>
									</span>
								</a>
								<?php  }?>		
							<?php if ( (in_array($this->session->userdata('level'), array(0,1,4))) ) { ?>	
								<?php if ((in_array($this->session->userdata('level'), array(0))) || $this->session->userdata('department') == 'Supervisor' || $this->session->userdata('name')== $tk->user ) { ?>								
				                  <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $tk->id ?>">
				                    <span class="icon text-white-50">
									  <i class="fa fa-edit"></i>
				                    </span>
				                  </a>
								  &#160;	
								
				                   <a href="<?php echo base_url(). 'index.php/teknik/delete/'.$tk->id ; ?>" class="btn btn-danger btn-circle btn-sm">
				                    <span class="icon text-white-50">
				                      <i class="fas fa-trash"></i>
				                    </span>					                    
				                  </a>
								  <?php } }?>
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
						<h4 class="modal-title">Input Progress Pekerjaan Teknik</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					<form action="<?php echo base_url(). 'index.php/teknik/p_input'; ?>" method="post">

						<table width="100%">
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Project Activity:</label>
										<select class="form-control" name="recapitulation_id">
												<option value="">Pilih</option>
												<?php 
												foreach($recapitulation as $rp){ 
												?>
												<option value="<?php echo $rp->id ?>"><?php echo $rp->project_activity ?></option>
												<?php }?>
										</select>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Start Date:</label>								
										<input class="form-control" id="start_date" type="date" name="start_date">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Finish Date:</label>
										<input class="form-control" id="start_date" type="date" name="finish_date">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Planning This Weeky:</label>
										<textarea class="form-control" rows="5" id="" name="planing_this_week" ></textarea>
									</div>
								</td>
							</tr>							
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Realization:</label>
										<textarea class="form-control" rows="5" id="" name="realization" ></textarea>
									</div>
								</td>
							</tr>							
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Problem:</label>
										<textarea class="form-control" rows="5" id="" name="problem" ></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Solution:</label>
										<textarea class="form-control" rows="5" id="" name="solution" ></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Planning Next Weeky:</label>
										<textarea class="form-control" rows="5" id="" name="planing_next_week" ></textarea>
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



			<?php $id = 1; 	foreach($teknik as $tk){ ?>
			<div class="modal fade" id="Fedit<?php echo $tk->id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Edit Progress Pekerjaan Teknik</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					
					<form action="<?php echo base_url(). 'index.php/teknik/update'; ?>" method="post">
					<table width="100%">
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Project Activity:</label>
									<input type="hidden" name="id" value="<?php echo $tk->id ?>">
										<select class="form-control" name="recapitulation_id">
												<option value="<?php echo $tk->recapitulation_id ?>"><?php echo $tk->project_activity ?></option>
												<option value="">Pilih</option>
												<?php 
												foreach($recapitulation as $rp){ 
												?>
												<option value="<?php echo $rp->id ?>"><?php echo $rp->project_activity ?></option>
												<?php }?>
										</select>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Start Date:</label>								
										<input class="form-control" id="start_date" type="date" name="start_date" value="<?php echo $tk->start_date ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Finish Date:</label>
										<input class="form-control" id="start_date" type="date" name="finish_date" value="<?php echo $tk->finish_date ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Planning This Weeky:</label>
										<textarea class="form-control" rows="5" id="" name="planing_this_week" ><?php echo $tk->planing_this_week ?></textarea>
									</div>
								</td>
							</tr>							
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Realization:</label>
										<textarea class="form-control" rows="5" id="" name="realization" ><?php echo $tk->realization ?></textarea>
									</div>
								</td>
							</tr>							
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Problem:</label>
										<textarea class="form-control" rows="5" id="" name="problem" ><?php echo $tk->problem ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Solution:</label>
										<textarea class="form-control" rows="5" id="" name="solution" ><?php echo $tk->solution ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Planning Next Weeky:</label>
										<textarea class="form-control" rows="5" id="" name="planing_next_week" ><?php echo $tk->planing_next_week ?></textarea>
									</div>
								</td>
							</tr>	
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">PIC:</label>
										<select class="form-control" name="user_id">
											<option value="<?php echo $tk->user_id ?>"><?php echo $tk->user ?></option>
											<option value="0">Pilih</option>
											<?php 
											foreach($user as $u){ 
											?>
											<option value="<?php echo $u->id ?>"><?php echo $u->name ?></option>
											<?php }?>
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
			

			<?php $id = 1; 	foreach($teknik as $tk){ ?>
			<div class="modal fade" id="Note<?php echo $tk->id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Note Progress Pekerjaan Teknik</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					
					<form action="<?php echo base_url(). 'index.php/teknik/update_note'; ?>" method="post">
					<table width="100%">
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Project Activity:</label>
									<input type="hidden" name="id" value="<?php echo $tk->id ?>">
										<select class="form-control" name="recapitulation_id" disabled>
												<option value="<?php echo $tk->recapitulation_id ?>"><?php echo $tk->project_activity ?></option>
												<option value="">Pilih</option>
												<?php 
												foreach($recapitulation as $rp){ 
												?>
												<option value="<?php echo $rp->id ?>"><?php echo $rp->project_activity ?></option>
												<?php }?>
										</select>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Start Date:</label>								
										<input class="form-control" id="start_date" type="date" name="start_date" value="<?php echo $tk->start_date ?>" disabled>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Finish Date:</label>
										<input class="form-control" id="start_date" type="date" name="finish_date" value="<?php echo $tk->finish_date ?>" disabled>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Planning This Weeky:</label>
										<textarea class="form-control" rows="5" id="" name="planing_this_week" disabled ><?php echo $tk->planing_this_week ?></textarea>
									</div>
								</td>
							</tr>							
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Realization:</label>
										<textarea class="form-control" rows="5" id="" name="realization" disabled ><?php echo $tk->realization ?></textarea>
									</div>
								</td>
							</tr>							
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Problem:</label>
										<textarea class="form-control" rows="5" id="" name="problem" disabled><?php echo $tk->problem ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Solution:</label>
										<textarea class="form-control" rows="5" id="" name="solution" disabled><?php echo $tk->solution ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Planning Next Weeky:</label>
										<textarea class="form-control" rows="5" id="" name="planing_next_week" disabled ><?php echo $tk->planing_next_week ?></textarea>
									</div>
								</td>
							</tr>	
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">PIC:</label>
										<select class="form-control" name="user_id" disabled>
											<option value="<?php echo $tk->user_id ?>"><?php echo $tk->user ?></option>
											<option value="0">Pilih</option>
											<?php 
											foreach($user as $u){ 
											?>
											<option value="<?php echo $u->id ?>"><?php echo $u->name ?></option>
											<?php }?>
										</select>
									</div>
								</td>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Note:</label>
										<textarea class="form-control" rows="5" id="note" name="note"  ><?php echo $tk->note ?></textarea>
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




 