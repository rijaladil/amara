<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="container-fluid">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Client</h6>
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
            	<!-- Prospective Client -->
            	<h5>Prospective Client</h5>
              	<div class="table-responsive ">
	                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
	                 <thead class=" btn-danger">
						<tr>
							<th width="2%">No</th>
							<th width="20%">Company Name</th>
							<th width="25%">Kegiatan Usaha</th>
							<th>Address</th>
							<th width="10%">Status Project</th>
							<th width="5%">Action</th>
						</tr>
					 </thead>
						<tbody>
							<?php 
							$id = 1;
							foreach($prospective_client as $c){ 
								if( $c->status_client  == 0){
							?>
							<tr>
								<td><?php echo $id++ ?></td>
								<td><b><?php echo $c->name ?></b></td>
								<td><?php echo $c->information ?></td>
								<td><?php echo $c->address ?>, 
								<b><?php echo $c->city_kabupaten ?></b>, 
								<b><i><?php echo $c->province ?></b></i></td>
								<td><?php echo $c->product_name ?><br>
									<?php if ( $c->status_client  === '1'): ?>
									        <b><p style="color:orange;">Process</p></b>
									<?php elseif ( $c->status_client  === '2'): ?>
									        <b><p style="color:blue;">Closing</p></b>
									<?php else: ?>
									        <b><p style="color:red;">Prospective</p></b>
									<?php endif; ?>
								</td>
								<td  class="row justify-content-center">
								<?php if ( (in_array($this->session->userdata('level'), array(1,2))) ) { ?>									
					                  <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $c->id ?>">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-edit"></i>
					                    </span>
					                  </a>

					                   <a href="<?php echo base_url(). 'index.php/Prospective_Client/delete/'.$c->id ;; ?>" class="btn btn-danger btn-circle btn-sm">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-trash"></i>
					                    </span>					                    
					                  </a>
									  <?php }?>
								</td>
							</tr>
							<?php }} ?>
						</tbody>
					</table>
			   	</div>
			   	
			   	<!-- client Process -->
			   	<h5>Client Process</h5>
			   	<div class="table-responsive">
	                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
	                 <thead class=" btn-warning">
						<tr>
							<th width="2%">No</th>
							<th width="20%">Company Name</th>
							<th width="25%">Kegiatan Usaha</th>
							<th>Address</th>
							<th width="10%">Status Project</th>
							<th width="5%">Action</th>
						</tr>
					 </thead>
						<tbody>
							<?php 
							$id = 1;
							foreach($prospective_client as $c){
							if( $c->status_client  == 1){ 
							?>
							<tr>
								<td><?php echo $id++ ?></td>
								<td><b><?php echo $c->name ?></b></td>
								<td><?php echo $c->information ?></td>
								<td><?php echo $c->address ?>, 
								<b><?php echo $c->city_kabupaten ?></b>, 
								<b><i><?php echo $c->province ?></b></i></td>
								<td><?php echo $c->product_name ?><br>
									<?php if ( $c->status_client  === '1'): ?>
									        <b><p style="color:orange;">Process</p></b>
									<?php elseif ( $c->status_client  === '2'): ?>
									        <b><p style="color:blue;">Closing</p></b>
									<?php else: ?>
									        <b><p style="color:red;">Prospective</p></b>
									<?php endif; ?>
								</td>
								<td  class="row justify-content-center">
								<?php if ( (in_array($this->session->userdata('level'), array(1,2))) ) { ?>									
					                  <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $c->id ?>">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-edit"></i>
					                    </span>
					                  </a>

					                   <a href="<?php echo base_url(). 'index.php/Prospective_Client/delete/'.$c->id ;; ?>" class="btn btn-danger btn-circle btn-sm">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-trash"></i>
					                    </span>					                    
					                  </a>
									  <?php }?>
								</td>
							</tr>
							<?php } }?>
						</tbody>
					</table>
			   	</div>
			   	
			   	<!-- client Closing -->
			   	<h5>Client Closing</h5>
			   	<div class="table-responsive">
	                <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
	                 <thead class=" btn-success">
						<tr>
							<th width="2%">No</th>
							<th width="20%">Company Name</th>
							<th width="25%">Kegiatan Usaha</th>
							<th>Address</th>
							<th width="10%">Status Project</th>
							<th width="5%">Action</th>
						</tr>
					 </thead>
						<tbody>
							<?php 
							$id = 1;
							foreach($prospective_client as $c){ 
								if( $c->status_client  == 2){ 
							?>
							<tr>
								<td><?php echo $id++ ?></td>
								<td><b><?php echo $c->name ?></b></td>
								<td><?php echo $c->information ?></td>
								<td><?php echo $c->address ?>, 
								<b><?php echo $c->city_kabupaten ?></b>, 
								<b><i><?php echo $c->province ?></b></i></td>
								<td><?php echo $c->product_name ?><br>
									<?php if ( $c->status_client  === '1'): ?>
									        <b><p style="color:orange;">Process</p></b>
									<?php elseif ( $c->status_client  === '2'): ?>
									        <b><p style="color:blue;">Closing</p></b>
									<?php else: ?>
									        <b><p style="color:red;">Prospective</p></b>
									<?php endif; ?>
								</td>
								<td  class="row justify-content-center">
								<?php if ( (in_array($this->session->userdata('level'), array(1,2))) ) { ?>									
					                  <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $c->id ?>">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-edit"></i>
					                    </span>
					                  </a>

					                   <a href="<?php echo base_url(). 'index.php/Prospective_Client/delete/'.$c->id ;; ?>" class="btn btn-danger btn-circle btn-sm">
					                    <span class="icon text-white-50">
					                      <i class="fas fa-trash"></i>
					                    </span>					                    
					                  </a>
									  <?php }?>
								</td>
							</tr>
							<?php } }?>
						</tbody>
					</table>
			   	</div>

			</div>
