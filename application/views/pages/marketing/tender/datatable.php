<div class="container-fluid">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tender Recapitulation</h6>
               			<a href="#" class="btn btn-primary btn-icon-split" style="float: right;" data-toggle="modal" data-target="#Finput">
		                <span class="icon text-white-50">
		                  <i class="fas fa-flag"></i>
		                </span>
		                <span class="text">Add +</span>
		              </a>
            </div>
            <div class="card-body">
              	<div class="table-responsive">
	                <table class="table table-bordered" id="dataTable" width="160%" cellspacing="0" border="0">
	                 <thead class="text-center">
						  <tr style="font-weight:bold"> 
						  	<th rowspan="2" width="1%">No</th>
						  	<th rowspan="2" width="10%">Company</th>
						    <th rowspan="2" width="7%">Kode Tender</th>
						    <th rowspan="2" width="12%">Nama Paket Pekerjaan</th>
						    <th rowspan="2" width="7%">Lokasi</th>				
						    <th rowspan="2" width="7%">Nilai HPS (Rp)</th>		    
						    <th colspan="5" width="30%" style="background-color: #fdc7c7;">Dokumen Kualifikasi</th>
						    <th colspan="7" width="35%" style="background-color: #c7fdc7;">Dokumen Pemilihan (Teknis dan Biaya)</th>
						    <th rowspan="2" width="15%">Keterangan</th>
						    <th rowspan="2" >Action</th>

						  </tr>
						  <tr>
						    
						    <th width="5%">Date Download</th>
						    <th width="5%">Date Penjelasan</th>
						    <th width="5%">Date Upload</th>
						    <th width="5%">Date Pembuktian</th>
						    <th width="5%">Date Pengumuman</th>

						    <th width="5%">Date Download</th>
						    <th width="5%">Date Penjelasan</th>
						    <th width="5%">Date Upload</th>
						    <th width="5%">Date Pembukaan & Ev. Tek.</th>
						    <th width="5%">Date Pengumuman</th>
						    <th width="5%">Date Pembukaan & Ev. Harga</th>
						    <th width="5%">Pengumuman Pemenang</th>
						   
  						</tr>
					 </thead>
						</tbody >
							<?php 
								$id = 1;
								foreach($client_tender as $ct){ 
							?>
							<tr>
								<td class="text-center"><?php echo $id++ ?></td>
								<td class="text-center"><?php echo $ct->client_id .'-'.  $ct->name; ?></td>
							    <td class="text-center"><?php echo $ct->code_tender ?></td>
							    <td class="text-center"><?php echo $ct->product_name ?></td> <!-- NAMA PEKERJAAN -->
							    <td class="text-center"><?php echo $ct->city_kabupaten ?></td>
							    <td class="text-center"><?php echo number_format($ct->price_hps,2,',','.') ?></td>

							    <td  class="text-center"><?php if($ct->dk_date_download == '0000-00-00') {?> -
							    	<?php } else {echo '<a class="btn-sm"><i class="fas fa-check"></i></a>'. $ct->dk_date_download; }?></td>
							    <td  class="text-center"><?php if($ct->dk_date_penjelasan == '0000-00-00') {?> -
							    	<?php } else {echo '<a class="btn-sm"><i class="fas fa-check"></i></a>'. $ct->dk_date_penjelasan ; }?></td>
							    <td  class="text-center"><?php if($ct->dk_date_upload == '0000-00-00') {?> -
							    	<?php } else {echo '<a class="btn-sm"><i class="fas fa-check"></i></a>'. $ct->dk_date_upload ; }?></td>
							    <td  class="text-center"><?php if($ct->dk_date_pembuktian == '0000-00-00') {?> -
							    	<?php } else {echo '<a class="btn-sm"><i class="fas fa-check"></i></a>'. $ct->dk_date_pembuktian ; }?></td>
							    <td  class="text-center"><?php if($ct->dk_date_pengumuman == '0000-00-00') {?> -
							    	<?php } else {echo '<a class="btn-sm"><i class="fas fa-check"></i></a>'. $ct->dk_date_pengumuman ; }?></td>
							    <td  class="text-center"><?php if($ct->dp_date_download == '0000-00-00') {?> -
							    	<?php } else {echo '<a class="btn-sm"><i class="fas fa-check"></i></a>'. $ct->dp_date_download ; }?></td>
							    <td  class="text-center"><?php if($ct->dp_date_penjelasan == '0000-00-00') {?> -
							    	<?php } else {echo '<a class="btn-sm"><i class="fas fa-check"></i></a>'. $ct->dp_date_penjelasan ; }?></td>
							    <td  class="text-center"><?php if($ct->dp_date_upload == '0000-00-00') {?> -
							    	<?php } else {echo '<a class="btn-sm"><i class="fas fa-check"></i></a>'. $ct->dp_date_upload ; }?></td>
							    <td  class="text-center"><?php if($ct->dp_date_pembukaan_evaluasi_teknis == '0000-00-00') {?> -
							    	<?php } else {echo '<a class="btn-sm"><i class="fas fa-check"></i></a>'. $ct->dp_date_pembukaan_evaluasi_teknis ; }?></td>
							    <td  class="text-center"><?php if($ct->dp_date_pengumuman == '0000-00-00') {?> -
							    	<?php } else {echo '<a class="btn-sm"><i class="fas fa-check"></i></a>'. $ct->dp_date_pengumuman ; }?></td>
							    <td  class="text-center"><?php if($ct->dp_date_pembukaan_evaluasi_harga == '0000-00-00') {?> -
							    	<?php } else {echo '<a class="btn-sm"><i class="fas fa-check"></i></a>'. $ct->dp_date_pembukaan_evaluasi_harga ; }?></td>
							    <td class="text-center"><?php echo $ct->pengumuman_pemenang ?></td>
							    <td class="text-center"><?php echo $ct->keterangan ?></td>
							    <td  class="row justify-content-center">										
					                  <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#Fedit<?php echo $ct->id ?>">
					                    <span class="icon text-white-50">
										  <i class="fa fa-edit"></i>
										  <!-- <i class="fas fa-check"></i> -->
					                    </span>
					                  </a>

					                   <a href="<?php echo base_url(). 'index.php/tender/delete/'.$ct->id ; ?>" class="btn btn-danger btn-circle btn-sm">
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
						<h4 class="modal-title">Input Tender Recapitulation</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					<form action="<?php echo base_url(). 'index.php/tender/p_input'; ?>" method="post">

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
										<label for="inputdefault">Kode Tender:</label>								
										<input class="form-control" id="code_tender" type="text" name="code_tender">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Nilai HPS:</label>								
										<input class="form-control" id="price_hps" type="text" name="price_hps">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">										
										<table width="100%">
											<tr>
												<td colspan="5" class="text-center"><h5>Dokumen Kualifikasi</h5></td>
											</tr>
											<tr>
												<td>Date Download</td>
												<td>Date Penjelasan</td>
												<td>Date Upload</td>
												<td>Date Pembuktian</td>
												<td>Date Pengumuman</td>
											</tr>
											<tr>
												<td><input class="form-control" id="dk_date_download" type="date" name="dk_date_download"></td>
												<td><input class="form-control" id="dk_date_penjelasan" type="date" name="dk_date_penjelasan"></td>
												<td><input class="form-control" id="dk_date_upload" type="date" name="dk_date_upload"></td>
												<td><input class="form-control" id="dk_date_pembuktian" type="date" name="dk_date_pembuktian"></td>
												<td><input class="form-control" id="dk_date_pengumuman" type="date" name="dk_date_pengumuman"></td>
											</tr>
										</table>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<!-- <div class="form-group">										 -->
										<table width="100%">
											<tr>
												<td colspan="5" class="text-center"><h5>Dokumen Pemilihan (Teknis & Biaya)</h5></td>
											</tr>
											<tr>
												<td>Date Download</td>
												<td>Date Penjelasan</td>
												<td>Date Upload</td>
												<td>Date Pembuktian & Evaluasi Teknis</td>
												<td>Date Pengumuman</td>
											</tr>
											<tr>
												<td><input class="form-control" id="dp_date_download" type="date" name="dp_date_download"></td>
												<td><input class="form-control" id="dp_date_penjelasan" type="date" name="dp_date_penjelasan"></td>
												<td><input class="form-control" id="dp_date_upload" type="date" name="dp_date_upload"></td>
												<td><input class="form-control" id="dp_date_pembukaan_evaluasi_teknis" type="date" name="dp_date_pembukaan_evaluasi_teknis"></td>
												<td><input class="form-control" id="dp_date_pengumuman" type="date" name="dp_date_pengumuman"></td>
											</tr>
											<tr>
												<td colspan="1">Date Pembukaan & Evaluasi Harga</td>
												<td colspan="4">Pengumuman Pemenang</td>
											</tr>
											<tr>
												<td colspan="1"><input class="form-control" id="dp_date_pembukaan_evaluasi_harga" type="date" name="dp_date_pembukaan_evaluasi_harga"></td>
												<td colspan="4"><input class="form-control" id="pengumuman_pemenang" type="text" name="pengumuman_pemenang"></td>
											</tr>
										</table>
									<!-- </div> -->
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Keterangan:</label>								
										<textarea class="form-control" type='text' rows="" id="keterangan" name="keterangan"></textarea>
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



			<?php $id = 1; 	foreach($client_tender as $ct){ ?>
			<div class="modal fade" id="Fedit<?php echo $ct->id ?>" role="dialog">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">	
						<h4 class="modal-title">Edit Tender Recapitulation</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					
					<form action="<?php echo base_url(). 'index.php/tender/update'; ?>" method="post">
					<table width="100%">
							<tr>
								<td>
									<div class="form-group ">
										<label for="inputdefault">Company Name:</label>
										<input type="hidden" name="id" value="<?php echo $ct->id ?> " >
										<select class="form-control" id="client_id" name="client_id" >
											<?php 
											foreach($client as $c){ 
												 if($c->id == $ct->client_id) {
											?>
											<option value="<?php echo $c->id ?>"><?php echo $c->name ?></option>
											<?php } }?>
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
										<label for="inputdefault">Kode Tender:</label>								
										<input class="form-control" id="code_tender" type="text" name="code_tender" value="<?php echo $ct->code_tender ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Nilai HPS:</label>								
										<input class="form-control" id="price_hps" type="text" name="price_hps" value="<?php echo $ct->price_hps ?>">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">										
										<table width="100%">
											<tr>
												<td colspan="5" class="text-center"><h5>Dokumen Kualifikasi</h5></td>
											</tr>
											<tr>
												<td>Date Download</td>
												<td>Date Penjelasan</td>
												<td>Date Upload</td>
												<td>Date Pembuktian</td>
												<td>Date Pengumuman</td>
											</tr>
											<tr>
												<td><input class="form-control" id="dk_date_download" type="date" name="dk_date_download" value="<?php echo $ct->dk_date_download ?>"></td>
												<td><input class="form-control" id="dk_date_penjelasan" type="date" name="dk_date_penjelasan" value="<?php echo $ct->dk_date_penjelasan ?>"></td>
												<td><input class="form-control" id="dk_date_upload" type="date" name="dk_date_upload" value="<?php echo $ct->dk_date_upload ?>"></td>
												<td><input class="form-control" id="dk_date_pembuktian" type="date" name="dk_date_pembuktian" value="<?php echo $ct->dk_date_pembuktian ?>"></td>
												<td><input class="form-control" id="dk_date_pengumuman" type="date" name="dk_date_pengumuman" value="<?php echo $ct->dk_date_pengumuman ?>"></td>
											</tr>
										</table>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<!-- <div class="form-group">										 -->
										<table width="100%">
											<tr>
												<td colspan="5" class="text-center"><h5>Dokumen Pemilihan (Teknis & Biaya)</h5></td>
											</tr>
											<tr>
												<td>Date Download</td>
												<td>Date Penjelasan</td>
												<td>Date Upload</td>
												<td>Date Pembuktian & Evaluasi Teknis</td>
												<td>Date Pengumuman</td>
											</tr>
											<tr>
												<td><input class="form-control" id="dp_date_download" type="date" name="dp_date_download" value="<?php echo $ct->dp_date_download ?>"></td>
												<td><input class="form-control" id="dp_date_penjelasan" type="date" name="dp_date_penjelasan" value="<?php echo $ct->dp_date_penjelasan ?>"></td>
												<td><input class="form-control" id="dp_date_upload" type="date" name="dp_date_upload" value="<?php echo $ct->dp_date_upload ?>"></td>
												<td><input class="form-control" id="dp_date_pembukaan_evaluasi_teknis" type="date" name="dp_date_pembukaan_evaluasi_teknis" value="<?php echo $ct->dp_date_pembukaan_evaluasi_teknis ?>"></td>
												<td><input class="form-control" id="dp_date_pengumuman" type="date" name="dp_date_pengumuman" value="<?php echo $ct->dp_date_pengumuman ?>"></td>
											</tr>
											<tr>
												<td colspan="1">Date Pembukaan & Evaluasi Harga</td>
												<td colspan="4">Pengumuman Pemenang</td>
											</tr>
											<tr>
												<td colspan="1"><input class="form-control" id="dp_date_pembukaan_evaluasi_harga" type="date" name="dp_date_pembukaan_evaluasi_harga" value="<?php echo $ct->dp_date_pembukaan_evaluasi_harga ?>"></td>
												<td colspan="4"><input class="form-control" id="pengumuman_pemenang" type="text" name="pengumuman_pemenang" value="<?php echo $ct->pengumuman_pemenang ?>"></td>
											</tr>
										</table>
									<!-- </div> -->
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label for="inputdefault">Keterangan:</label>								
										<textarea class="form-control" type='text' rows="" id="keterangan" name="keterangan"><?php echo $ct->keterangan ?></textarea>
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

