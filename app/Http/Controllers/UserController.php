<?php

namespace App\Http\Controllers;

use App\Models\JobRecruitment;
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
}
