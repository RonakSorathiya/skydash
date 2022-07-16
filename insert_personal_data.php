<?php 
include 'connection.php';

// print_r($_POST);
$action = 0;$action_message= ""; 
// $p_id = $s_name = $s_age = $s_pan = $s_occ = $sp_name = $sp_age = $sp_pan = $sp_occ = $p_add = $p_email = $p_contact = $f_name =  $f_rel = $f_age = $f_dpn = $p_id = "";  

if($_POST)
{
	$s_name    = $_POST['s_name'];
    $s_age     = $_POST['s_age'];
    $s_pan     = $_POST['s_pan'];
    $s_occ     = $_POST['s_occ'];
    $sp_name   = $_POST['sp_name'];
    $sp_age    = $_POST['sp_age'];
    $sp_pan    = $_POST['sp_pan'];
    $sp_occ    = $_POST['sp_occ'];
    $p_add     = $_POST['p_add'];
    $p_email   = $_POST['p_email'];
    $p_contact = $_POST['p_contact'];
    	
    $f_name = $_POST['f_name'];
    $f_rel = $_POST['f_rel'];
    $f_age = $_POST['f_age'];
    $f_dpn = $_POST['f_dpn'];

    // personal_detail
    $sql_person = mysqli_query($conn,"INSERT INTO personal_detail(`s_name`,`s_age`,`s_pan`,`s_occ`,`sp_name`,`sp_age`,`sp_pan`,`sp_occ`,`p_add`,`p_email`,`p_contact`)
        		VALUES('$s_name','$s_age','$s_pan','$s_occ','$sp_name','$sp_age','$sp_pan','$sp_occ','$p_add','$p_email','$p_contact')");

    $last_id = $conn->insert_id;

    // family_detail
    $sql_family = mysqli_query($conn,"INSERT INTO family_detail(`p_id`,`f_name`,`f_rel`,`f_age`,`f_dpn`)VALUES('$last_id','$f_name','$f_rel','$f_age','$f_dpn')");
    

    // financial_goal
    for($i=0;$i<count($_POST['note']);$i++)
	{
      $note       = $_POST['note'][$i];
      $risk_level = $_POST['risk_level'];
      $p_id       = $last_id;

      $sql_financial_goal = mysqli_query($conn,"INSERT INTO `financial_goal`(`note`, `risk_level`, `p_id`) VALUES ('$note','$risk_level','$p_id')");

      $last_financial_goal_id = $conn->insert_id;
    }
    // goal_detail
    for($i=0;$i<count($_POST['g_dsc']);$i++)
	{
     	$g_dsc       = $_POST['g_dsc'][$i];
      	$g_freq      = $_POST['g_freq'][$i];
      	$g_value     = $_POST['g_value'][$i];
      	$g_Inflation = $_POST['g_Inflation'][$i];
      	$g_st_year   = $_POST['g_st_year'][$i];
      	$g_end_year  = $_POST['g_end_year'][$i];
      	$g_priority  = $_POST['g_priority'][$i];
      	$p_id        = $last_id;
      	$fg_id       = $last_financial_goal_id;

      	$sql_goal_detail = mysqli_query($conn,"INSERT INTO `goal_detail`(`g_dsc`, `g_freq`, `g_value`, `g_Inflation`, `g_st_year`, `g_end_year`, `g_priority`, `p_id`, `fg_id`) VALUES ('$g_dsc', '$g_freq', '$g_value', '$g_Inflation', '$g_st_year', '$g_end_year', '$g_priority', '$p_id', '$fg_id')");
    }

    // assumption
    for($i=0;$i<count($_POST['a_description']);$i++)
	{
		$p_id          = $last_id;
		$a_description = $_POST['a_description'][$i];
		
		$sql_assumption = mysqli_query($conn,"INSERT INTO `assumption`(`p_id`, `a_description`) VALUES ('$p_id','$a_description')");
	}

    
    if($sql_person && $sql_family && $sql_financial_goal && $sql_goal_detail && $sql_assumption)
    {
        $_SESSION['action']=1;
        $_SESSION['action_message'] = '<div class="alert alert-success" id="success-alert" role="alert"><center><strong>Well Done!</strong> Succesfully Inserted</center></div>';
        echo "<script>window.location.href='personal_details.php'</script>";
    }
    else
    {
        $_SESSION['action']=2;
        $_SESSION['action_message'] = "Error:".mysqli_error($conn);
    }
}
?>