<!-- +ADD  -->
			<div class="modal fade" id="Finput" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header ">	
						<h4 class="modal-title">Input Client</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					<form action="<?php echo base_url(). 'index.php/Prospective_Client/p_input'; ?>" method="post">

						<table width="100%">
							<tr>
								<td colspan="2" >
									<div class="form-group">
									<label for="inputdefault">Company Name:</label>
									<input type="text" class="form-control" id="name" name="name" required>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2" >
									<div class="form-group">
										<label for="inputdefault">Kegiatan Usaha:</label>
										<textarea class="form-control" rows="" id="information" name="information" ></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td valign="top">
									<div class="form-group">
										<label for="inputdefault">Address:</label>
										<textarea class="form-control" type='text' rows="" id="address" name="address"></textarea><br>
										<input class="form-control" id="city_kabupaten" type="text" name="city_kabupaten" placeholder="City or Kabupaten"><br>
										<input class="form-control" id="province" type="text" name="province" placeholder="Provinsi">
									</div>
								</td>
							<!-- </tr>
							<tr> -->
								<td valign="top">
									<div class="form-group">
										<label for="inputdefault">Mailing Address:</label>
										<textarea class="form-control" type='text' rows="" id="address2" name="address2"></textarea>
									</div>
								</td>
							</tr>
						</table>

						<table width="100%">
							<tr>
								<td valign="top" width=50%>
									<div class="form-group ">
										<label for="inputdefault">Contact:</label>
										<div id="inputFormRow_contact">
										 	<div class="input-group mb-3">
												<input class="form-control" id="inputdefault" type="text" name="contact[]"  placeholder="Company Contact">
												<div class="input-group-append">
													<button id="removeRow_contact" type="button" class="btn btn-danger">-</button>
												</div>
											</div>
										</div>
										<div id="newRow_contact"></div>
							            <button id="addRow_contact" type="button" class="btn btn-facebook">+Add</button>
									</div>
								</td>
								<td valign="top" width=50%>
									<div class="form-group ">
										<label for="inputdefault">Email:</label>
										 <div id="inputFormRow_email">
										 	<div class="input-group mb-3">
												<input type="email" class="form-control" id="email"  name="email[]" placeholder="company@example.com">
												<div class="input-group-append">
													<button id="removeRow_email" type="button" class="btn btn-danger">-</button>
												</div>
											</div>
										</div>
										<div id="newRow_email"></div>
							            <button id="addRow_email" type="button" class="btn btn-facebook">+Add</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Sector:</label>
										<select class="form-control" id="sector_id" name="sector_id">
											<option value="">Pilih</option>
											<?php 
											foreach($sector as $s){ 
											?>
											<option value="<?php echo $s->id ?>"><?php echo $s->name ?></option>
											<?php }?>
										</select>
									</div>
								</td>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Status Project:</label>
										<select class="form-control" id="product_id" name="product_id">
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
							</table>
							<table white="100%">
							<tr>
								<td>
									<!-- <div class="form-group "> -->
										<label for="inputdefault">Pic Contact:</label>
									<!-- </div> -->
								</td>
							</tr>
							<tr>
								<td>
							        <div class="col-lg-12">
							            <div id="inputFormRow_pic">
							                <div class="input-group mb-3">
							                    <input size="100" type="text" name="pic[]" class="form-control m-input" placeholder="Pic Name" autocomplete="off">
							                    <input type="text" name="pic_contact[]" class="form-control m-input" placeholder="Contact Pic" autocomplete="off">
							                    <input type="email" name="pic_email[]" class="form-control m-input" placeholder="pic@example.com" autocomplete="off">
							                    <div class="input-group-append">                
							                        <button id="removeRow_pic" type="button" class="btn btn-danger">-</button>
							                    </div>
							                </div>
							            </div>
							            <div id="newRow_pic"></div>
							            <button id="addRow_pic" type="button" class="btn btn-facebook">+Add</button>
							        </div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Marketing By:</label>
										<select class="form-control" id="id_user" name="id_user">
											<option value="">Pilih</option>
											<?php 
											foreach($marketing as $mar){ 
											?>
											<option value="<?php echo $mar->id ?>"><?php echo $mar->name ?></option>
											<?php }?>
										</select>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Tipe Process:</label>
										<select class="form-control" name="status_client">
											<option value="0">Contact</option>
											<option value="1">Client Process</option>
											<option value="2">Client Closing</option>
										</select>
									</div>
								</td>
							</tr>
						</table>
					<br>
							
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
			<?php $id = 1; 	foreach($prospective_client as $c){ 
			?>
			<div class="modal fade" id="Fedit<?php echo $c->id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Edit Client</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					
					<form action="<?php echo base_url(). 'index.php/Prospective_Client/update'; ?>" method="post">
						<table width="100%">
							<tr>
								<td colspan="2" >
									<div class="form-group">
									<label for="inputdefault">Company Name:</label>
									<input type="hidden" name="id" value="<?php echo $c->id ?> " >
									<input type="text" class="form-control" id="name" name="name" required value="<?php echo $c->name ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2" >
									<div class="form-group">
										<label for="inputdefault">Kegiatan Usaha:</label>
										<textarea class="form-control" rows="" id="information" name="information" ><?php echo $c->information ?></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td valign="top">
									<div class="form-group">
										<label for="inputdefault">Address:</label>
										<textarea class="form-control" type='text' rows="" id="address" name="address"><?php echo $c->address ?></textarea><br>
										<input class="form-control" id="city_kabupaten" type="text" name="city_kabupaten" placeholder="City or Kabupaten" value="<?php echo$c->city_kabupaten ?>"><br>
										<input class="form-control" id="province" type="text" name="province" placeholder="Provinsi" value="<?php echo $c->province ?>">
									</div>
								</td>
							<!-- </tr>
							<tr> -->
								<td valign="top">
									<div class="form-group">
										<label for="inputdefault">Mailing Address:</label>
										<textarea class="form-control" type='text' rows="" id="address2" name="address2"><?php echo $c->address2 ?></textarea>
									</div>
								</td>
							</tr>
						</table>

						<table width="100%">
							<tr>

								<td valign="top" width=50%>
									
									<div class="form-group ">
										<label for="inputdefault">Contact:</label>
										
										<div id="inputFormRow_contact">
											<?php 	
											foreach($tlp as $t){
												 if($t->client_name == $c->name) {
											?>
										 	<div class="input-group mb-3">																												 		 
												<input class="form-control" id="" type="text" name="contact[]"  placeholder="Company Contact" value="<?php echo $t->tlp ?>">																
												<div class="input-group-append">
													<button id="removeRow_contact" type="button" class="btn btn-danger">-</button>
												</div>
											</div>
											<?php }  }?>	
										</div>
										
										<div id="newRow_contact_<?php echo $c->id ?>"></div>
							            <button id="addRow_contact_<?php echo $c->id ?>" type="button" class="btn btn-facebook">+Add</button>
									</div>
								</td>
								<td valign="top" width=50%>
									<div class="form-group ">
										<label for="inputdefault">Email:</label>
										 <div id="inputFormRow_email">
										 	<?php 	
											foreach($email as $e){
												 if($e->client_name == $c->name) {
											?>
										 	<div class="input-group mb-3">
												<input type="email" class="form-control" id="inputdefault"  name="email[]" placeholder="company@example.com" value="<?php echo $e->email ?>">
												<div class="input-group-append">
													<button id="removeRow_email" type="button" class="btn btn-danger">-</button>
												</div>
											</div>
											<?php }  }?>
										</div>
										<div id="newRow_email_<?php echo $c->id ?>"></div>
							            <button id="addRow_email_<?php echo $c->id ?>" type="button" class="btn btn-facebook">+Add</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Sector:</label>
										<select class="form-control" name="sector_id">
											<?php 
											foreach($sector as $s){ 
												 if($s->id == $c->sector_id) {
											?>
											<option value="<?php echo $s->id ?>"><?php echo $s->name ?></option>
											<?php } }?>
											<option value="">Pilih</option>
											<?php 
											foreach($sector as $s){ 
											?>
											<option value="<?php echo $s->id ?>"><?php echo $s->name ?></option>
											<?php }?>
										</select>
									</div>
								</td>
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
							</table>
							<table white="100%">
							<tr>
								<td>
									<!-- <div class="form-group "> -->
										<label for="inputdefault">Pic Contact:</label>
									<!-- </div> -->
								</td>
							</tr>
							<tr>
								<td>
							        <div class="col-lg-12">
							            <div id="inputFormRow_pic">
							            	<?php 	
											foreach($pic as $p){
												 if($p->client_name == $c->name) {
											?>
							                <div class="input-group mb-3">
							                    <input size="100" type="text" name="pic[]" class="form-control m-input" placeholder="Pic Name" autocomplete="off" value="<?php echo $p->pic ?>">
							                    <input type="text" name="pic_contact[]" class="form-control m-input" placeholder="Contact Pic" autocomplete="off" value="<?php echo $p->pic_contact ?>">
							                    <input type="email" name="pic_email[]" class="form-control m-input" placeholder="pic@example.com" autocomplete="off" value="<?php echo $p->email ?>">
							                    <div class="input-group-append">                
							                        <button id="removeRow_pic" type="button" class="btn btn-danger">-</button>
							                    </div>
							                </div>
							                <?php }  }?>
							            </div>
							            <div id="newRow_pic_<?php echo $c->id ?>"></div>
							            <button id="addRow_pic_<?php echo $c->id ?>" type="button" class="btn btn-facebook">+Add</button>
							        </div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Marketing By:</label>
										<select class="form-control" id="id_user" name="id_user">
											<!-- <option value=""><?php echo $c->id_user ?></option> -->
											<?php 
											foreach($marketing as $mar){ 
												 if($mar->id == $c->id_user) {
											?>
											<option value="<?php echo $mar->id ?>"><?php echo $mar->name ?></option>
											<?php } }?>
											<option value="">Pilih</option>
											<?php 
											foreach($marketing as $mar){ 
											?>
											<option value="<?php echo $mar->id ?>"><?php echo $mar->name ?></option>
											<?php }?>
										</select>
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
											<option value="0">Contact</option>
											<option value="1">Client Process</option>
											<option value="2">Client Closing</option>
										</select>
									</div>
								</td>
							</tr>
						</table>
					<br>
							
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
			
		</div>

<!-- TLP -->

</div>

<script type="text/javascript">
	
    // add row pic
    $("#addRow_pic").click(function () {
        var html = '';
        html += '<div id="inputFormRow_pic">';
        html += '<div class="input-group mb-3">';
        html += '<input type="text" name="pic[]" class="form-control m-input" placeholder="Pic Name" autocomplete="off">';
        html += '<input type="text" name="pic_contact[]" class="form-control m-input" placeholder="Contact Pic" autocomplete="off">';
        html += '<input type="text" name="pic_email[]" class="form-control m-input" placeholder="pic@example.com" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow_pic" type="button" class="btn btn-danger">-</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow_pic').append(html);
    });
    //edit row pic
