<?php

namespace App\Http\Controllers;

use App\Models\ApplyJob;
use App\Models\Article;
use App\Models\JobRecruitment;
use App\Models\Training;
use App\Models\TrainingParticipant;
use App\Models\User;
use Dflydev\DotAccessData\Data;
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
        return redirect('company.CompanyArticle');
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
        // dd($request);
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
    public function profile()
    {
        return view('company.CompanyProfile');
    }
    public function editprofile()
    {
        return view('company.CompanyEditProfile');
    }
    public function updateprofile($id, Request $request)
    {
        $data =User::find($id);
        $data->update($request->except(['_method','_token','submit']));
        return redirect('company/profile');
    }
    public function DetailApplicant($id)
    {
        $data =ApplyJob::find($id);
        return view('company.CompanyDetailApplicant',compact(['data']));
    }
    public function AccApplicant($id, Request $request)
    {
        $data = ApplyJob::find($id);
        $data->update($request->except('_method','_token','submit'));
        return view("company.CompanyInterview");
    }
    public function viewtraining($id)
    {
        $data = Training::find($id);
        $dat = $data['trainingname'];
        $data1 = TrainingParticipant::all()->where('trainer','=',Auth::user()->name)->where("trainingname", '=', $dat);
        return view('company.CompanyViewTraining', compact(['data1','data']));
    }
    public function certificate($id)
    {
        $data = TrainingParticipant::find($id);
        return view('company.CompanyCertification', compact(['data']));
    }
    public function postcertificate($id, Request $request)
    {

    $storedata = TrainingParticipant::find($id);
    $storedata->certificate = $request->certificate;

    if ($request->hasFile('certificate')) {
        $file = $request->file('certificate');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->store(public_path('certificates'), $filename);
        $storedata->certificate = $filename; // Update the certificate field, not the resume field
    }
    $storedata->save();
    return redirect("company/trainingmanagement");
    }
    function history() {
        $data = JobRecruitment::all()
        ->where('recruiter','=',Auth::user()->name)
        ->where('status','=','close');
        // dd($data);
        return view('company.CompanyHistory', compact(['data']));
    }
    function interview(Request $request, $id)
    {
        $date = $request['schedule'];
        $data = ApplyJob::find($id);
        $data->interviewdate = $date;
        $data->save();
        return redirect('company/reviewapplicants');
        // dd($date);
    }
}
