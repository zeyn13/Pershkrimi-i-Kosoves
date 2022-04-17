<?php
require_once './controllers/menucontroller.php';

?>



<div>

    <?php
  $products = new menucontroller;
  $all = $products->readData();
 for($i = 0; $i < count($all); $i++){
     echo '<div>
     <div>
     <img src="' .$all[$i]['menu_image'] .'">
     </div>

     <div>
        <h5>' .$all[$i]['menu_title']. '<h5>
        <p>' .$all[$i]['menu_body']. '<p>
     </div>
    
     </div>';
 }
     ?>
     
</div>