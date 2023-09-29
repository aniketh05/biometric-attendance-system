<?php
	if(isset($_POST["btnsubmit"]))
	{
		extract($_POST);
		include "connect.php";
		if($rec=mysqli_fetch_array(mysqli_query($con,"SELECT member_id FROM `member` order by member_id desc limit 1")))
		{
		
		}
		$en = date("Y");
		
		$query = "INSERT INTO  member (`enrollment_no` ,  `name`) VALUES('$en','$name')";

		$q = mysqli_query($con,$query)or die("Error!!");
		
			print "<script>";
			print "alert('Member added successfully....');";
			print "self.location='index.php';";
			print "</script>";
		
	}
	else
	{
		header("Location:index.php");
	}
?>
<?php include  "footer.php"; ?>
