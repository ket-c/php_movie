<?php
session_start();
if(isset($_SESSION['loggedin_id'])){
    header('Location: ui/account/dashboard.php');
} else{
    include_once 'ui/account/login.php';
}