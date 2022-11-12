<?php
session_start();
session_destroy();
header('Location:first.php?msg=Logged Out Successfully');
?>