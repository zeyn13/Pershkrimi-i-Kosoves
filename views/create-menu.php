<?php
require_once '../controllers/menucontroller.php';

$menu = new menucontroller;
if(isset($_POST['submit'])){
    $menu->insert($_POST);
}
?>




<div>
    <form method="POST">
        Image:
        <input type="file" name="image">
        <br>
        Title:
        <input type="text" name="title">
        <br>
        Content:
        <textarea name="body" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" name="submit" valvue="Save">
    </form>
</div>