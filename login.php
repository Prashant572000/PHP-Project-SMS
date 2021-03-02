<?php
session_start();
if (isset($_SESSION['uid'])) {
	header('location:admin/admindash.php');
}
?>
<html>
<head>
<title>Admin Login</title>
</head>
<body bgcolor="red">
<h4><a href="index.php" style="float:left;margin-left:30px;margin-top:30px;font-size:20px;color:black;"><-Back</a></h4>
<h1 align="center" style="background:yellow;color:black;line-height:140px;">Admin Login</h1>
<form action="login.php" method="post">
<table align="center">
              <tr>
          <td>Username</td><td> <input type="text" name="uname" required></td>
            </tr>
			<tr>
	      <td>Password</td><td> <input type="password" name="pass" required></td>
            </tr>
			<tr>
			<td colspan="2" align="center"><input type="Submit" name="login" value="Login"></td>
			</tr>
</table>
</form>
</body>
</html>
<?php

include 'dbcon.php';
if(isset($_POST['login'])) {
	$username= $_POST['uname'];
	$password= $_POST['pass'];
    $qry="SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $run=mysqli_query($conn,$qry);	
    $row=mysqli_num_rows($run);
if($row < 1) {
      ?>
	  <script>
	  alert('Username or Password not match ! !');
         window.open('login.php','_self');
		
      </script>	  
		 <?php
}
else {
$data = mysqli_fetch_assoc($run);
$id=$data['id'];
session_start();
$_SESSION['uid']=$id;
header("Location:admin/admindash.php");
}	
}

?>











