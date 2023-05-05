<?php
@include 'config.php';
session_start();
session_reset();
header('location:login_form.php')
?>