<?php
session_start();
session_unset();
session_destroy();
header("Location: fitflow_store.php");
exit();
?>