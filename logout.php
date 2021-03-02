<?php

sesson_start();
session_destroy();
header("location:../admin/login.php");

?>