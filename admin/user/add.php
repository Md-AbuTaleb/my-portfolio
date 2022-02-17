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
							$name = $_POST['admin_name'];
							$phone = $_POST['admin_phone'];
							$email = $_POST['admin_email'];
							$user = $_POST['admin_user'];
							$password = md5($_POST['admin_password']);
							
							$file_name = $_FILES['admin_image']['name'];
							$file_size = $_FILES['admin_image']['size'];
							$file_temp= $_FILES['admin_image']['tmp_name'];
							
							$upload_file = 'picture/'. $file_name;

							$name2 = $conn->real_escape_string($name);
							$phone2 = $conn->real_escape_string($phone);
							$email2 = $conn->real_escape_string($email);
							$user2 = $conn->real_escape_string($user);
							$password2 = $conn->real_escape_string($password);
		
							$check_sql = "select admin_email from admin where admin_email = '$email2'";
							$check_result = $conn->query($check_sql);
							$check_count = $check_result->num_rows;
							
							if($check_count == 0){
								move_uploaded_file($file_temp,'../'. $upload_file);

								$insert_sql = "insert into admin(admin_name,admin_phone,admin_email,admin_username,admin_password, admin_photo)values('$name2','$phone2','$email2','$user2','$password2','$upload_file')";

								$insert = $conn->query($insert_sql);
							if($insert){
									echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
									User submitted successfully !
								  </div>';
								  //redirecting page to index.
								  echo "<meta http-equiv='refresh' content='3;url=index.php'>";
								}else{
									echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									User not submitted !
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								  </div>';
								}
							}else{
								$error = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									This emial allready exist !
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								  </div>';
							}

							
						}else{
								echo "<h3 class='text-center h3'>Add User</h3>";
							}
					?>
					<div class="card">
						<div class="card-body">
							<form action="" method="post" enctype="multipart/form-data" data-parsley-validate>
								<div class="row">
							  <div class="mb-3 col-md-6">
								<label for="name" class="form-label">Name</label>
								<input type="text" class="form-control" id="name" name="admin_name" placeholder="Enter name" value= "<?php if(isset($name2)){echo $name2;}?>" data-parsley-required>
							  </div>
							  <div class="mb-3 col-md-6">
								<label for="phone" class="form-label">Phone</label>
								<input type="number" class="form-control" id="phone" name="admin_phone" placeholder="Enter Phone" value= "<?php if(isset($phone2)){echo $phone2;}?>" data-parsley-required>
							  </div>
							  <div class="mb-3 col-md-6">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" id="email" name="admin_email" placeholder="Enter email" value= "<?php if(isset($email2)){echo $email2;}?>" data-parsley-required data-parsley-type="email">
								<?php
									if(isset($error)){ echo $error;}
								?>
							  </div>
							  <div class="mb-3 col-md-6">
								<label for="username" class="form-label">User Name</label>
								<input type="text" class="form-control" id="username" name="admin_user" placeholder="Enter username" value= "<?php if(isset($user2)){echo $user2;}?>" data-parsley-required>
							  </div>
							  <div class="mb-3 col-md-6">
								<label for="password" class="form-label">Password</label>
								<input type="password" class="form-control" id="password" name="admin_password" placeholder="Enter password"  data-parsley-required>
							  </div>
							  <div class="mb-3 col-md-6">
								<label for="image" class="form-label">Image</label>
								<input type="file" class="form-control" id="image" name="admin_image">
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
