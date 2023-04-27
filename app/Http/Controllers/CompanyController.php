<?php

namespace App\Http\Controllers;

use App\Models\ApplyJob;
use App\Models\Article;
use App\Models\JobRecruitment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function CompanyManagement(){
        $data = JobRecruitment::select('*')
        ->where('recruiter','=',Auth::user()->name)
        ->where('status','=','ongoing')
        ->get();
        return view('company.CompanyIndex',compact(['data']));
    }

    public function CompanyRecruitment(){
        return view('company.CompanyRecruitment');
    }

    public function StoreData(Request $request){
        JobRecruitment::create($request->except(['_token','save']));
        return redirect('/company');
    }
    public function ReviewApplicants()
    {
        $data = ApplyJob::select('*')
        ->where('recruiter','=',Auth::user()->name)->get();
        // dd($data);
        return view('company.CompanyReviewApplicant',compact(['data']));
    }
    public function WriteArticle()
    {
        return view('company.CompanyArticle');
    }
    public function PostArticle(Request $request)
    {
        $data = Article::create($request->except(['_token','save']));
        // dd($data);
        return redirect('company.CompanyArticleManagement');
    }
    public function articlemanagement()
    {
        $data = Article::all()->where('publisher','=',Auth::user()->name);
        return view('company.CompanyArticleManagement',compact(['data']));
    }
    public function deletearticle($id)
    {
        $data = Article::find($id);
        $data->delete();
        return redirect('company/articlemanagement');
    }
}
