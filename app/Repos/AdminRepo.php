<?php 
namespace App\Repos;
use App\Repos\Interfaces\AdminRepoInterface;
use App\Models\User;

class AdminRepo implements AdminRepoInterface {


// ----------------------------------------   User Function   ----------------------------------//
    public function getAllUser($type)
    {
      return User::where('role',$type)->get();
      
    
    }



// ----------------------------------------   Teacher Function  ----------------------------------//
    // public function getAllTeacher()
    // {
    //   return User::where('role','Teacher')->get();
    // }

}
?>