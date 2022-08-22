<?php 
require_once 'connection.php';

$action = 0; $action_message="";
if(isset($_GET['did']))
{
	$did=$_GET['did'];


		$query="DELETE FROM `payment` WHERE payment_id='$did' ";
		$data=mysqli_query($conn,$query);	
	

		if ($data) 
		{
			// echo "<script>alert('Data Successfully Deleted.')</script>";
			$_SESSION['action']=1;
        	$_SESSION['action_message'] = '<div class="alert alert-success" id="success-alert" role="alert"><center><strong>Well Done!</strong> Record delete Succesfully</center></div>';
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
			// echo "<script>alert('Data Updated Successfully.')</script>";
			$_SESSION['action']=1;
        	$_SESSION['action_message'] = '<div class="alert alert-success" id="success-alert" role="alert"><center><strong>Well Done!</strong> Record update Succesfully</center></div>';
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
		// echo "<script>alert('Data Updated Successfully.')</script>";
		$_SESSION['action']=1;
        $_SESSION['action_message'] = '<div class="alert alert-success" id="success-alert" role="alert"><center><strong>Well Done!</strong> Record update Succesfully</center></div>';
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
		// echo "<script>alert('Data Inserted Successfully.')</script>";
		$_SESSION['action']=1;
        $_SESSION['action_message'] = '<div class="alert alert-success" id="success-alert" role="alert"><center><strong>Well Done!</strong> Record Succesfully Inserted</center></div>';
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
		// echo "<script>alert('Data Updated Successfully.')</script>";
		$_SESSION['action']=1;
        $_SESSION['action_message'] = '<div class="alert alert-success" id="success-alert" role="alert"><center><strong>Well Done!</strong> Record update Succesfully </center></div>';
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
		// echo "<script>alert('Data Inserted Successfully.')</script>";
		$_SESSION['action']=1;
        $_SESSION['action_message'] = '<div class="alert alert-success" id="success-alert" role="alert"><center><strong>Well Done!</strong> Record insert Succesfully</center></div>';
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
		// echo "<script>alert('Data Updated Successfully.')</script>";
		$_SESSION['action']=1;
        $_SESSION['action_message'] = '<div class="alert alert-success" id="success-alert" role="alert"><center><strong>Well Done!</strong> Record insert Succesfully</center></div>';
		echo "<script>window.location.href='list_expense.php'</script>";
	}
}

if (isset($_POST['add_course_master']))
{
	$c_title=$_POST['c_title'];
	$c_duration=$_POST['c_duration'];
	$c_price=$_POST['c_price'];
	$c_description=$_POST['c_description'];
	$filename     = $_FILES['c_image']['name']; 

  	$allowed = array('gif', 'png', 'jpg','jpeg');
      
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	  if($filename != "")
	  {
	    if (!in_array($ext, $allowed)) {
	      echo "<script>alert('Invalid filetype')</script>";
	    }
	    else
	    {
	      $imgnewfile=md5($filename).".".$ext;
	      move_uploaded_file($_FILES["c_image"]["tmp_name"],"img/".$imgnewfile);
	    }
	  }
	  else
	  {
	    $imgnewfile = "";
	  }

	
	$query="INSERT INTO `course_master`(`course_title`,`course_duration`,`course_price`,
		`course_desc`,`course_coverimg`) 
			VALUES ('$c_title','$c_duration','$c_price','$c_description','$imgnewfile')";
	$data=mysqli_query($conn,$query);

	if ($data) 
	{
		//echo "<script>alert('Data Inserted Successfully.')</script>";
		$_SESSION['action']=1;
        $_SESSION['action_message'] = '<div class="alert alert-success" id="success-alert" role="alert"><center><strong>Well Done!</strong> Record insert Succesfully</center></div>';
		echo "<script>window.location.href='add_course_master.php'</script>";
	}	
}

