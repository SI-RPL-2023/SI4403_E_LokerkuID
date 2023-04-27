<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminManagement()
    {
        return view('admin.AdminIndex');
=======
use App\Models\Article;
use App\Models\JobRecruitment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function article()
    {
        return view('admin.AdminArticle');
    }
    public function store(Request $request)
    {
        Article::create($request->except(['_token','save']));
        return redirect('admin/articlemanagement');
    }
    public function articlemanagement()
    {
        $data = Article::all()->where('publisher','=',Auth::user()->name);
        $data2 = Article::all();
        return view('admin.AdminArticleManagement',compact(['data','data2']));
>>>>>>> origin/sule
    }
}
