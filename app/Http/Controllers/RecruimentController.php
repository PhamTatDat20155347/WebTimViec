<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Post;
use App\Cv;
use App\Recruitment;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builde;
use Illuminate\Support\Facades\Auth; // phải có lớp này mới có thể sử dụng để đăng nhập
class RecruimentController extends Controller
{
    //
	public function danhsachcv(){
		$userid = Auth::user()->id;
		$recruitment = Recruitment::where('user','=',$userid)->get();
		return view('nhatuyendung.pages.danhsachcv',['recruitment'=>$recruitment]);

	}

	public function xemcv($id){
		$cv = Cv::find($id);
		return view('nhatuyendung.pages.xemcv',['cv'=>$cv]);
	}
	public function chapnhancv($iduser,$idcv){

	}
}
