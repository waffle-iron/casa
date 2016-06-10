<?php
include 'session.php';
// session_destroy();
session_unset();
session_destroy();
header("Location:index");




?>