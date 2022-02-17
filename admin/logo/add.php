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
?>

<div class="main-content">

	<div class="page-content">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-10">
					<?php
						if($_SERVER['REQUEST_METHOD'] == 'POST'){
							
							$file_name    = $_FILES['logo_image']['name'];
							$file_size    = $_FILES['logo_image']['size'];
							$file_temp    = $_FILES['logo_image']['tmp_name'];
							
							$upload_file  = 'logo/logo-pic/'. $file_name;
							$logo_slug    = uniqid();
							
							$check_sql    = "select logo_name from logo where logo_name = '$upload_file'";
							$check_result = $conn->query($check_sql);
							$check_count  = $check_result->num_rows;
							
							if($check_count == 0){
								move_uploaded_file($file_temp,'../'. $upload_file);

								$insert_sql = "insert into logo(logo_name,logo_slug)values('$upload_file','$logo_slug')";
								$insert = $conn->query($insert_sql);
							if($insert){
									echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
									Logo submitted successfully !
								  </div>';
								  //redirecting page to index.
								 // echo "<meta http-equiv='refresh' content='3;url=index.php'>";
								}else{
									echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									Logo not submitted !
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								  </div>';
								}
							}else{
								$error = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									This Logo allready exist !
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								  </div>';
							}

							
						}else{
								echo "<h3 class='text-center h3'>Add Logo</h3>";
							}
					?>
					<div class="card">
						<div class="card-body">
							<form action="" method="post" enctype="multipart/form-data" data-parsley-validate>
								<div class="row">							  
							  <div class="mb-3 col-md-10">
								<label for="image" class="form-label">Image</label>
								<input type="file" class="form-control" id="image" name="logo_image">
								<?php if (isset($error)){ echo $error;}?>
							  </div>
							  <div class="mb-3 text-center">
							  <button type="submit" class="btn btn-primary">Submit</button>
							  <a href="index.php" class="btn btn-primary">Cancel</a>
							  </div>
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
