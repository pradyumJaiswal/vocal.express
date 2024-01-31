<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repos\AdminRepo;
class AdminController extends Controller
{
    private $repo;

    public function __construct(AdminRepo $repo){

        $this->repo = $repo;
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
    
   
}
