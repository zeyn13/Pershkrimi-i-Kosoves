<?php
require_once '../config/database.php';

class menucontroller{
    public $db;

    public function __construct(){
        $this->db = new database;
    }
    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from menu');

        return $query->fetchAll();
    }
    
    //Metoda Insert
    public function insert($request){
        $request['image'] = './img/' .$request['image'];
    

        $query = $this->db->pdo->prepare('INSERT INTO menu (menu_image, menu_title, menu_body)
        VALUES (:menu_image, :menu_title, :menu_body)');

        $query->bindParam(':menu_image', $request['image']);
        $query->bindParam(':menu_title', $request['title']);
        $query->bindParam(':menu_body', $request['body']);
        $query->execute();

        return header('Location: menudashboard.php');
    }
  //edit
  public function edit($id){
    $query = $this->db->pdo->prepare('SELECT * FROM menu WHERE id = :id');
    $query->bindParam(':id', $id);
    $query->execute();

    return $query->fetch();
}
public function update($request, $id){
   $query = $this->db->pdo->prepare('UPDATE menu SET menu_image = :menu_image, menu_title = :menu_title, 
   menu_body = :menu_body WHERE id = :id');
   $query->bindParam(':menu_image', $request['image']);
   $query->bindParam(':menu_title', $request['title']);
   $query->bindParam(':menu_body', $request['body']);
   $query->bindParam(':id', $id);
   $query->execute();

   return header('Location: menudashboard.php');
}

public function delete($id){
   $query = $this->db->pdo->prepare('DELETE from menu WHERE id=:id');
   $query->bindParam(':id', $id);
   $query->execute();

   return header ("Location: menudashboard.php");
}
       
}


?>