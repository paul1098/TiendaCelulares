<?php

session_start();
session_destroy();
header("location: cs.php");
exit();
?>