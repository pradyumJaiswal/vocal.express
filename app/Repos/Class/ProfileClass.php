<?php 
namespace App\Repos\class;
use App\Repos\Interfaces\ProfileInterface;
use App\Models\User;
use App\Models\Profile;

class AdminRepo implements AdminRepoInterface {


// ----------------------------------------   Profile Function   ----------------------------------//
    
v
    

    public function storeProfile($data)
    {
        return Category::create($data);
    }

    

    public function updateCategory($data, $id)
    {
        $category = Category::where('id', $id)->first();
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->save();
    }

    public function destroyCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
    }
}





?>

