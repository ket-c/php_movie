<?php
//include admin repositories class so that this file  can have access to it
include_once '../../repositories/AdminRepositoryClass.php';

//using namespace defined in ../../repositories/AdminRepositoryClass.php
use respositiories\AdminRepositoryClass;

//open or resume session
session_start();
//redirect to login page if session id does not exist
if(!isset($_SESSION['loggedin_id'])){
    header("Location: ../../index.php");
}

//instatiate new object from admin repositories class so that we can use its codes
$dataRepo = new AdminRepositoryClass();
//get logged id from session
$id = $_SESSION['loggedin_id'];
//get admin data and assign it to variable
$adminData = $dataRepo->fetchAdmin($id);
