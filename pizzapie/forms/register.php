<!DOCTYPE html>
<?php
	include('includes/db.php');
?>
<html>
<head>
	<title>Pizza Pie</title>
	<link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>
<body>

	<div id="id01" class="modal">
    
    <form class="modal-content animate" action="index.php" method="post">
        <div class="container">
          
          <h4 style="text-align: center;">Register Here...</h4>

          <label><b>Name</b><span style="color: red">*</span></label>
          <input type="text" placeholder="Enter Name" name="user_name" ><br>

          <label><b>Phone</b><span style="color: red">*</span></label>
          <input type="number" placeholder="Enter Phone Number" name="user_phone" ><br>

          <label><b>Email</b><span style="color: red">*</span></label>
          <input type="email" placeholder="Enter Email" name="user_email" ><br>

          <label><b>Address</b><span style="color: red;">*</span></label>
          <input type="text" placeholder="Enter Address" name="user_address"><br>

          <label><b>Password: </b><span style="color: red;">*</span></label>
          <input type="password" placeholder="Enter Password" name="user_password" ><br>

          <label><b>Confirm Password: </b><span style="color: red;">*</span></label>
          <input type="password" placeholder="Confirm Password" >

<!--             <label><b>ReCaptcha:

            <textarea name="str">

            <?php
                function rand_string( $length ) {
                   $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@#&*";  
                   $size = strlen( $chars );
                
                   for( $i = 0; $i < $length; $i++ ) {
          
                         $str= $chars[ rand( 0, $size - 1 ) ];
                        echo $str;
                   }
                }
            rand_string( 7 );
            ?>

            </textarea>

            </b></label>
            <input type="text" name="recaptcha" > -->

          <button type="submit" name="register">Sign Up</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>
  </div>
  <!-- pizza order form ends here -->
</body>
</html>

<?php
	if (isset($_POST['register'])) {

		//getting the user data from form to store in database
		
		$user_name = $_POST['user_name'];
		$user_phone = $_POST['user_phone'];
		$user_email = $_POST['user_email'];
		$user_address = $_POST['user_address'];
		$user_password = $_POST['user_password'];

		$register_user = "insert into userdata (user_name,user_phone,user_email,user_address,user_password) values('$user_name','$user_phone','$user_email','$user_address','$user_password')";

		$register = mysqli_query($con, $register_user);

		if($register){
			echo "<script>aleert('User Registered Successfully...')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		}
	}

?>