<?php 
namespace App\Repos\Interfaces;


interface ProfileInterface 
 {

    public function allCategories();
    public function storeCategory($data);
    public function findCategory($id);
    public function updateCategory($data, $id); 
    public function destroyCategory($id);
    

 }
?>