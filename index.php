<?php
ob_start();
include_once("c_userList.php");
$controller = new c_userList();
if (isset($_GET['del'])) {
    $controller->delete($_GET['del']);
} else if (isset($_GET['edit'])) {
    $controller->viewEdit($_GET['edit']);
} else {
    $controller->invoke();
}
ob_end_flush();
