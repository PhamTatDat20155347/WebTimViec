<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cv;
use App\Recruitment;
use App\Notifications\NotificationUser;
use Illuminate\Support\Facades\Auth; // phải có lớp này mới có thể sử dụng để đăng nhập
class UserController extends Controller
{
	public function index()
	{
		$user = User::find(1);
		$user->notify(new NotificationUser());
	}
    //
	public function getdanhsach(){
		if(Auth::user()){
			if(Auth::user()->quyen==2){
				$user = User::all();
				return view('admin.user.danhsach',['user'=>$user]);
			}else{
				return view('admin.dangnhap');
			}
		}else{
			return view('admin.dangnhap');
		}


	}
	public function getThem(){
		return view('admin.user.them');
	}

	public function postThem(Request $request){
		$this->validate($request,
			[
				'username' => 'required|min:3',
				'email' => 'required|email|unique:users,email',
				'password'=>'required|min:3|max:32',
				'passwordAgain' =>'required|same:password',
			],
			[
				'username.required' => 'Bạn chưa nhập tên người dùng',
				'username.min' => 'Tên người dùng phải có ít nhất 3 kí tự',
				'email.required' => 'Bạn chưa nhập vào địa chỉ email',
				'email.email' =>'Bạn chưa nhập đúng định dạng email',
				'email.unique' =>'Email đã tồn tại',
				'password.required' => 'Bạn chưa nhập mật khẩu',
				'password.min' => 'Mật khẩu phải có ít nhất 3 kí tự',
				'password.max' => 'Mật khẩu chỉ được phép tối đa 32 kí tự',
				'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
				'passwordAgain.same' => 'Mật khẩu nhập lại chưa đúng'
			]);
		$user = new User;
		$user->username = $request->username;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->fullname = $request->fullname;
		$user->quyen = $request->quyen;

		$user->save();
		$request->session()->flash('thongbao', 'Bạn đã thêm thành công!');
		return redirect('admin/user/them');
	}


	// sửa
	public function getSua($id){
		$user = User::find($id);
		return view('admin.user.sua',['user'=>$user]);
	}

	public function postSua(Request $request,$id){
		$this->validate($request,
			[
				'username' => 'required|min:3'
			],
			[
				'username.required' => 'Bạn chưa nhập tên người dùng',
				'username.min' => 'Tên người dùng phải có ít nhất 3 kí tự'
			]);
		$user = User::find($id);
		$user->username = $request->username;
		$user->email = $request->email;

		$user->fullname = $request->fullname;


		if($request->changePassword == "on"){
			$this->validate($request,
				[
					'password'=>'required|min:3|max:32',
					'passwordAgain' =>'required|same:password'
				],
				[
					'password.required' => 'Bạn chưa nhập mật khẩu',
					'password.min' => 'Mật khẩu phải có ít nhất 3 kí tự',
					'password.max' => 'Mật khẩu chỉ được phép tối đa 32 kí tự',
					'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
					'passwordAgain.same' => 'Mật khẩu nhập lại chưa đúng'
				]);
			$user->password = bcrypt($request->password);
		}
		$user->quyen = $request->quyen;

		$user->save();
		$request->session()->flash('thongbao', 'Bạn đã sửa thành công!');
		return redirect('admin/user/sua/'.$id);
	}


	// xóa
	public function getXoa(Request $request,$id){
		$user = User::find($id);
		// dd($id);
		// if($user->quyen==0){
		// 	 $user->quyen;
		//  	dd($cv = Cv::where('users_id',$id)->get());
		//  	echo  $cv->id;

		$user->delete();
		$request->session()->flash('thongbao','Xóa thành công!');
		return redirect('admin/user/danhsach');
		// }else{
		// 	$request->session()->flash('loi','Xóa không thành công!');
		// 	return redirect('admin/user/danhsach');
		// 	}

	}


	// admin
	public function getdangnhapAdmin(){
		return view('admin.dangnhap');
	}
	public function postdangnhapAdmin(Request $request){
		$this->validate($request,
			[
				'email' =>'required',
				'password'=>'required|min:3|max:32'
			],
			[
				'email.required' => 'Bạn chưa nhập email',
				'password.required' => 'Bạn chưa nhập password',
				'password.min' => 'Password không được nhỏ hơn 3 kí tự',
				'password.max' =>'Password không được lớn hơn 32 kí tự'
			]);
		$data = ['email'=>$request->email,'password'=>$request->password,'quyen'=>2];
		// kiểm tra đăng nhập
		if(Auth::attempt($data)){
			return redirect('admin/user/danhsach');
		}else{
			return view('admin.dangnhap');
		}
	}
	public function getDangXuatAdmin(){
		Auth::logout();
		return redirect('admin/dangnhap');
	}
}
