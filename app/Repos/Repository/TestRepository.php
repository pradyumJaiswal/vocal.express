<?php
namespace App\Repos\Repository;
use App\Repos\Interfaces\TestInterface;
use App\Models\Test;
use App\Models\Question;


class TestRepository implements TestInterface {


// ----------------------------------------  Function   ----------------------------------//
    public function tests()
    {
      return Test::all();
    }

    public function insideTest($id)
    {
      return Test::where('id', $id)->first();
    }

    public function testQuestions()
    {
      return Test::with('questions')->latest()->paginate(10);
    }




}
?>
