<?php

namespace App\Http\Controllers;

use App\Models\ApplyJob;
use App\Models\Article;
use App\Models\JobRecruitment;
use App\Models\Training;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function findjob(Request $request)
    {
        if($request->has('search')){
            $job= JobRecruitment::where('jobname','LIKE','%'.$request->search.'%')->where('status','=','ongoing')->get();
            return view('user.UserFindJob',compact(['job']));
        }elseif($request->has('location')){
            $job= Jobrecruitment::where('city','LIKE','%'.$request->location.'%')->where('status','=','ongoing')->get();
            return view('user.UserFindJob',compact(['job']));
        }elseif($request->has('type')){
            $job= Jobrecruitment::where('type','LIKE','%'.$request->type.'%')->where('status','=','ongoing')->get();
            return view('user.UserFindJob',compact(['job']));
        }elseif($request->has('remote')){
            $job= Jobrecruitment::where('remoteworking','LIKE','%'.$request->remote.'%')->where('status','=','ongoing')->get();
            return view('user.UserFindJob',compact(['job']));
        }elseif($request->has('experience')){
            $job= Jobrecruitment::where('experience','LIKE','%'.$request->experience.'%')->where('status','=','ongoing')->get();
            return view('user.UserFindJob',compact(['job']));
        }else{

            $job = Jobrecruitment::all()->where('status','=','ongoing');
            return view('user.UserFindJob',compact(['job']));
        }
    }

    public function show(){
        $job = Jobrecruitment::all()->where('status','=','ongoing');
        return view('user.home',compact(['job']));
    }

    public function jobdetail($id)
    {
        $data = JobRecruitment::find($id);
        return view('user.UserJobdetail', compact(['data']));
    }

    public function applyjob($id)
    {
        $data = JobRecruitment::find($id);
        return view('user.UserApplicant', compact(['data']));

    }

    public function StoreData(Request $request)
    {
        $storedata = new ApplyJob;
        $storedata->fullname = $request->fullname;
        $storedata->email = $request->email;
        $storedata->phone = $request->phone;
        $storedata->address = $request->address;
        $storedata->coverletter = $request->coverletter;
        $storedata->jobID = $request->jobID;
        $storedata->recruiter = $request->recruiter;
        $storedata->status = $request->status;

        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('resumes'), $filename);
            $storedata->resume = $filename;
        }
        $storedata->save();
        return redirect('/findjob')->with('success', 'Your application has been submitted!');;
    }
    public function training(Request $request)
    {
        $data = Training::where('trainingname','LIKE','%'.$request->search.'%')->get();
        return view('user.UserTraining',compact(['data']));
    }
    public function detailtraining($id)
    {
        $data = Training::find($id);
        return view('user.UserDetailTraining', compact(['data']));
    }
    public function article(Request $request)
    {
        $article = Article::where('title','LIKE','%'.$request->search.'%')->get();
        return view('user.UserArticle',compact(['article']));
    }
    public function readarticle($id)
    {
        $data = Article::find($id);
        return view('user.UserReadArticle',compact(['data']));
    }
}
