<?php
session_start();
session_unset();
session_destroy();
$_SESSION = [];
header("Location: fitflow_store.php");
exit();
?>