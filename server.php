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
?>