if (isset($_POST['update_course_master'])) 
{

	$c_id=$_POST['hid'];
	$c_title=$_POST['c_title'];
	$c_duration=$_POST['c_duration'];
	$c_price=$_POST['c_price'];
	$c_desc=$_POST['c_description'];
	$filename=$_POST['old_img'];
	
	$image_size = $_FILES['new_img']['size'];
	$u_img=$_FILES['new_img']['name'];
	$allowed = array('gif', 'png', 'jpg','jpeg');
	      
	$ext = pathinfo($u_img, PATHINFO_EXTENSION);

	if($u_img == "") 
	{
		$img=$_POST['old_img'];
	}
	else
	{
		if (!in_array($ext, $allowed) ) 
		{
	      echo "<script>alert('Invalid filetype')</script>";
	    }
	    else
	    {
		      $img=md5($u_img).".".$ext;
		      move_uploaded_file($_FILES["new_img"]["tmp_name"],"img/".$img);
	    }
	}
	
		$query="UPDATE `course_master` SET `course_title`='$c_title',`course_duration`='$c_duration',`course_price`='$c_price',`course_desc`='$c_desc',
			`course_coverimg`='$img' WHERE `course_id`='$c_id'";
		
		$data=mysqli_query($conn,$query);

		if ($data) 
		{
			// echo "<script>alert('Data Updated Successfully.')</script>";
			$_SESSION['action']=1;
        $_SESSION['action_message'] = '<div class="alert alert-success" id="success-alert" role="alert"><center><strong>Well Done!</strong> Record update Succesfully</center></div>';
			echo "<script>window.location.href='list_course_master.php'</script>";
		}
}

if (isset($_POST['add_course_payment'])) 
{
	$c_name=$_POST['c_name'];
	$course_name=$_POST['course_name'];
	$query="SELECT course_id FROM  `course_master` WHERE course_title='$course_name'";
	$data=mysqli_query($conn,$query);
	$res=mysqli_fetch_assoc($data);
	$c_id=implode("",$res);
	$c_amount=$_POST['p_amount'];
	$p_type=$_POST['p_type'];
	$p_date=$_POST['p_date'];

	$query="INSERT INTO `course_payment`(`client_name`, `course_id`, `pay_amount`, `pay_type`, `pay_date`) 
			VALUES ('$c_name','$c_id','$c_amount','$p_type','$p_date')";


	$data=mysqli_query($conn,$query);

	if ($data) 
	{
		// echo "<script>alert('Data Inserted Successfully.')</script>";
		$_SESSION['action']=1;
        $_SESSION['action_message'] = '<div class="alert alert-success" id="success-alert" role="alert"><center><strong>Well Done!</strong> Record insert Succesfully</center></div>';
		echo "<script>window.location.href='add_course_payment.php'</script>";
	}
}

if (isset($_POST['update_course_payment'])) 
{
	$p_id=$_POST['hid'];
	$c_name=$_POST['u_c_name'];
	$c_title=$_POST['u_course_title'];
	
	$query="SELECT course_id FROM  `course_master` WHERE course_title='$c_title'";
	$data=mysqli_query($conn,$query);
	$res=mysqli_fetch_assoc($data);
	$c_id=implode("",$res);
	

	$c_amount=$_POST['u_p_amount'];
	$p_type=$_POST['u_p_type'];
	$p_date=$_POST['u_p_date'];	

	$query="UPDATE `course_payment` SET `client_name`='$c_name',`course_id`='$c_id',
			`pay_amount`='$c_amount',`pay_type`='$p_type',`pay_date`='$p_date' 
			WHERE `payment_id`='$p_id' ";
	$data=mysqli_query($conn,$query);

	if ($data) 
	{
		//echo "<script>alert('Data Updated Successfully.')</script>";
		$_SESSION['action']=1;
        $_SESSION['action_message'] = '<div class="alert alert-success" id="success-alert" role="alert"><center><strong>Well Done!</strong> Record update Succesfully</center></div>';
		echo "<script>window.location.href='list_course_payment.php'</script>";
	}
}
?>