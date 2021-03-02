<?php
session_start();
   if(isset($_SESSION['uid'])) {
	   echo "";
   }
   else {
	   header('location: ../login.php');
   }
?>
<?php
  include ('header.php');
?>
   <div class="admintitle"  align="center">
    
   <h4><a href="logout.php" style="float:right;margin-right:30px;font-size:20px;color:#fff;">Logout</a></h4>
   <h1>Welcome To Admin Dashboard</h1>
</div> 

         <div class="dashboard">
		 <table style="width:50%;" align="center">
		           <tr>
				         <td>1.</td><td><a href="addstud.php" style="font-size:25px;">Insert Student Details</a></td>
				   </tr>
				   <tr>
				         <td>2.</td><td><a href="updatestud.php" style="font-size:25px;">Update Student Details</a></td>
				   </tr>
				   <tr>
				         <td>3.</td><td><a href="deletestud.php" style="font-size:25px;">Delete Student Details</a></td>
				   </tr>
		 </table>
		 </div>
</body>
</html>