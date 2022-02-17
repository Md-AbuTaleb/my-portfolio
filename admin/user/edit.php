<?php ob_start();
    session_start();
    include '../../connection.php';
    include '../path.php';
	

    if( $_SESSION['login'] != 'active'){
        header('location:../../login.php');
        }
	if(isset($_GET['editid'])){
		$user_edit = $_GET['editid'];
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
				<div class="col-8">
					<?php
						if($_SERVER['REQUEST_METHOD'] == 'POST'){
							$name = $_POST['admin_name'];
							$phone = $_POST['admin_phone'];
							$user = $_POST['admin_user'];
							
							$file_name = $_FILES['admin_image']['name'];
							$file_size = $_FILES['admin_image']['size'];
							$file_temp= $_FILES['admin_image']['tmp_name'];
													
							$name2 = $conn->real_escape_string($name);
							$phone2 = $conn->real_escape_string($phone);
							$user2 = $conn->real_escape_string($user);
							
							if($file_name==''){
								$edit_sql2="select * from admin where admin_id='$user_edit'";
								$edit_result2= $conn->query($edit_sql2);
								$edit_row2=$edit_result2->fetch_assoc();
								
								$upload_file=$edit_row2['admin_photo'];
							}else{
								$upload_file = 'picture/'. $file_name;
							}
		
							move_uploaded_file($file_temp,'../'. $upload_file);
							
							$update_sql ="update admin set admin_name='$name',admin_phone='$phone',admin_username='$user',admin_photo='$upload_file' where admin_id='$user_edit'";
							$update_result=$conn->query($update_sql);
							
							if($update_result){
								echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
									User Updadted successfully!.							
								  </div>';
								  //redirecting page to index.
									echo "<meta http-equiv='refresh' content='3;url=index.php'>";
							}else{
								echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									User not Updated !
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								  </div>';
							}
							
							
						}else{
								echo "<h3 class='text-center display-6'>Update User</h3>";
							}
					?>
					
					<?php 
						$edit_sql = "select * from admin where admin_id = '$user_edit'";
						$edit_result = $conn->query($edit_sql);
						$edit_row = $edit_result->fetch_assoc();
					?>
					<div class="card">
						<div class="card-body">
							<form action="" method="post" enctype="multipart/form-data" data-parsley-validate>
							  <div class="row">
							  <div class="mb-3 col-md-6">
								<label for="name" class="form-label">Name</label>
								<input type="text" class="form-control" id="name" name="admin_name" placeholder="Enter name" value= "<?php if(isset($edit_row['admin_name'])){echo $edit_row['admin_name'];}?>" data-parsley-required>
							  </div>
							  <div class="mb-3 col-md-6">
								<label for="phone" class="form-label">Phone</label>
								<input type="number" class="form-control" id="phone" name="admin_phone" placeholder="Enter Phone" value= "<?php if(isset($edit_row['admin_phone'])){echo $edit_row['admin_phone'];}?>" data-parsley-required>
							  </div>
							  <div class="mb-3 col-md-6">
								<label for="username" class="form-label">User Name</label>
								<input type="text" class="form-control" id="username" name="admin_user" placeholder="Enter username" value= "<?php if(isset($edit_row['admin_username'])){echo $edit_row['admin_username'];}?>" data-parsley-required>
							  </div>

							  <div class="mb-3 col-md-6" style="postion: relative;">
								<label for="image" class="form-label">Image</label>
								<input type="file" class="form-control" id="image" name="admin_image">
								<img src="../<?php echo $edit_row['admin_photo'];?>" height= "80px" width= "80px" style="position: absolute;">
							  </div>
							  <div class="mb-3">
							  <button type="submit" class="btn btn-primary">Update</button>
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
