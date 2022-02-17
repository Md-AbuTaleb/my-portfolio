<?php ob_start();
session_start();
include'connection.php';

?>
<!doctype html>
<html lang="en">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>

<div class="login-section">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh">
            <div class="col-md-4"></div>
            <div class="col-md-4">
					<?php
						if($_SERVER['REQUEST_METHOD'] == 'POST'){
							$email = $_POST['email'];
							$password = md5($_POST['password']);
							
							$sql = "select * from admin where admin_email = '$email' and admin_password = '$password'";
							$result = $conn->query($sql);
							$count = $result->num_rows;
							
							if($count == 1){

								$row = $result->fetch_assoc();
								$_SESSION['login'] = 'active';
								$_SESSION['user_name'] = $row['admin_username'];
								$_SESSION['image'] = $row['admin_photo'];
								$_SESSION['id'] = $row['admin_id'];


								header('location: admin/index.php');

							}else{
								echo '<p class="text-center text-danger"> Email or Password not match</p>';
							}
						}
						
					?>
                <div class="form-section">
					
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="login-btn text-center">
                            <button type="submit" class="our-btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>

  <!-- java script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


  </body>
</html>