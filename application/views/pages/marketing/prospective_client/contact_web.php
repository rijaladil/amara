<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="container-fluid">
    <div class="card-body">

<!-- +ADD  -->
		<div class="modal-content">
			<div class="modal-header ">	
				<h4 class="modal-title">Contact Us</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
			<form action="<?php echo base_url(). 'index.php/Contact_Web/p_input_contact'; ?>" method="post">

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
								<label for="inputdefault">Information:</label>
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
				   </tr>

				   <tr>
						<td colspan="2" >
							<div class="form-group">
							<label for="inputdefault">Contact:</label>
							<input type="text" class="form-control" id="contact" name="contact" required>
							</div>
						</td>
					</tr>

					<tr>
						<td colspan="2" >
							<div class="form-group">
							<label for="inputdefault">Email:</label>
							<input type="email" class="form-control" id="email" name="email" required>
							</div>
						</td>
					</tr>
					
				</table>
			<br>
					
			<div class="modal-footer">
				<input type="submit" class="btn btn-success" value="Input">
			</div>
			</form>	
		</div>
		
	</div>
</div>
</div>