

<?php

if (isset($_POST['add_company'])) 
	{ 
		include('db_conn.php');
			$user=$_POST['user_id'];
			$company_name=$_POST['company_name'];
			$address=$_POST['address'];
			$phone=$_POST['phone'];
			$dlno=$_POST['dlno'];
			$registration_no=$_POST['registration_no'];
			$gstno=$_POST['gstno'];
			
			
			
			$update="UPDATE company SET company_name='$company_name', address='$address',phone='$phone', dl_no='$dlno', registration_no='$registration_no', gst_no='$gstno' ";
				
			#$qry="INSERT INTO `company`(`id`, `company_name`, `address`, `phone`, `dl_no`, `registration_no`,`gst_no`) VALUES
			#(NULL, '$company_name', '$address', '$phone', '$dlno', '$registration_no','$gstno')";
		
			$run = mysqli_query($con,$update);
			
			
		   if($run == true){
		   	?>
		   	<script>
		   		window.alert("success full add");
		   	</script>
<?php
			header('location: add_company.php?id='.$user);
		   }else{
?>
				<script>
		   		window.alert("Error");
		   		header('location: add_company.php?id='.$user);
		   	</script>
<?php
		   }

	?>

<?php
	}		
	
?>

