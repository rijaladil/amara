<div class="container-fluid">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Progress Pekerjaan Teknik</h6>
               			<a href="#" class="btn btn-primary btn-icon-split" style="float: right;" data-toggle="modal" data-target="#Finput">
		                <span class="icon text-white-50">
		                  <i class="fas fa-flag"></i>
		                </span>
		                <span class="text">Add +</span>
		              </a>
            </div>
            <div class="card-body">
              	<div class="table-responsive">
	                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                 <thead>
						<tr>
						    <th width="2%">No</th>
						    <th width="15%">Project Activity</th>
						    <th>Pemrakarsa Name</th>
						    <th>Document Runtime</th>					 
						   <!--  <th>Start Date</th>
						    <th>Finish Date</th> -->
						    <th>Document Product</th>
						    <th>Planing This week</th>
						    <th>Realization</th>
						    <th>Problem</th>
						    <th>Solution</th>
						    <th>Planing Next Week</th>
						    <th>PIC</th>
						    <th>Action</th>	
						  </tr>
					 </thead>
						</tbody>
							<?php 
							$id = 1;
							foreach($teknik as $tk){ 
							?>
							<tr>
					
								<td><?php echo $id++ ?></td>
								<td><?php echo $tk->project_activity ?></td>	
								<td><?php echo $tk->pemrakarsa ?></td>						
								<td><?php echo $tk->start_date .' s/d '.$tk->finish_date ?></td>
								<td><?php echo $tk->document_product ?></td>	
								<td><?php echo $tk->planing_this_week ?></td>
								<td><?php echo $tk->realization ?></td>			
								<td><?php echo $tk->problem ?></td>		
								<td><?php echo $tk->solution ?></td>					
								<td><?php echo $tk->planing_next_week ?></td>		
								<td><?php echo $tk->user ?></td>
								
								<td class="row justify-content-center" >										
					                  <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $tk->id ?>">
					                    <span class="icon text-white-50">
										  <i class="fa fa-edit"></i>
					                    </span>
					                  </a>

					                   <a href="<?php echo base_url(). 'index.php/teknik/delete/'.$tk->id ; ?>" class="btn btn-danger btn-circle btn-sm">
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
								
			

			<div class="modal fade" id="Finput" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header ">	
						<h4 class="modal-title">Input Price</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					<form action="<?php echo base_url(). 'index.php/teknik/p_input'; ?>" method="post">

						<table width="100%">
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Description:</label>
									<textarea class="form-control" type='text' rows="" id="comment" name="description"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Unit:</label>								
										<input class="form-control" id="inputdefault" type="text" name="unit">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Price:</label>
										<input class="form-control" id="inputdefault" type="text" name="price">
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



			<?php $id = 1; 	foreach($teknik as $c){ ?>
			<div class="modal fade" id="Fedit<?php echo $c->id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Edit Price</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					
					<form action="<?php echo base_url(). 'index.php/teknik/update'; ?>" method="post">
					<table width="100%">
							<tr>
								<td>
									<div class="form-group">
									<label for="inputdefault">Description:</label>
									<input type="hidden" name="id" value="<?php echo $c->id ?>">
									<textarea class="form-control" type='text' rows="" id="comment" name="description"><?php echo $c->description ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Unit:</label>								
										<input class="form-control" id="inputdefault" type="text" name="unit" value="<?php echo $c->unit ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Price:</label>
										<input class="form-control" id="inputdefault" type="text" name="price" value="<?php echo $c->price ?>">
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