<?php $id = 1; 	foreach($prospective_client as $c){ ?>
    $(document).on('click', '#addRow_pic_<?php echo $c->id ?>', function () {
       var html = '';
        html += '<div id="inputFormRow_pic">';
        html += '<div class="input-group mb-3">';
        html += '<input type="text" name="pic[]" class="form-control m-input" placeholder="Pic Name" autocomplete="off">';
        html += '<input type="text" name="pic_contact[]" class="form-control m-input" placeholder="Contact Pic" autocomplete="off">';
        html += '<input type="text" name="pic_email[]" class="form-control m-input" placeholder="pic@example.com" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow_pic" type="button" class="btn btn-danger">-</button>';
        html += '</div>';
        html += '</div>';

       //$(this).add('#newRow_pic_edit').append(html);
       
        $('#newRow_pic_<?php echo $c->id ?>').append(html);
        console.log('#newRow_pic_<?php echo $c->id ?>');
    });

<?php } ?>
    // add row contact
    $("#addRow_contact").click(function () {
        var html = '';
        html += '<div id="inputFormRow_contact">';
        html += '<div class="input-group mb-3">';
        html += '<input class="form-control" id="inputdefault" type="text" name="contact[]" placeholder="Company Contact">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow_contact" type="button" class="btn btn-danger">-</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow_contact').append(html);
    });
