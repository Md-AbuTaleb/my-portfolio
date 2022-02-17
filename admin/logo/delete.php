<?php ob_start();
    session_start();
    include '../../connection.php';
    include '../path.php';
	

    if( $_SESSION['login'] != 'active'){
        header('location:../../login.php');
        }
		
	if(isset($_GET['deleteid'])){
		$deleteid = $_GET['deleteid'];
		
		$delete_sql="delete from admin where admin_id = '$deleteid'";
		$delete_result= $conn->query($delete_sql);
		
		if($delete_result){
			$_SESSION['error'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
  Done! Type deleted successfully.
</div>';
		  header('location:index.php');
		  exit();
	}else{
		$_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
  Ups! Type name not deleted.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
		  header('location:index.php');
		  exit();
	}	
	}
?>