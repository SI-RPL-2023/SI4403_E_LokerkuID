<?php

namespace App\Http\Controllers;

use App\Models\JobRecruitment;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function UserManagement()
    {
        $data =User::all()->where('level','=',2);
        $com =User::all()->where('level','=',1);
        return view('admin.AdminIndex',compact(['data','com']));
    }
    public function delete($id)
    {
        $data =User::find($id);
        $data->delete();
        return redirect('/admin');
    }
    public function jobmanagement()
    {
        $data =JobRecruitment::all();
        return view('admin.AdminJobManagement',compact('data'));
    }
    public function deletejob($id)
    {
        $data =Jobrecruitment::find($id);
        $data->delete();
        return redirect('admin/jobmanagement');
    }
}
