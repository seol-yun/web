<?php
session_start();
session_unset();
session_destroy();
echo "<script src = 'logout.js'></script>";
 ?>
