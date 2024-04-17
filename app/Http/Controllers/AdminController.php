<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repos\AdminRepo;
use App\Repos\Repository\TestRepository;
use App\Models\Test;

class AdminController extends Controller
{
    private $repo;

    public function __construct(AdminRepo $repo,TestRepository $tests){

        $this->repo = $repo;
        $this->tests =$tests;
    }
    public function dashboard()
    {
        return view('Admin.dashboard');
    }
    public function manageAdmin()
    {
        return view('Admin.AdminPages.adminManage');
    }
    public function profile()
    {
        return view('Admin.AdminPages.profile');
    }
    public function ManageUser()
    {
        $UserDetails = $this->repo->getAllUser('User');
        return view('Admin.AdminPages.userManage')->with('UserDetails',$UserDetails);
    }
    public function ManageTeachers()
    {
        $UserDetails = $this->repo->getAllUser('Teacher');
        return view('Admin.AdminPages.teacherManage')->with('UserDetails',$UserDetails);
    }
    public function ManageCourses()
    {
        return view('Admin.AdminPages.courseManage');
    }
    public function ManageMoments()
    {
        return view('Admin.AdminPages.momentManage');
    }
    public function ManageGroups()
    {
        return view('Admin.AdminPages.groupManage');
    }

    public function ManageTests()
    {
        $TestDetails = $this->tests->tests();
        return view('Admin.AdminPages.proficiencyTest')->with('TestDetails',$TestDetails);
    }
    public function ManageTestQuestion(Test $test)
    {
        $TestDetails = $this->tests->insideTest($test->id);
        $TestQuestions = $this->tests->testQuestions();
        // dd($TestQuestions);
        return view('Admin.AdminPages.testQuestions',compact('TestDetails','TestQuestions'));
    }
}
