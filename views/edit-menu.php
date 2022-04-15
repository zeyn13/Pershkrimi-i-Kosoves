<?php
require_once '../controllers/menucontroller.php';
if(isset($_GET['id'])){
    $menuid = $_GET['id'];
}

$menu = new menucontroller;
$currenmenu = $menu->edit($menuid);

if(isset($_POST['submit'])){
  $menu->update($_POST, $menuid);

}

?>


<form method="post">
    Image:
    <input type="file" name="image" value="<?php echo $currenmenu['menu_image']; ?>">
    <br>
    Title:
    <input type="text" name="title" value="<?php echo $currenmenu['menu_title']; ?>">
    <br>
    Body:
    <input type="text" name="body" value="<?php echo $currenmenu['menu_body']; ?>">
    <br>
    <input type="submit" name="submit" valvue="update">
</form>