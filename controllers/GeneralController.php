<?php
include __DIR__.'/AdminControllerClass.php';
use controllers\AdminControllerClass;

/*
Admin
*/
if (isset($_POST['update_admin'])) {
    $adminCon = new AdminControllerClass();
    $adminCon->triggerUpdateAdmin();
}

if (isset($_POST['admin_new_account'])) {
    $adminCon = new AdminControllerClass();
    $adminCon->triggerNewAdmin();
}
if (isset($_POST['admin_login'])) {
    $adminCon = new AdminControllerClass();
    $adminCon->triggerLogin();
}
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'logout') {
        session_start();
        unset($_SESSION['loggedin_id']);
        session_destroy();
        header('Location: ../index.php');
    }
}
