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
	
	if(isset($_GET['userid'])){
		$userid = $_GET['userid'];
	}
?>

<div class="main-content">

	<div class="page-content">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<h2 class="text-center">Change Email</h2>
				<div class="col-5">
					<?php
						if($_SERVER['REQUEST_METHOD'] == 'POST'){
							
							$admin_email = ($_POST['admin_email']);

							$admin_email = $conn->real_escape_string($admin_email);
							
						$check_sql = "select * from admin where admin_email='$admin_email'";
						
						$check_result = $conn->query($check_sql);
						$check_count = $check_result->num_rows;
						$check_row = $check_result->fetch_assoc();
		
						if($check_count == 0){
							$email_update="update admin set admin_email='$admin_email' where admin_id='$userid'";
							$mail_update = $conn->query($email_update);
							
							if($mail_update){
								echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
									User mail updated successfully !
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								  </div>';
								  //redirecting page to index.
								  echo "<meta http-equiv='refresh' content='3;url=index.php'>";
							}else{
								echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
									User mail not updated !
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								  </div>';
							}
							
						}else{
							echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
									This mail is already exist !.
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								  </div>';
						}
		
		
							
						}
					?>
					
					<?php 
						$user_sql = "select * from admin where admin_id='$userid'";
						$user_result = $conn->query($user_sql);
						$user_row = $user_result->fetch_assoc();
					?>
					<div class="card">
						<div class="card-body">
							<form action="" method="post" enctype="multipart/form-data" data-parsley-validate>
							  <div class="mb-3">
								<label for="email" class="form-label text-center d-block">Enter New Email</label>
								<input type="email" class="form-control" id="email" name="admin_email" placeholder="Enter New Email" value="<?php if(isset($user_row['admin_email'])){echo $user_row['admin_email'];}?>"data-parsley-required>
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
