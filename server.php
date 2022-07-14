<?php 
require_once 'connection.php';

if(isset($_GET['did']))
{
	$did=$_GET['did'];


		$query="DELETE FROM `payment` WHERE payment_id='$did' ";
		$data=mysqli_query($conn,$query);	
	

		if ($data) 
		{
			echo "<script>alert('Data Successfully Deleted.')</script>";
			echo "<script>window.location.href='list_payment.php'</script>";
		}
}

if (isset($_POST['update'])) 
{
	$h_id=$_POST['h_id'];
	$p_type=$_POST['u_payment_type'];
	$p_date=$_POST['u_payment_date'];
	$c_name=$_POST['u_client_name'];

	$image_size = $_FILES['u_img']['size'];
	$u_img=$_FILES['u_img']['name'];
	$allowed = array('gif', 'png', 'jpg','jpeg');
	      
	$ext = pathinfo($u_img, PATHINFO_EXTENSION);

	if($u_img == "") 
	{
		$img=$_POST['old_img'];
	}
	else
	{
		// $img=$_FILES['u_img']['name'];
		// $tempname=$_FILES["u_icon"]["tmp_name"];
		// $folder="img/".$img;

		if (!in_array($ext, $allowed) ) 
		{
	      echo "<script>alert('Invalid filetype')</script>";
	    }
	    else
	    {
		      $img=md5($u_img).".".$ext;
		      move_uploaded_file($_FILES["u_img"]["tmp_name"],"img/".$img);
	    }
	}
	
		$query="UPDATE `payment` SET `payment_type`='$p_type',`payment_date`='$p_date',`client_name`='$c_name',`image`='$img' WHERE `payment_id`='$h_id' ";
		$data=mysqli_query($conn,$query);

		if ($data) 
		{
			echo "<script>alert('Data Updated Successfully.')</script>";
			echo "<script>window.location.href='list_payment.php'</script>";
		}

}

if (isset($_POST['v_update'])) 
{
	$vid=$_POST['hid'];
	$url=$_POST['u_video_url'];
	$date=$_POST['u_upload_date'];
	
	$query="UPDATE `add_video` SET `video_url`='$url',`upload_date`='$date'
			WHERE `video_id`='$vid'";
	$data=mysqli_query($conn,$query);

	if ($data) 
	{
		echo "<script>alert('Data Updated Successfully.')</script>";
		echo "<script>window.location.href='list_video.php'</script>";
	}
}

if (isset($_POST['add_income'])) 
{

	$i_c=$_POST['income_category'];
	$date=date('Y-m-d');
	
	$query="INSERT INTO `add_income`(`income_category`, `date`)
			 VALUES ('$i_c','$date')";
	$data=mysqli_query($conn,$query);

	if ($data) 
	{
		echo "<script>alert('Data Inserted Successfully.')</script>";
		echo "<script>window.location.href='list_income.php'</script>";
	}
}

if (isset($_POST['update_income'])) 
{
	$id=$_POST['hid'];
	$income_category=$_POST['income_category'];
	$date=date('Y-m-d');
	
	$query="UPDATE `add_income` SET `income_category`='$income_category',`date`='$date'
			WHERE `income_id`='$id'";
	$data=mysqli_query($conn,$query);

	if ($data) 
	{
		echo "<script>alert('Data Updated Successfully.')</script>";
		echo "<script>window.location.href='list_income.php'</script>";
	}
}

if (isset($_POST['add_expense'])) 
{
	$expense_category=$_POST['expecse_category'];
	$date=date('Y-m-d');
	
	$query="INSERT INTO `add_expense`(`expense_category`, `date`) 
			VALUES ('$expense_category','$date')";
	$data=mysqli_query($conn,$query);

	if ($data) 
	{
		echo "<script>alert('Data Inserted Successfully.')</script>";
		echo "<script>window.location.href='list_expense.php'</script>";
	}
}

if (isset($_POST['update_expense'])) 
{
	$id=$_POST['hid'];
	$expense_category=$_POST['expense_category'];
	$date=date('Y-m-d');
	
	$query="UPDATE `add_expense` SET `expense_category`='$expense_category',`date`='$date'
			WHERE `expense_id`='$id'";
	$data=mysqli_query($conn,$query);

	if ($data) 
	{
		echo "<script>alert('Data Updated Successfully.')</script>";
		echo "<script>window.location.href='list_expense.php'</script>";
	}
}

?>