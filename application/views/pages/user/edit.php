
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-body">
			<div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">Edit Bio</h6></div>
			<hr>
			<?php foreach($user as $u){ ?>
			<form action="<?php echo base_url(). 'index.php/user/update'; ?>" method="post">
				<table width="100%">
					<tr>
						<td>
							<div class="form-group">
							  <label for="inputdefault">Name:</label>
							  <input type="hidden" name="id" value="<?php echo $u->id ?>">
							  <input type="text" class="form-control" id="usr" name="name" value="<?php echo $u->name ?>">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<label for="inputdefault">Email:</label>
								<input class="form-control" rows="5" id="inputdefault" type="text" name="email" value="<?php echo $u->email ?>">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Contact:</label>
								<input class="form-control" id="inputdefault" type="text" name="contact" value="<?php echo $u->contact ?>">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Department:</label>
								<input class="form-control" id="inputdefault" type="text" name="department" value="<?php echo $u->department ?>">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">User Level:</label>
								<select class="form-control" name="user_level">
									<option value="<?php echo $u->user_level ?>">
									<?php if ($u->user_level === '1') : ?> Administrator
									<?php elseif ($u->user_level === '2'): ?> Marketing
									<?php elseif ($u->user_level === '3'): ?> Admin
									<?php elseif ($u->user_level === '4'): ?> Teknik
									<?php elseif ($u->user_level === '5'): ?> Finance	
									<?php elseif ($u->user_level === '0'): ?> Management		
									<?php else: ?> Customer
									<?php endif; ?></option>
									<option value="1">Administrator</option>
									<option value="2">Marketing</option>
									<option value="3">Admin</option>
									<option value="4">Teknik</option>
									<option value="5">Finance</option>
									<option value="6">Client</option>
									<option value="0">Management</option>
								</select>								
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Company Client: </label>
								<select class="form-control" name="client_id">
									<option><?php echo $u->client_id ?></option>
									<?php foreach($client as $c){ ?>								
									<option value="<?php echo $c->name ?>"><?php echo $c->name ?></option>
								<?php } ?>
								</select>								
							</div>
						</td>
					</tr>

					<tr>
						<td><input type="submit" class="btn btn-info" value="Edit"></td>
					</tr>
				</table>
			</form>	
			<?php } ?>
		</div>
	</div>
</div>