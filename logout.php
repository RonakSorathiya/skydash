<?php
session_start();
include("connection.php");
$_SESSION['signin']=="";
session_unset();
session_destroy();

?>
<script language="javascript">
document.location="index.php";
</script>
