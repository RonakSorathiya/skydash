<?php 
include 'connection.php';

// echo "<pre>";
// print_r($_POST);
$action = 0;$action_message= ""; 
$added_on_date = date("Y-m-d");
$added_on_time = date("h:i:s");

if(!empty($_POST))
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

    // 1) personal detail tab
    // personal_detail
    $sql_person = mysqli_query($conn,"INSERT INTO personal_detail(`s_name`,`s_age`,`s_pan`,`s_occ`,`sp_name`,`sp_age`,`sp_pan`,`sp_occ`,`p_add`,`p_email`,`p_contact`)
        		VALUES('$s_name','$s_age','$s_pan','$s_occ','$sp_name','$sp_age','$sp_pan','$sp_occ','$p_add','$p_email','$p_contact')");

    $last_id = $conn->insert_id;

    // family_detail
    $sql_family = mysqli_query($conn,"INSERT INTO family_detail(`p_id`,`f_name`,`f_rel`,`f_age`,`f_dpn`)VALUES('$last_id','$f_name','$f_rel','$f_age','$f_dpn')");
    

    // 2) financial detail tab
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

    // 3) net worth tab
        // net_worth_assets
    for($a=0;$a<count($_POST['assets_name']);$a++)
    {
        $personal_detail_id      = $last_id;
        $assets_name             = $_POST['assets_name'][$a];
        $assets_amount           = $_POST['assets_amount'][$a];
        $assets_per_amount       = $_POST['assets_per_amount'][$a];
        $assets_total_amount     = $_POST['assets_total_amount'];
        $assets_total_per_amount = $_POST['assets_total_per_amount'];

        $sql_net_worth_assets = mysqli_query($conn,"INSERT INTO `net_worth_assets`(`personal_detail_id`, `assets_name`, `assets_amount`, `assets_per_amount`, `assets_total_amount`, `assets_total_per_amount`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$assets_name','$assets_amount','$assets_per_amount','$assets_total_amount','$assets_total_per_amount','$added_on_date','$added_on_time')");
    }

       // financial_assets
    for($f=0;$f<count($_POST['financial_assets_name']);$f++)
    {
        $personal_detail_id                = $last_id;
        $financial_assets_name             = $_POST['financial_assets_name'][$f];
        $financial_assets_amount           = $_POST['financial_assets_amount'][$f];
        $financial_assets_per_amount       = $_POST['financial_assets_per_amount'][$f];
        $financial_assets_total_amount     = $_POST['financial_assets_total_amount'];
        $financial_assets_total_per_amount = $_POST['financial_assets_total_per_amount'];

        $sql_financial_assets = mysqli_query($conn,"INSERT INTO `financial_assets`(`personal_detail_id`, `financial_assets_name`, `financial_assets_amount`, `financial_assets_per_amount`, `financial_assets_total_amount`, `financial_assets_total_per_amount`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$financial_assets_name','$financial_assets_amount','$financial_assets_per_amount','$financial_assets_total_amount','$financial_assets_total_per_amount','$added_on_date','$added_on_time')");
    }


      // tangible_assets
    for($t=0;$t<count($_POST['tangible_assets_name']);$t++)
    {
        $personal_detail_id               = $last_id;
        $tangible_assets_name             = $_POST['tangible_assets_name'][$t];
        $tangible_assets_amount           = $_POST['tangible_assets_amount'][$t];
        $tangible_assets_per_amount       = $_POST['tangible_assets_per_amount'][$t];
        $tangible_assets_total_amount     = $_POST['tangible_assets_total_amount'];
        $tangible_assets_total_per_amount = $_POST['tangible_assets_total_per_amount'];

        $sql_tangible_assets = mysqli_query($conn,"INSERT INTO `tangible_assets`(`personal_detail_id`, ` tangible_assets_name`, ` tangible_assets_amount`, ` tangible_assets_per_amount`, ` tangible_assets_total_amount`, `tangible_assets_total_per_amount`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$tangible_assets_name','$tangible_assets_amount','$tangible_assets_per_amount','$tangible_assets_total_amount','$tangible_assets_total_per_amount','$added_on_date','$added_on_time')");
    }
      // personal_assets
    for($p=0;$p<count($_POST['personal_assets_name']);$p++)
    {
        $personal_detail_id               = $last_id;
        $personal_assets_name             = $_POST['personal_assets_name'][$p];
        $personal_assets_amount           = $_POST['personal_assets_amount'][$p];
        $personal_assets_per_amount       = $_POST['personal_assets_per_amount'][$p];
        $personal_assets_total_amount     = $_POST['personal_assets_total_amount'];
        $personal_assets_total_per_amount = $_POST['personal_assets_total_per_amount'];

        $sql_personal_assets = mysqli_query($conn,"INSERT INTO `personal_assets`(`personal_detail_id`, `personal_assets_name`, `personal_assets_amount`, `personal_assets_per_amount`, `personal_assets_total_amount`, `personal_assets_total_per_amount`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$personal_assets_name','$personal_assets_amount','$personal_assets_per_amount','$personal_assets_total_amount','$personal_assets_total_per_amount','$added_on_date','$added_on_time')");
    }
    
      // retirement_assets
    for($r=0;$r<count($_POST['retirement_assets_name']);$r++)
    {
        $personal_detail_id                 = $last_id;
        $retirement_assets_name             = $_POST['retirement_assets_name'][$r];
        $retirement_assets_amount           = $_POST['retirement_assets_amount'][$r];
        $retirement_assets_per_amount       = $_POST['retirement_assets_per_amount'][$r];
        $retirement_assets_total_amount     = $_POST['retirement_assets_total_amount'];
        $retirement_assets_total_per_amount = $_POST['retirement_assets_total_per_amount'];

        $sql_retirement_assets = mysqli_query($conn,"INSERT INTO `retirement_assets`(`personal_detail_id`, `retirement_assets_name`, `retirement_assets_amount`, `retirement_assets_per_amount`, `retirement_assets_total_amount`, `retirement_assets_total_per_amount`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$retirement_assets_name','$retirement_assets_amount','$retirement_assets_per_amount','$retirement_assets_total_amount','$retirement_assets_total_per_amount','$added_on_date','$added_on_time')");
    }

      // liabilities
    for($l=0;$l<count($_POST['liabilities_name']);$l++)
    {
        $personal_detail_id                = $last_id;
        $liabilities_name             = $_POST['liabilities_name'][$l];
        $liabilities_amount           = $_POST['liabilities_amount'][$l];
        $liabilities_per_amount       = $_POST['liabilities_per_amount'][$l];
        $liabilities_total_amount     = $_POST['liabilities_total_amount'];
        $liabilities_total_per_amount = $_POST['liabilities_total_per_amount'];

        $sql_liabilities = mysqli_query($conn,"INSERT INTO `liabilities`(`personal_detail_id`, `liabilities_name`, `liabilities_amount`, `liabilities_per_amount`, `liabilities_total_amount`, `liabilities_total_per_amount`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$liabilities_name','$liabilities_amount','$liabilities_per_amount','$liabilities_total_amount','$liabilities_total_per_amount','$added_on_date','$added_on_time')");
    }

    $assets_total_amount                = $_POST['assets_total_amount'];
    $assets_total_per_amount            = $_POST['assets_total_per_amount'];
    $financial_assets_total_amount      = $_POST['financial_assets_total_amount'];
    $financial_assets_total_per_amount  = $_POST['financial_assets_total_per_amount'];
    $tangible_assets_total_amount       = $_POST['tangible_assets_total_amount'];
    $tangible_assets_total_per_amount   = $_POST['tangible_assets_total_per_amount'];
    $personal_assets_total_amount       = $_POST['personal_assets_total_amount'];
    $personal_assets_total_per_amount   = $_POST['personal_assets_total_per_amount'];
    $retirement_assets_total_amount     = $_POST['retirement_assets_total_amount'];
    $retirement_assets_total_per_amount = $_POST['retirement_assets_total_per_amount'];
    $liabilities_total_amount           = $_POST['liabilities_total_amount'];
    $liabilities_total_per_amount       = $_POST['liabilities_total_per_amount'];
    $all_assets_total_amount            = $_POST['all_assets_total_amount'];
    $all_assets_total_per_amount        = $_POST['all_assets_total_per_amount'];
    $net_worth_total_amount             = $_POST['net_worth_total_amount'];
    $net_worth_total_per_amount         = $_POST['net_worth_total_per_amount'];
    $notes                              = $_POST['notes'];

    $sql_net_worth = mysqli_query($conn,"INSERT INTO `networth`(`personal_detail_id`, `total_assets_amount`, `total_assets_per_amount`, `financial_assets_total_amount`, `financial_assets_total_per_amount`, `tangible_assets_total_amount`, `tangible_assets_total_per_amount`, `personal_assets_total_amount`, `personal_assets_total_per_amount`, `retirement_assets_total_amount`, `retirement_assets_total_per_amount`, `liabilities_total_amount`, `liabilities_total_per_amount`, `all_assets_total_amount`, `all_assets_total_per_amount`, `net_worth_total_amount`, `net_worth_total_per_amount`, `notes`, `added_on_date`, `added_on_time`) VALUES ('$last_id','$assets_total_amount','$assets_total_per_amount','$financial_assets_total_amount','$financial_assets_total_per_amount','$tangible_assets_total_amount','$tangible_assets_total_per_amount','$personal_assets_total_amount','$personal_assets_total_per_amount','$retirement_assets_total_amount','$retirement_assets_total_per_amount','$liabilities_total_amount','$liabilities_total_per_amount','$all_assets_total_amount','$all_assets_total_per_amount','$net_worth_total_amount','$net_worth_total_per_amount','$notes','$added_on_date','$added_on_time')");

    // 4) cash flow tab
     // income
    for($i=0;$i<count($_POST['income_description']);$i++)
    {
        $personal_detail_id      = $last_id;
        $income_description      = $_POST['income_description'][$i];
        $current_per_income      = $_POST['current_per_income'][$i];
        $current_annualy_income  = $_POST['current_annualy_income'][$i];
        $current_monthly_income  = $_POST['current_monthly_income'][$i];
        $rec_per_income          = $_POST['rec_per_income'][$i];
        $rec_annualy_income      = $_POST['rec_annualy_income'][$i];
        $rec_monthly_income      = $_POST['rec_monthly_income'][$i];

        $sql_income = mysqli_query($conn,"INSERT INTO `income`(`personal_detail_id`, `income_description`, `current_per_income`, `current_annualy_income`, `current_monthly_income`, `rec_per_income`,`rec_annualy_income`, `rec_monthly_income`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$income_description','$current_per_income','$current_annualy_income','$current_monthly_income','$rec_per_income','$rec_annualy_income','$rec_monthly_income','$added_on_date','$added_on_time')");
    }

     // living_expense
    for($i=0;$i<count($_POST['living_expense_description']);$i++)
    {
        $personal_detail_id      = $last_id;
        $living_expense_description      = $_POST['living_expense_description'][$i];
        $current_living_per_expense      = $_POST['current_living_per_expense'][$i];
        $current_annualy_living_expense  = $_POST['current_annualy_living_expense'][$i];
        $current_monthly_living_expense  = $_POST['current_monthly_living_expense'][$i];
        $rec_living_per_expense          = $_POST['rec_living_per_expense'][$i];
        $rec_annualy_living_expense      = $_POST['rec_annualy_living_expense'][$i];
        $rec_monthly_living_expense      = $_POST['rec_monthly_living_expense'][$i];

        $sql_living_expense = mysqli_query($conn,"INSERT INTO `living_expense`(`personal_detail_id`, `living_expense_description`, `current_living_per_expense`, `current_annualy_living_expense`, `current_monthly_living_expense`, `rec_living_per_expense`,`rec_annualy_living_expense`, `rec_monthly_living_expense`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$living_expense_description','$current_living_per_expense','$current_annualy_living_expense','$current_monthly_living_expense','$rec_living_per_expense','$rec_annualy_living_expense','$rec_monthly_living_expense','$added_on_date','$added_on_time')");
    }

     // emi
    for($i=0;$i<count($_POST['emi_description']);$i++)
    {
        $personal_detail_id      = $last_id;
        $emi_description      = $_POST['emi_description'][$i];
        $current_per_emi      = $_POST['current_per_emi'][$i];
        $current_annualy_emi  = $_POST['current_annualy_emi'][$i];
        $current_monthly_emi  = $_POST['current_monthly_emi'][$i];
        $rec_per_emi          = $_POST['rec_per_emi'][$i];
        $rec_annualy_emi      = $_POST['rec_annualy_emi'][$i];
        $rec_monthly_emi      = $_POST['rec_monthly_emi'][$i];

        $sql_emi = mysqli_query($conn,"INSERT INTO `emi`(`personal_detail_id`, `emi_description`, `current_per_emi`, `current_annualy_emi`, `current_monthly_emi`, `rec_per_emi`,`rec_annualy_emi`, `rec_monthly_emi`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$emi_description','$current_per_emi','$current_annualy_emi','$current_monthly_emi','$rec_per_emi','$rec_annualy_emi','$rec_monthly_emi','$added_on_date','$added_on_time')");
    }
     // insurance
    for($i=0;$i<count($_POST['insurance_description']);$i++)
    {
        $personal_detail_id         = $last_id;
        $insurance_description      = $_POST['insurance_description'][$i];
        $current_per_insurance      = $_POST['current_per_insurance'][$i];
        $current_annualy_insurance  = $_POST['current_annualy_insurance'][$i];
        $current_monthly_insurance  = $_POST['current_monthly_insurance'][$i];
        $rec_per_insurance          = $_POST['rec_per_insurance'][$i];
        $rec_annualy_insurance      = $_POST['rec_annualy_insurance'][$i];
        $rec_monthly_insurance      = $_POST['rec_monthly_insurance'][$i];

        $sql_insurance = mysqli_query($conn,"INSERT INTO `insurance`(`personal_detail_id`, `insurance_description`, `current_per_insurance`, `current_annualy_insurance`, `current_monthly_insurance`, `rec_per_insurance`,`rec_annualy_insurance`, `rec_monthly_insurance`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$insurance_description','$current_per_insurance','$current_annualy_insurance','$current_monthly_insurance','$rec_per_insurance','$rec_annualy_insurance','$rec_monthly_insurance','$added_on_date','$added_on_time')");
    }
     // other_exp
    for($i=0;$i<count($_POST['other_exp_description']);$i++)
    {
        $personal_detail_id         = $last_id;
        $other_exp_description      = $_POST['other_exp_description'][$i];
        $current_per_other_exp      = $_POST['current_per_other_exp'][$i];
        $current_annualy_other_exp  = $_POST['current_annualy_other_exp'][$i];
        $current_monthly_other_exp  = $_POST['current_monthly_other_exp'][$i];
        $rec_per_other_exp          = $_POST['rec_per_other_exp'][$i];
        $rec_annualy_other_exp      = $_POST['rec_annualy_other_exp'][$i];
        $rec_monthly_other_exp      = $_POST['rec_monthly_other_exp'][$i];

        $sql_other_exp = mysqli_query($conn,"INSERT INTO `other_expense`(`personal_detail_id`, `other_exp_description`, `current_per_other_exp`, `current_annualy_other_exp`, `current_monthly_other_exp`, `rec_per_other_exp`,`rec_annualy_other_exp`, `rec_monthly_other_exp`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$other_exp_description','$current_per_other_exp','$current_annualy_other_exp','$current_monthly_other_exp','$rec_per_other_exp','$rec_annualy_other_exp','$rec_monthly_other_exp','$added_on_date','$added_on_time')");
    }

    // contribution of emergency fund
        $personal_detail_id          = $last_id;
        $current_total_per_fund      = $_POST['current_total_per_fund'];
        $current_total_annualy_fund  = $_POST['current_total_annualy_fund'];
        $current_total_monthly_fund  = $_POST['current_total_monthly_fund'];
        $rec_total_per_fund          = $_POST['rec_total_per_fund'];
        $rec_total_annualy_fund      = $_POST['rec_total_annualy_fund'];
        $rec_total_monthly_fund      = $_POST['rec_total_monthly_fund'];

        $sql_fund = mysqli_query($conn,"INSERT INTO `contribute_emergency_fund`(`personal_detail_id`, `current_total_per_fund`, `current_total_annualy_fund`, `current_total_monthly_fund`, `rec_total_per_fund`,`rec_total_annualy_fund`, `rec_total_monthly_fund`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$current_total_per_fund','$current_total_annualy_fund','$current_total_monthly_fund','$rec_total_per_fund','$rec_total_annualy_fund','$rec_total_monthly_fund','$added_on_date','$added_on_time')");

     // tax
    for($i=0;$i<count($_POST['tax_description']);$i++)
    {
        $personal_detail_id   = $last_id;
        $tax_description      = $_POST['tax_description'][$i];
        $current_per_tax      = $_POST['current_per_tax'][$i];
        $current_annualy_tax  = $_POST['current_annualy_tax'][$i];
        $current_monthly_tax  = $_POST['current_monthly_tax'][$i];
        $rec_per_tax          = $_POST['rec_per_tax'][$i];
        $rec_annualy_tax      = $_POST['rec_annualy_tax'][$i];
        $rec_monthly_tax      = $_POST['rec_monthly_tax'][$i];

        $sql_tax = mysqli_query($conn,"INSERT INTO `tax`(`personal_detail_id`, `tax_description`, `current_per_tax`, `current_annualy_tax`, `current_monthly_tax`, `rec_per_tax`,`rec_annualy_tax`, `rec_monthly_tax`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$tax_description','$current_per_tax','$current_annualy_tax','$current_monthly_tax','$rec_per_tax','$rec_annualy_tax','$rec_monthly_tax','$added_on_date','$added_on_time')");
    }

     // Excess/Shortage before savings
        $personal_detail_id             = $last_id;
        $current_per_before_saving      = $_POST['current_total_per_before_saving'];
        $current_annualy_before_saving  = $_POST['current_total_annualy_before_saving'];
        $current_monthly_before_saving  = $_POST['current_total_monthly_before_saving'];
        $rec_per_before_saving          = $_POST['rec_total_per_before_saving'];
        $rec_annualy_before_saving      = $_POST['rec_total_annualy_before_saving'];
        $rec_monthly_before_saving      = $_POST['rec_total_monthly_before_saving'];

        $sql_fund = mysqli_query($conn,"INSERT INTO `before_saving`(`personal_detail_id`, `current_per_before_saving`, `current_annualy_before_saving`, `current_monthly_before_saving`, `rec_per_before_saving`,`rec_annualy_before_saving`, `rec_monthly_before_saving`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$current_per_before_saving','$current_annualy_before_saving','$current_monthly_before_saving','$rec_per_before_saving','$rec_annualy_before_saving','$rec_monthly_before_saving','$added_on_date','$added_on_time')");

     // savings
        $personal_detail_id      = $last_id;
        $current_per_saving      = $_POST['current_per_saving'];
        $current_annualy_saving  = $_POST['current_annualy_saving'];
        $current_monthly_saving  = $_POST['current_monthly_saving'];
        $rec_per_saving          = $_POST['rec_per_saving'];
        $rec_annualy_saving      = $_POST['rec_annualy_saving'];
        $rec_monthly_saving      = $_POST['rec_monthly_saving'];

        $sql_fund = mysqli_query($conn,"INSERT INTO `saving`(`personal_detail_id`, `current_per_saving`, `current_annualy_saving`, `current_monthly_saving`, `rec_per_saving`,`rec_annualy_saving`, `rec_monthly_saving`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$current_per_saving','$current_annualy_saving','$current_monthly_saving','$rec_per_saving','$rec_annualy_saving','$rec_monthly_saving','$added_on_date','$added_on_time')");

     // Excess/Shortage after savings
        $personal_detail_id            = $last_id;
        $current_per_after_saving      = $_POST['current_total_per_after_saving'];
        $current_annualy_after_saving  = $_POST['current_total_annualy_after_saving'];
        $current_monthly_after_saving  = $_POST['current_total_monthly_after_saving'];
        $rec_per_after_saving          = $_POST['rec_total_per_after_saving'];
        $rec_annualy_after_saving      = $_POST['rec_total_annualy_after_saving'];
        $rec_monthly_after_saving      = $_POST['rec_total_monthly_after_saving'];

        $sql_fund = mysqli_query($conn,"INSERT INTO `after_saving`(`personal_detail_id`, `current_per_after_saving`, `current_annualy_after_saving`, `current_monthly_after_saving`, `rec_per_after_saving`,`rec_annualy_after_saving`, `rec_monthly_after_saving`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$current_per_after_saving','$current_annualy_after_saving','$current_monthly_after_saving','$rec_per_after_saving','$rec_annualy_after_saving','$rec_monthly_after_saving','$added_on_date','$added_on_time')");

     // contribute_assets
    for($i=0;$i<count($_POST['contribute_assets_description']);$i++)
    {
        $personal_detail_id                 = $last_id;
        $contribute_assets_description      = $_POST['contribute_assets_description'][$i];
        $current_per_contribute_assets      = $_POST['current_per_contribute_assets'][$i];
        $current_annualy_contribute_assets  = $_POST['current_annualy_contribute_assets'][$i];
        $current_monthly_contribute_assets  = $_POST['current_monthly_contribute_assets'][$i];
        $rec_per_contribute_assets          = $_POST['rec_per_contribute_assets'][$i];
        $rec_annualy_contribute_assets      = $_POST['rec_annualy_contribute_assets'][$i];
        $rec_monthly_contribute_assets      = $_POST['rec_monthly_contribute_assets'][$i];

        $sql_contribute_assets = mysqli_query($conn,"INSERT INTO `contribute_assets`(`personal_detail_id`, `contribute_assets_description`, `current_per_contribute_assets`, `current_annualy_contribute_assets`, `current_monthly_contribute_assets`, `rec_per_contribute_assets`,`rec_annualy_contribute_assets`, `rec_monthly_contribute_assets`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$contribute_assets_description','$current_per_contribute_assets','$current_annualy_contribute_assets','$current_monthly_contribute_assets','$rec_per_contribute_assets','$rec_annualy_contribute_assets','$rec_monthly_contribute_assets','$added_on_date','$added_on_time')");
    }

    // cash flow table
    $personal_detail_id                = $last_id;
    $current_total_per_income          = $_POST['current_total_per_income'];
    $current_total_annualy_income      = $_POST['current_total_annualy_income'];
    $current_total_monthly_income      = $_POST['current_total_monthly_income'];
    $rec_total_per_income              = $_POST['rec_total_per_income'];
    $rec_total_annualy_income          = $_POST['rec_total_annualy_income'];
    $rec_total_monthly_income          = $_POST['rec_total_monthly_income'];
    $current_total_per_expense         = $_POST['current_total_per_expense'];
    $current_total_annualy_expense     = $_POST['current_total_annualy_expense'];
    $current_total_monthly_expense     = $_POST['current_total_monthly_expense'];
    $rec_total_per_expense             = $_POST['rec_total_per_expense'];
    $rec_total_annualy_expense         = $_POST['rec_total_annualy_expense'];
    $rec_total_monthly_expense         = $_POST['rec_total_monthly_expense'];
    $current_total_per_emi             = $_POST['current_total_per_emi'];
    $current_total_annualy_emi         = $_POST['current_total_annualy_emi'];
    $current_total_monthly_emi         = $_POST['current_total_monthly_emi'];
    $rec_total_per_emi                 = $_POST['rec_total_per_emi'];
    $rec_total_annualy_emi             = $_POST['rec_total_annualy_emi'];
    $rec_total_monthly_emi             = $_POST['rec_total_monthly_emi'];
    $current_total_per_insurance       = $_POST['current_total_per_insurance'];
    $current_total_annualy_insurance    = $_POST['current_total_annualy_insurance'];
    $current_total_monthly_insurance   = $_POST['current_total_monthly_insurance'];
    $rec_total_per_insurance           = $_POST['rec_total_per_insurance'];
    $rec_total_annualy_insurance       = $_POST['rec_total_annualy_insurance'];
    $rec_total_monthly_insurance       = $_POST['rec_total_monthly_insurance'];
    $current_total_per_other_exp       = $_POST['current_total_per_other_exp'];
    $current_total_annualy_other_exp   = $_POST['current_total_annualy_other_exp'];
    $current_total_monthly_other_exp   = $_POST['current_total_monthly_other_exp'];
    $rec_total_per_other_exp           = $_POST['rec_total_per_other_exp'];
    $rec_total_annualy_other_exp       = $_POST['rec_total_annualy_other_exp'];
    $rec_total_monthly_other_exp       = $_POST['rec_total_monthly_other_exp'];
    $current_total_per_tax             = $_POST['current_total_per_tax'];
    $current_total_annualy_tax         = $_POST['current_total_annualy_tax'];
    $current_total_monthly_tax         = $_POST['current_total_monthly_tax'];
    $rec_total_per_tax                 = $_POST['rec_total_per_tax'];
    $rec_total_annualy_tax             = $_POST['rec_total_annualy_tax'];
    $rec_total_monthly_tax             = $_POST['rec_total_monthly_tax'];
    $current_total_all_per_expense     = $_POST['current_total_all_per_expense'];
    $current_total_all_annualy_expense = $_POST['current_total_all_annualy_expense'];
    $current_total_all_monthly_expense = $_POST['current_total_all_monthly_expense'];
    $rec_total_all_per_expense         = $_POST['rec_total_all_per_expense'];
    $rec_total_all_annualy_expense     = $_POST['rec_total_all_annualy_expense'];
    $rec_total_all_monthly_expense     = $_POST['rec_total_all_monthly_expense'];
    $notes                             = $_POST['notes'];
   

    $sql_cash_flow = mysqli_query($conn,"INSERT INTO `cash_flow`(`personal_detail_id`, `current_total_per_income`, `current_total_annualy_income`, `current_total_monthly_income`, `rec_total_per_income`, `rec_total_annualy_income`, `rec_total_monthly_income`, `current_total_per_expense`, `current_total_annualy_expense`, `current_total_monthly_expense`, `rec_total_per_expense`, `rec_total_annualy_expense`, `rec_total_monthly_expense`, `current_total_per_emi`, `current_total_annualy_emi`, `current_total_monthly_emi`, `rec_total_per_emi`, `rec_total_annualy_emi`, `rec_total_monthly_emi`, `current_total_per_insurance`, `current_total_annualy_insurance`, `current_total_monthly_insurance`, `rec_total_per_insurance`, `rec_total_annualy_insurance`, `rec_total_monthly_insurance`, `current_total_per_other_exp`, `current_total_annualy_other_exp`, `current_total_monthly_other_exp`, `rec_total_per_other_exp`, `rec_total_annualy_other_exp`, `rec_total_monthly_other_exp`, `current_total_per_tax`, `current_total_annualy_tax`, `current_total_monthly_tax`, `rec_total_per_tax`, `rec_total_annualy_tax`, `rec_total_monthly_tax`, `current_total_all_per_expense`, `current_total_all_annualy_expense`, `current_total_all_monthly_expense`, `rec_total_all_per_expense`, `rec_total_all_annualy_expense`, `rec_total_all_monthly_expense`, `notes`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$current_total_per_income','$current_total_annualy_income','$current_total_monthly_income','$rec_total_per_income','$rec_total_annualy_income','$rec_total_monthly_income','$current_total_per_expense','$current_total_annualy_expense','$current_total_monthly_expense','$rec_total_per_expense','$rec_total_annualy_expense','$rec_total_monthly_expense','$current_total_per_emi','$current_total_annualy_emi','$current_total_monthly_emi','$rec_total_per_emi','$rec_total_annualy_emi','$rec_total_monthly_emi','$   current_total_per_insurance','$current_total_annualy_insurance','$current_total_monthly_insurance','$rec_total_per_insurance','$rec_total_annualy_insurance','$rec_total_monthly_insurance','$current_total_per_other_exp','$current_total_annualy_other_exp','$current_total_monthly_other_exp','$rec_total_per_other_exp','$rec_total_annualy_other_exp','$rec_total_monthly_other_exp','$current_total_per_tax','$current_total_annualy_tax','$current_total_monthly_tax','$rec_total_per_tax','$rec_total_annualy_tax','$rec_total_monthly_tax','$current_total_all_per_expense','$current_total_all_annualy_expense','$current_total_all_monthly_expense','$rec_total_all_per_expense','$rec_total_all_annualy_expense','$rec_total_all_monthly_expense','$notes','$added_on_date','$added_on_time')");

    // 5) Emergency fund tab
      // emergency_fund
      $personal_detail_id = $last_id;
      $before_tax         = $_POST['before_tax'];
      $balance            = $_POST['balance'];
      $total_fund_amount  = $_POST['total_fund_amount'];

      $sql_emergency_fund = mysqli_query($conn,"INSERT INTO `emergency_fund`(`personal_detail_id`, `before_tax`, `balance`, `total_fund_amount`, `added_on_date`,`added_on_time`) VALUES ('$personal_detail_id','$before_tax','$balance','$total_fund_amount','$added_on_date','$added_on_time')");

    // emergency_fund_catg
    for($i=0;$i<count($_POST['fund_category']);$i++)
    {
      $personal_detail_id = $last_id;
      $fund_category      = $_POST['fund_category'][$i];
      $fund_amount        = $_POST['fund_amount'][$i];

      $sql_fund_category = mysqli_query($conn,"INSERT INTO `emergency_fund_catg`(`personal_detail_id`, `fund_category`, `fund_amount`, `added_on_date`,`added_on_time`) VALUES ('$personal_detail_id','$fund_category','$fund_amount','$added_on_date','$added_on_time')");
    }

    // 6) Investment planning
    // cur_assets_allocation
    for($i=0;$i<count($_POST['current_class']);$i++)
    {
      $personal_detail_id = $last_id;
      $current_class      = $_POST['current_class'][$i];
      $current_amount     = $_POST['current_amount'][$i];
      $current_per_assets = $_POST['current_per_assets'][$i];

      $sql_current_class = mysqli_query($conn,"INSERT INTO `cur_assets_allocation`(`personal_detail_id`, `current_class`, `current_amount`,`current_per_assets`, `added_on_date`,`added_on_time`) VALUES ('$personal_detail_id','$current_class','$current_amount','$current_per_assets','$added_on_date','$added_on_time')");
    }
     // proposed_assets_allocation
    for($i=0;$i<count($_POST['proposed_class']);$i++)
    {
      $personal_detail_id = $last_id;
      $proposed_class      = $_POST['proposed_class'][$i];
      $proposed_amount     = $_POST['proposed_amount'][$i];
      $proposed_per_assets = $_POST['proposed_per_assets'][$i];

      $sql_proposed_class = mysqli_query($conn,"INSERT INTO `proposed_assets_allocation`(`personal_detail_id`, `proposed_class`, `proposed_amount`,`proposed_per_assets`, `added_on_date`,`added_on_time`) VALUES ('$personal_detail_id','$proposed_class','$proposed_amount','$proposed_per_assets','$added_on_date','$added_on_time')");
    }

      // rep_assets_allocation
    for($i=0;$i<count($_POST['assets_class']);$i++)
    {
      $personal_detail_id = $last_id;
      $assets_class       = $_POST['assets_class'][$i];
      $cur_assets_amount  = $_POST['cur_assets_amount'][$i];
      $cur_per_assets     = $_POST['cur_per_assets'][$i];
      $rec_assets_amount  = $_POST['rec_assets_amount'][$i];
      $rec_per_assets     = $_POST['rec_per_assets'][$i];
      $rep_assets_amount  = $_POST['rep_assets_amount'][$i];
      $rep_per_assets     = $_POST['rep_per_assets'][$i];

      $sql_rep_class = mysqli_query($conn,"INSERT INTO `rep_assets_allocation`(`personal_detail_id`, `assets_class`, `cur_assets_amount`, `cur_per_assets`, `rec_assets_amount`, `rec_per_assets`, `rep_assets_amount`, `rep_per_assets`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$assets_class', '$cur_assets_amount', '$cur_per_assets', '$rec_assets_amount', '$rec_per_assets', '$rep_assets_amount', '$rep_per_assets','$added_on_date','$added_on_time')");
    }

    $personal_detail_id        = $last_id;
    $current_total_amount      = $_POST['current_total_amount'];
    $current_per_total         = $_POST['current_per_total'];
    $current_allocation_notes  = $_POST['current_allocation_notes'];
    $proposed_total_amount     = $_POST['proposed_total_amount'];
    $proposed_per_total        = $_POST['proposed_per_total'];
    $proposed_allocation_notes = $_POST['proposed_allocation_notes'];
    $cur_total_amount          = $_POST['cur_total_amount'];
    $cur_per_total             = $_POST['cur_per_total'];
    $rec_total_amount          = $_POST['rec_total_amount'];
    $rec_per_total             = $_POST['rec_per_total'];
    $rep_total_amount          = $_POST['rep_total_amount'];
    $rep_per_total             = $_POST['rep_per_total'];

    $sql_investment_planning = mysqli_query($conn,"INSERT INTO `investment_planning`(`personal_detail_id`, `current_total_amount`, `current_per_total`, `current_allocation_notes`, `proposed_total_amount`, `proposed_per_total`, `proposed_allocation_notes`, `cur_total_amount`, `cur_per_total`, `rec_total_amount`, `rec_per_total`, `rep_total_amount`, `rep_per_total`, `added_on_date`, `added_on_time`) VALUES('$personal_detail_id', '$current_total_amount', '$current_per_total', '$current_allocation_notes', '$proposed_total_amount', '$proposed_per_total', '$proposed_allocation_notes', '$cur_total_amount', '$cur_per_total', '$rec_total_amount', '$rec_per_total', '$rep_total_amount', '$rep_per_total', '$added_on_date', '$added_on_time')");

    $personal_detail_id    = $last_id;
    $insurance_policy      = $_POST['insurance_policy'];
    $annual_premium        = $_POST['annual_premium'];
    $analysis              = $_POST['analysis'];
    $life_policy           = $_POST['life_policy'];
    $annual_life_insurance = $_POST['annual_life_insurance'];
    
    $sql_protection_planning = mysqli_query($conn,"INSERT INTO `protection_planning`(`personal_detail_id`, `insurance_policy`, `annual_premium`, `analysis`, `life_policy`, `annual_life_insurance`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id', '$insurance_policy', '$annual_premium', '$analysis', '$life_policy', '$annual_life_insurance', '$added_on_date', '$added_on_time')");

    //  8) Goal Planning
    // goal_retirement_observation
    for($i=0;$i<count($_POST['goal_rt_observation']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_rt_observation   = $_POST['goal_rt_observation'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_retirement_observation`(`personal_detail_id`, `goal_rt_observation`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_rt_observation','$added_on_date','$added_on_time')");
    }

    // goal_retirement_analysis
    for($i=0;$i<count($_POST['goal_rt_analysis']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_rt_analysis   = $_POST['goal_rt_analysis'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_retirement_analysis`(`personal_detail_id`, `goal_rt_analysis`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_rt_analysis','$added_on_date','$added_on_time')");
    }

    // goal_retirement_detail
    for($i=0;$i<count($_POST['goal_rt_desc']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_rt_desc       = $_POST['goal_rt_desc'][$i];
      $goal_rt_today         = $_POST['goal_rt_today'][$i];
      $goal_rt_after         = $_POST['goal_rt_after'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_retirement_detail`(`personal_detail_id`, `goal_rt_desc`,`goal_rt_today`,`goal_rt_after`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_rt_desc','$goal_rt_today','$goal_rt_after','$added_on_date','$added_on_time')");
    }

    // goal_retirement_recommendation
    for($i=0;$i<count($_POST['goal_rt_recommendation']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_rt_recommendation       = $_POST['goal_rt_recommendation'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_retirement_recommendation`(`personal_detail_id`, `goal_rt_recommendation`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_rt_recommendation','$added_on_date','$added_on_time')");
    }

     // goal_retirement_funding
    for($i=0;$i<count($_POST['goal_rt_fund']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_rt_fund       = $_POST['goal_rt_fund'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_retirement_funding`(`personal_detail_id`, `goal_rt_fund`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_rt_fund','$added_on_date','$added_on_time')");
    }

     // goal_retirement_desc_amt
    for($i=0;$i<count($_POST['goal_rt_f_desc']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_rt_f_desc     = $_POST['goal_rt_f_desc'][$i];
      $goal_rt_f_amount   = $_POST['goal_rt_f_amount'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_retirement_desc_amt`(`personal_detail_id`, `goal_rt_f_desc`,`goal_rt_f_amount`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_rt_f_desc','$goal_rt_f_amount','$added_on_date','$added_on_time')");
    }

    // goal_retirement
    $personal_detail_id     = $last_id;
    $goal_rt_notes          = $_POST['goal_rt_notes'];
    $goal_rt_f_corpus_fund  = $_POST['goal_rt_f_corpus_fund'];
    $goal_rt_remaining_fund = $_POST['goal_rt_remaining_fund'];
    $goal_rt_const          = $_POST['goal_rt_const'];

    $sql_goal_retirement = mysqli_query($conn,"INSERT INTO `goal_retirement`(`personal_detail_id`, `goal_rt_notes`, `goal_rt_f_corpus_fund`, `goal_rt_remaining_fund`, `goal_rt_const`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_rt_notes','$goal_rt_f_corpus_fund','$goal_rt_remaining_fund','$goal_rt_const','$added_on_date','$added_on_time')");


     // goal_education_observation
    for($i=0;$i<count($_POST['goal_edu_observation']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_edu_observation   = $_POST['goal_edu_observation'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_education_observation`(`personal_detail_id`, `goal_edu_observation`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_edu_observation','$added_on_date','$added_on_time')");
    }
    // goal_education_analysis
    for($i=0;$i<count($_POST['goal_edu_analysis']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_edu_analysis   = $_POST['goal_edu_analysis'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_education_analysis`(`personal_detail_id`, `goal_edu_analysis`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_edu_analysis','$added_on_date','$added_on_time')");
    }

     // goal_education_desc_future
    for($i=0;$i<count($_POST['goal_edu_a_desc']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_edu_a_desc    = $_POST['goal_edu_a_desc'][$i];
      $goal_edu_a_amount  = $_POST['goal_edu_a_amount'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_education_desc_future`(`personal_detail_id`, `goal_edu_a_desc`,`goal_edu_a_amount`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_edu_a_desc','$goal_edu_a_amount','$added_on_date','$added_on_time')");
    }

    // goal_education_recommendation
    for($i=0;$i<count($_POST['goal_edu_recommendation']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_edu_recommendation       = $_POST['goal_edu_recommendation'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_education_recommendation`(`personal_detail_id`, `goal_edu_recommendation`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_edu_recommendation','$added_on_date','$added_on_time')");
    }

    // goal_education_funding
    for($i=0;$i<count($_POST['goal_edu_fund']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_edu_fund      = $_POST['goal_edu_fund'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_education_funding`(`personal_detail_id`, `goal_edu_fund`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_edu_fund','$added_on_date','$added_on_time')");
    }

     // goal_education_desc_amt
    for($i=0;$i<count($_POST['goal_edu_desc']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_edu_desc     = $_POST['goal_edu_desc'][$i];
      $goal_edu_amount   = $_POST['goal_edu_amount'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_education_desc_amt`(`personal_detail_id`, `goal_edu_desc`,`goal_edu_amount`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_edu_desc','$goal_edu_amount','$added_on_date','$added_on_time')");
    }

     // goal_education
    $personal_detail_id     = $last_id;
    $goal_edu_req_amt          = $_POST['goal_edu_req_amt'];
    $goal_edu_rem_fund     = $_POST['goal_edu_rem_fund'];
    $goal_edu_req_investment = $_POST['goal_edu_req_investment'];

    $sql_goal_education = mysqli_query($conn,"INSERT INTO `goal_education`(`personal_detail_id`, `goal_edu_req_amt`, `goal_edu_rem_fund`, `goal_edu_req_investment`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_edu_req_amt','$goal_edu_rem_fund ','$goal_edu_req_investment','$added_on_date','$added_on_time')");

    // goal_marriage_observation
    for($i=0;$i<count($_POST['goal_m_observation']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_m_observation = $_POST['goal_m_observation'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_marriage_observation`(`personal_detail_id`, `goal_m_observation`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_m_observation','$added_on_date','$added_on_time')");
    }
    // goal_marriage_analysis
    for($i=0;$i<count($_POST['goal_m_analysis']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_m_analysis    = $_POST['goal_m_analysis'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_marriage_analysis`(`personal_detail_id`, `goal_m_analysis`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_m_analysis','$added_on_date','$added_on_time')");
    }
     // goal_marriage_amt
    for($i=0;$i<count($_POST['goal_m_a_desc']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_m_a_desc    = $_POST['goal_m_a_desc'][$i];
      $goal_m_amount  = $_POST['goal_m_amount'][$i];
      $goal_m_f_amount  = $_POST['goal_m_f_amount'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_marriage_amt`(`personal_detail_id`, `goal_m_a_desc`,`goal_m_amount`,`goal_m_f_amount`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_m_a_desc','$goal_m_amount','$goal_m_f_amount','$added_on_date','$added_on_time')");
    }

    // goal_marriage_recommendation
    for($i=0;$i<count($_POST['goal_m_recommendation']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_m_recommendation = $_POST['goal_m_recommendation'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_marriage_recommendation`(`personal_detail_id`, `goal_m_recommendation`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_m_recommendation','$added_on_date','$added_on_time')");
    }
    // goal_marriage_funding
    for($i=0;$i<count($_POST['goal_m_fund']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_m_fund        = $_POST['goal_m_fund'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_marriage_funding`(`personal_detail_id`, `goal_m_fund`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_m_fund','$added_on_date','$added_on_time')");
    }

    // goal_marriage_desc_amt
    for($i=0;$i<count($_POST['goal_m_f_g_desc']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_m_f_g_desc     = $_POST['goal_m_f_g_desc'][$i];
      $goal_m_f_g_amount   = $_POST['goal_m_f_g_amount'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_marriage_desc_amt`(`personal_detail_id`, `goal_m_f_g_desc`,`goal_m_f_g_amount`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_m_f_g_desc','$goal_m_f_g_amount','$added_on_date','$added_on_time')");
    }
     // goal_marriage
    $personal_detail_id     = $last_id;
    $goal_m_req_amt          = $_POST['goal_m_req_amt'];
    $goal_m_rem_fund     = $_POST['goal_m_rem_fund'];
    $goal_m_req_investment = $_POST['goal_m_req_investment'];

    $sql_goal_marriage = mysqli_query($conn,"INSERT INTO `goal_marriage`(`personal_detail_id`, `goal_m_req_amt`, `goal_m_rem_fund`, `goal_m_req_investment`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_m_req_amt','$goal_m_rem_fund','$goal_m_req_investment','$added_on_date','$added_on_time')");

    // goal_charity
    for($i=0;$i<count($_POST['goal_c_gift']);$i++)
    {
      $personal_detail_id = $last_id;
      $goal_c_gift      = $_POST['goal_c_gift'][$i];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_charity`(`personal_detail_id`, `goal_c_gift`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_c_gift','$added_on_date','$added_on_time')");
    }

    // goal_charity_analysis
    
      $personal_detail_id = $last_id;
      $goal_c_analysis      = $_POST['goal_c_analysis'];

      $sql_rt_observation = mysqli_query($conn,"INSERT INTO `goal_charity_analysis`(`personal_detail_id`, `goal_c_analysis`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$goal_c_analysis','$added_on_date','$added_on_time')");
    

    // 9) Funding for goals
    // allocated_fund
    for($i=0;$i<count($_POST['fund_description']);$i++)
    {
      $personal_detail_id = $last_id;
      $fund_description   = $_POST['fund_description'][$i];
      $annual_fund        = $_POST['annual_fund'][$i];
      $monthly_fund       = $_POST['monthly_fund'][$i];

      $sql_allocated_fund = mysqli_query($conn,"INSERT INTO `allocated_fund`(`personal_detail_id`, `fund_description`, `annual_fund`, `monthly_fund`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id','$fund_description', '$annual_fund', '$monthly_fund','$added_on_date','$added_on_time')");
    }

    // fund_for_goals
    $personal_detail_id     = $last_id;
    $annual_income_surplus  = $_POST['annual_income_surplus'];
    $monthly_income_surplus = $_POST['monthly_income_surplus'];
    $total_annual_fund      = $_POST['total_annual_fund'];
    $total_monthly_fund     = $_POST['total_monthly_fund'];
    $access_annual_fund     = $_POST['access_annual_fund'];
    $access_monthly_fund    = $_POST['access_monthly_fund'];

    $sql_fund_goal = mysqli_query($conn,"INSERT INTO `fund_for_goals`(`personal_detail_id`, `annual_income_surplus`, `monthly_income_surplus`, `total_annual_fund`, `total_monthly_fund`, `access_annual_fund`, `access_monthly_fund`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id', '$annual_income_surplus', '$monthly_income_surplus', '$total_annual_fund', '$total_monthly_fund', '$access_annual_fund', '$access_monthly_fund', '$added_on_date', '$added_on_time')");

    // 11) annexure 1
    // annexure_1
    for($i=0;$i<count($_POST['p_nominee']);$i++)
    {
        $personal_detail_id = $last_id;
        $p_nominee          = $_POST['p_nominee'][$i];
        $insurer            = $_POST['insurer'][$i];
        $b_p_type           = $_POST['b_p_type'][$i];
        $t_ppt              = $_POST['t_ppt'][$i];
        $s_a_guaranteed     = $_POST['s_a_guaranteed'][$i];
        $m_of_payment       = $_POST['m_of_payment'][$i];
        $y_of_maturity      = $_POST['y_of_maturity'][$i];

        $sql_annexure_1 = mysqli_query($conn,"INSERT INTO `annexure_1`(`personal_detail_id`, `p_nominee`, `insurer`, `b_p_type`, `t_ppt`, `s_a_guaranteed`, `m_of_payment`, `y_of_maturity`, `added_on_date`, `added_on_time`) VALUES ('$personal_detail_id', '$p_nominee', '$insurer', '$b_p_type', '$t_ppt', '$s_a_guaranteed', '$m_of_payment', '$y_of_maturity', '$added_on_date', '$added_on_time')");
    }

    // 12) Annexure 2
    // annexure_2
    for($i=0;$i<count($_POST['a_detail']);$i++)
    {
        $personal_detail_id   = $last_id;
        $a_detail             = $_POST['a_detail'][$i];
        $a_amount             = $_POST['a_amount'][$i];
        $present_value        = $_POST['present_value'];
        $less_present_value   = $_POST['less_present_value'];
        $additional_insurance = $_POST['additional_insurance'];
    
        $sql_annexure_2 = mysqli_query($conn,"INSERT INTO `annexure_2`(`personal_detail_id`, `a_detail`, `a_amount`, `present_value`, `less_present_value`, `additional_insurance`, `added_on_date`, `added_on_time`) VALUES  ('$personal_detail_id', '$a_detail', '$a_amount', '$present_value', '$less_present_value', '$additional_insurance','$added_on_date', '$added_on_time')");
    }


    if($sql_person && $sql_family && $sql_financial_goal && $sql_goal_detail && $sql_assumption && $sql_net_worth_assets && $sql_financial_assets && $sql_tangible_assets && $sql_personal_assets && $sql_retirement_assets && $sql_liabilities && $sql_net_worth)
    {
        $_SESSION['action']=1;
        $_SESSION['action_message'] = '<div class="alert alert-success" id="success-alert" role="alert"><center><strong>Well Done!</strong> Succesfully Inserted</center></div>';
       echo "<script>window.location.href='personal_details.php'</script>";
    }
    else
    {
        $_SESSION['action']=2;
        // $_SESSION['action_message'] = "Error:".mysqli_error($conn);
        $_SESSION['action_message'] = '<div class="alert alert-danger" id="danger-alert" role="alert"><center><strong>Error: '.mysqli_error($conn).'</center></div>';
         echo "<script>window.location.href='personal_details.php'</script>";
    }
}
else
{
    $_SESSION['action']=1;
    $_SESSION['action_message'] = '<div class="alert alert-danger" id="danger-alert" role="alert"><center><strong>Please fill the form first...!</center></div>';
    echo "<script>window.location.href='personal_details.php'</script>";
}
?>