<?php
session_start();
if(isset($_SESSION['loggedin_id'])){
    header('Location: ui/account/dashboard.php');
} else{
    header('Location: ui/account/login.php');
}

