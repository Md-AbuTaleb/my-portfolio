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

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

		<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" style="postion:relative;">
			<div class="myerror w-50 m-auto" style="postion: absolute">
				
					<?php
					if(isset($_SESSION['error'])){
						echo $_SESSION['error'];
						unset($_SESSION['error']);
						echo "<meta http-equiv='refresh' content='3, URL=index.php'>";
					}
	              ?>
	
			</div>
			<thead>
			<tr>
				<th>Serial</th>
				<th>Image</th>
				<th>Name</th>
				<th>User Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Action</th>
			</tr>
			</thead>


			<tbody>
			
				
				<?php 
					$user_sql = "select * from admin";
					$user_result = $conn->query($user_sql);
					$serial = 0;
					while ($user_row = $user_result->fetch_assoc()){
						$serial++;
						?>
							<tr>
							<td><?php echo $serial; ?></td>
							<td><img src="<?php echo '../'. $user_row['admin_photo'];?>" alt="" height="50px" width="50px"></td>
							<td><?php echo $user_row['admin_name']; ?></td>
							<td><?php echo $user_row['admin_username']; ?></td>
							<td><?php echo $user_row['admin_email']; ?></td>
							<td><?php echo $user_row['admin_phone']; ?></td>
							
							<td>
							<a href="edit.php?editid=<?php echo $user_row['admin_id'];?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>							
							<a href="password.php?passid=<?php echo $user_row['admin_id'];?>"><i class="fa fa-key" aria-hidden="true"></i></a>
							<a href="username.php?userid=<?php echo $user_row['admin_id'];?>"><i class="fa fa-user" aria-hidden="true"></i></a>
							<a href="" data-bs-toggle="modal" data-bs-target="#user<?php echo $user_row['admin_id'];?>"><i class="fas fa-trash"></i></a>
							</td>	
						</tr>
						<?php include'modal.php';?>
				<?php } ?>
			
			</tbody>
		</table>

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
                                <script>document.write(new Date().getFullYear())</script> © Taleb
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Taleb
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
