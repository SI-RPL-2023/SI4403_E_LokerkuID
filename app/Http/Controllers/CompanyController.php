<?php

namespace App\Http\Controllers;

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
}
