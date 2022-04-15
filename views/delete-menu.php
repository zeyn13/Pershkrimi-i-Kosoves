<?php
require_once '../controllers/menucontroller.php';
if(isset($_GET['id'])){
    $menuid = $_GET['id'];
}

$menu = new menucontroller;
$menu->delete($menuid);



?>