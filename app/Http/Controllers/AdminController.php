<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
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
        return view('Admin.AdminPages.userManage');
    }
    public function ManageTeachers()
    {
        return view('Admin.AdminPages.teacherManage');
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
