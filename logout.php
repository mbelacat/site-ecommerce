
<?php
session_destroy();
session_unset();
$_SESSION = array();
header("Location: index.php");
exit;
?>