<?php $id = 1; 	foreach($prospective_client as $c){ ?>
    //edit row contact
    $("#addRow_contact_<?php echo $c->id ?>").click(function () {
        var html = '';
        html += '<div id="inputFormRow_contact">';
        html += '<div class="input-group mb-3">';
        html += '<input class="form-control" id="inputdefault" type="text" name="contact[]" placeholder="Company Contact">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow_contact" type="button" class="btn btn-danger">-</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow_contact_<?php echo $c->id ?>').append(html);
    });
<?php } ?>

    // add row email
    $("#addRow_email").click(function () {
        var html = '';
        html += '<div id="inputFormRow_email">';
        html += '<div class="input-group mb-3">';
        html += '<input type="email" class="form-control" id="email"  name="email[]" placeholder="company@example.com">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow_email" type="button" class="btn btn-danger">-</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow_email').append(html);
    });
<?php $id = 1; 	foreach($prospective_client as $c){ ?>
    //edit row email
        $("#addRow_email_<?php echo $c->id ?>").click(function () {
        var html = '';
        html += '<div id="inputFormRow_email">';
        html += '<div class="input-group mb-3">';
        html += '<input type="email" class="form-control" id="email"  name="email[]" placeholder="company@example.com">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow_email" type="button" class="btn btn-danger">-</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow_email_<?php echo $c->id ?>').append(html);
    });
<?php } ?>

    // remove row pic
    $(document).on('click', '#removeRow_pic', function () {
        $(this).closest('#inputFormRow_pic').remove();
    });


    // remove row contact
    $(document).on('click', '#removeRow_contact', function () {
        $(this).closest('#inputFormRow_contact').remove();
    });

     // remove row email
    $(document).on('click', '#removeRow_email', function () {
        $(this).closest('#inputFormRow_email').remove();
    });

    
</script>