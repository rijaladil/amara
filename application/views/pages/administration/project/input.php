
<div class="container-fluid">

	<div class="card shadow mb-4">

		<div class="card-body">

			<div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">Master Project</h6></div>

			<hr>

			<form action="<?php echo base_url(). 'index.php/project/p_input'; ?>" method="post">
				<table width="100%">
					<tr>
						<td>
							<div class="form-group">
							  <label for="inputdefault">Name:</label>
							  <input type="text" class="form-control" id="usr" name="name">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<label for="inputdefault">Work Package:</label>
								<textarea class="form-control" rows="5" id="comment" name="work_package"></textarea>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Location:</label>
								<input class="form-control" id="inputdefault" type="text" name="location">
							</div>
						</td>
					</tr>

					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">date:</label>
								<!-- <input class="form-control" id="inputdefault" type="number"  placeholder="YYYY" name="date" min="2000" max="2100"> -->
								<input class="form-control" id="inputdefault" type="text"  name="date">							
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Project:</label>
								<select class="form-control" id="project" name="project">
											<option value="">Pilih</option>
											<option value="ADDENDUM AMDAL (ANDAL, RKL-RPL)">ADDENDUM AMDAL (ANDAL, RKL-RPL)</option>
											<option value="AMDAL (ANDAL, RKL-RPL)">AMDAL (ANDAL, RKL-RPL)</option>
											<option value="ANDALALIN">ANDALALIN</option>
											<option value="DELH">DELH</option>
											<option value="DPPL/DPLH">DPPL/DPLH</option>
											<option value="IMB">IMB</option>
											<option value="KAJIAN LINGKUNGAN">KAJIAN LINGKUNGAN</option>
											<option value="KAJIAN LINGKUNGAN (PERTEK)">KAJIAN LINGKUNGAN (PERTEK)</option>
											<option value="PEMANTAUAN LINGKUNGAN">PEMANTAUAN LINGKUNGAN</option>
											<option value="SIPA">SIPA</option>
											<option value="UKL-UPL">UKL-UPL</option>
										</select>
							</div>
						</td>
					</tr>					
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Sector:</label>
								<input class="form-control" id="inputdefault" type="text" name="sector">
							</div>
						</td>
					</tr>
					<tr>
						<td><input type="submit" class="btn btn-info" value="Input"></td>
					</tr>
				</table>
			</form>	
		</div>
	</div>
</div>