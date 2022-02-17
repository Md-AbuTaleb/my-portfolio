<?php ob_start();
    session_start();
    include '../../connection.php';
    include '../path.php';
	

    if( $_SESSION['login'] != 'active'){
        header('location:../../login.php');
        }
?>
<?php
    include '../header.php';
    include '../top-navbar.php';
    include '../left-sidebar.php';
	
	if(isset($_GET['passid'])){
		$passid = $_GET['passid'];
	}
?>

<div class="main-content">

	<div class="page-content">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-5">
					<?php
						if($_SERVER['REQUEST_METHOD'] == 'POST'){
							
							$password = md5($_POST['admin_password']);

							$password2 = $conn->real_escape_string($password);
		
							$p_update="update admin set admin_password='$password2' where admin_id = '$passid'";
							
							$pass_update = $conn->query($p_update);
							
							if($pass_update){
									echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
									User Password updated successfully !									
								  </div>';
								  //redirecting page to index.
								  echo "<meta http-equiv='refresh' content='3;url=index.php'>";
								}else{
									echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									User Password not updated !
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								  </div>';
								}
							

							
						}else{
								echo "<h3 class='text-center display-6'>Change Password</h3>";
							}
					?>
					<div class="card">
						<div class="card-body">
							<form action="" method="post" enctype="multipart/form-data" data-parsley-validate>
							  <div class="mb-3">
								<label for="password" class="form-label">New Password</label>
								<input type="password" class="form-control" id="passowrd" name="admin_password" placeholder="Enter New Password" data-parsley-required>
							  </div>
							  <div class="mb-3">
								<label for="cpassword" class="form-label">Confirm Password</label>
								<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Enter confirm password" data-parsley-required data-parsley-equalto="#passowrd" data-parsley-trigger="keyup">
							  </div>
							  
							  
							  <div class="mb-3 text-center">
							  <button type="submit" class="btn btn-primary">Change</button>
							  <a href="index.php" class="btn btn-primary">Cancel</a>
							  </div>
							</form>
						</div>
					</div>
				</div> <!-- end col -->
			</div> <!-- end row -->
		</div> <!-- container-fluid -->
	</div>
	<!-- End Page-content -->

                
	<footer class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<script>document.write(new Date().getFullYear())</script> © Admiria.
				</div>
				<div class="col-sm-6">
					<div class="text-sm-end d-none d-sm-block">
						Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



<?php
    include '../footer.php';
?>
