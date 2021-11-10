<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-body">
			<div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">Working Form</h6></div>
			<hr>
			<form action="<?php echo base_url(). 'index.php/work/p_input'; ?>" method="post">
				<table width="100%">
					<tr>
						<td>
							<div class="form-group">
							  <label for="inputdefault">Item:</label>
							  <input type="text" class="form-control" id="usr" name="item">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<label for="inputdefault">Job:</label>
								<textarea class="form-control" rows="5" id="comment" name="id_job"></textarea>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Date:</label>
								<input class="form-control" id="inputdefault" type="date" name="date">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Start Time:</label>
								<input class="form-control" id="inputdefault" type="time" name="start">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Finish Time:</label>
								<input class="form-control" id="inputdefault" type="time" name="finish">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Note:</label>
								<textarea class="form-control" rows="5" id="comment" name="note"></textarea>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Worker:</label>
								<input class="form-control" id="inputdefault" type="text" name="id_user">
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