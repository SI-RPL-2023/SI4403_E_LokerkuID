<?php

namespace App\Http\Controllers;

use App\Models\ApplyJob;
use App\Models\Article;
use App\Models\JobRecruitment;
use App\Models\Training;
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
        return redirect('company/home');
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/sule
        return redirect('company/articlemanagement');
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
<<<<<<< HEAD
=======
        return redirect('company.CompanyArticle');
>>>>>>> origin/Rafie
=======
>>>>>>> origin/sule
    }
    public function edit($id)
    {
        $data =Jobrecruitment::find($id);
        return view('company.CompanyEditRecruitment',compact(['data']));
        dd($data);
    }
    public function update($id, Request $request)
    {
        $data =Jobrecruitment::find($id);
        $data->update($request->except(['_token','submit']));
        return redirect('company/home');
    }
    public function close($id, Request $request)
    {
        $data =Jobrecruitment::find($id);
        $data->update($request->except(['_token','_method','_method','jobname','city','salary','type','remoteworking','desc','submit']));
        return redirect('company/home');
    }
    public function delete($id)
    {
        $data =Jobrecruitment::find($id);
        $data->delete();
        return redirect('company/home');
    }
    public function training()
    {
        return view('company.CompanyTraining');
    }
    public function StoreTraining(Request $request)
    {
        Training::create($request->except(['_token','save']));
        return redirect('company/trainingmanagement');
    }
    public function trainingmanagement()
    {
        $data = Training::all()->where('trainer','=',Auth::user()->name);
        return view('company.CompanyTrainingManagement',compact(['data']));
    }
    public function deletetraining($id)
    {
        $data = Training::find($id);
        $data->delete();
        return redirect('company/trainingmanagement');
    }
}
