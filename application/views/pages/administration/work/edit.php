

<div class="container-fluid">

	<div class="card shadow mb-4">

		<div class="card-body">

			<div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">Edit Working Form</h6></div>

			<hr>

			<?php foreach($work as $w){ ?>

			<form action="<?php echo base_url(). 'index.php/work/update'; ?>" method="post">

				<table width="100%">

					<tr>

						<td>

							<div class="form-group">

							  <label for="inputdefault">Item:</label>

							  <input type="hidden" name="id" value="<?php echo $w->id ?>">

							  <input type="text" class="form-control" id="usr" name="item" value="<?php echo $w->item ?>">

							</div>

						</td>

					</tr>

					<tr>

						<td>

							<div class="form-group">

								<label for="inputdefault">Job:</label>

								<textarea class="form-control" rows="5" id="comment" name="id_job"><?php echo $w->id_job ?></textarea>

							</div>

						</td>

					</tr>

					<tr>

						<td>

							<div class="form-group ">

								<label for="inputdefault">Date:</label>

								<input class="form-control" id="inputdefault" type="date" name="date" value="<?php echo $w->date ?>">

							</div>

						</td>

					</tr>

					<tr>

						<td>

							<div class="form-group ">

								<label for="inputdefault">Start Time:</label>

								<input class="form-control" id="inputdefault" type="time" name="start" value="<?php echo $w->start ?>">

							</div>

						</td>

					</tr>

					<tr>

						<td>

							<div class="form-group ">

								<label for="inputdefault">Finish Time:</label>

								<input class="form-control" id="inputdefault" type="time" name="finish" value="<?php echo $w->finish ?>">

							</div>

						</td>

					</tr>

					<tr>

						<td>

							<div class="form-group ">

								<label for="inputdefault">Note:</label>

								<textarea class="form-control" rows="5" id="comment" name="note"><?php echo $w->note ?></textarea>

							</div>

						</td>

					</tr>

					<tr>

						<td>

							<div class="form-group ">

								<label for="inputdefault">Worker:</label>

								<input class="form-control" id="inputdefault" type="text" name="id_user" value="<?php echo $w->id_user ?>">

							</div>

						</td>

					</tr>

						<td><input type="submit" class="btn btn-info" value="Edit"></td>

					</tr>

				</table>

			</form>	

			<?php } ?>

		</div>

	</div>

</div>