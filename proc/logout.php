<?php
session_start();
session_destroy();
header("location: to/toindex.php");
?>