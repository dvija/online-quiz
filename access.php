<?php
session_start();
if($_SESSION['access']!=1) header('Location: welcome.html');
?>