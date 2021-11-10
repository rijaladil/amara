<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-body">
			<div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">Master User</h6></div>
			<hr>
			<form action="<?php echo base_url(). 'index.php/user/p_input'; ?>" method="post">
				<table width="100%">
					<tr>
						<td>
							<div class="form-group">
							  <label for="inputdefault">Name:</label>
							  <input type="text" class="form-control" id="usr" name="name" required>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<label for="inputdefault">Email:</label>
								<input class="form-control" rows="5" id="inputdefault" type="email"name="email" required>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Contact:</label>
								<input class="form-control" id="inputdefault" type="text" name="contact">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Department:</label>
								<input class="form-control" id="inputdefault" type="text" name="department">								
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">User Level:</label>
								<select class="form-control" name="user_level">
									<option value="1">Administrator</option>
									<option value="2">Employee</option>
									<option value="3">Customer</option>
								</select>								
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Company Client:</label>
								<select class="form-control" name="client_id">
									<option value="">Pilih</option>
								<?php 
									foreach($client as $c){ 
								?>
									<option value="<?php echo $c->name ?>"><?php echo $c->name ?></option>
								<?php } ?>
								</select>								
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