

<div class="container-fluid">

	<div class="card shadow mb-4">

		<div class="card-body">

			<div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">Edit Project</h6></div>

			<hr>

			<?php foreach($project as $p){ ?>

			<form action="<?php echo base_url(). 'index.php/project/update'; ?>" method="post">
				<table width="100%">
					<tr>
						<td>
							<div class="form-group">
							  <label for="inputdefault">Name:</label>
							  <input type="hidden" name="id" value="<?php echo $p->id ?>">
							  <input type="text" class="form-control" id="usr" name="name" value="<?php echo $p->name ?>">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<label for="inputdefault">Work Package:</label>
								<textarea class="form-control" rows="5" id="comment" name="work_package" ><?php echo $p->work_package ?></textarea>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Location:</label>
								<input class="form-control" id="inputdefault" type="text" name="location" value="<?php echo $p->location ?>">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Date:</label>
								<input class="form-control" id="inputdefault" type="text" name="date" value="<?php echo $p->date ?>">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Project:</label>
								<input class="form-control" id="inputdefault" type="text" name="project" value="<?php echo $p->project ?>">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group ">
								<label for="inputdefault">Sector:</label>
								<input class="form-control" id="inputdefault" type="text" name="sector" value="<?php echo $p->sector ?>">
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