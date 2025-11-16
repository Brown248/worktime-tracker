<?php
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    header('Location: ../public/login.php');
    exit;}

if (!isset($_SESSION['role']) || !isset($_SESSION['role'])) {
    header('Location: ../public/login.php');
    exit;}
?>