<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

use App\Repos\Interfaces\ProfileInterface;

class ProfileController extends Controller
{
    private $ProfileRepository;

    public function __construct(ProfileInterface $ProfileRepository)
    {
        $this->$ProfileRepository = $ProfileRepository;
    }

    // public function index()
    // {
    //     $Profile =  $this->$ProfileRepository->allCategories();

    //     return view('', compact('profile'));
    // }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
        ]);

        $this->ProfileClass->storeCategory($data);

        return redirect()->route('categories.index')->with('message', 'Category Created Successfully');
    }

    

    public function edit($id)
    {
        $category = $this->ProfileClass->findCategory($id);

        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
        ]);

        $this->ProfileClass->updateProfile($request->all(), $id);

        return redirect()->route('categories.index')->with('message', 'Category Updated Successfully');
    }

    public function destroy($id)
    {
        $this->ProfileClass->destroyProfile($id);

        return redirect()->route('categories.index')->with('status', 'Category Delete Successfully');
    }


}
