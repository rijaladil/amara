<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-body">
			<div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">Change Password</h6></div>
			<hr>
		<?php foreach($user as $u){ ?>
			<form action="<?php echo base_url().'index.php/user/update_password'; ?>" method="post" id="loginForm" name="loginForm">

				<table width="100%" cellpadding="0" border="0">
		            <tr>
		            	<td>
		            		<div class="form-group ">
				                <label for="password_again">New Password</label>
					                <input type="hidden" name="id" value="<?php echo $u->id ?>">
					                <input tabindex="1" class="form-control"   type="password" name="password" id="password" required="" />
					                
		                	</div>
		                </td>
		            </tr>
		              <tr>
		            	<td>
		            		<div class="form-group ">
				                <input type="checkbox" onclick="myFunction()">Show Password
					                
		                	</div>
		                </td>
		            </tr>
		            <tr>
		                <td colspan="2" align="">
		                	
		                <div class="form-group ">
		                	<input tabindex="3"  class="btn btn-info" type="submit" value="Save"/>
		                </div></td>
		            </tr>
		        </table>
			</form>	
			<?php } ?>
		</div>
	</div>
</div>


<script>



function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>

<style type="text/css">
	.error{
		font-size:1.5em;
		   width:100%;
	}
</style>
