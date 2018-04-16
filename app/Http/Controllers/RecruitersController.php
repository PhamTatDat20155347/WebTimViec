<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Post;
use App\Notifications\NotificationUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builde;
use Illuminate\Support\Facades\Auth; // phải có lớp này mới có thể sử dụng để đăng nhập
class RecruitersController extends Controller
{
	public function index()
	{
		$user = User::find(1);
		$user->notify(new NotificationUser());
	}
	
	public function getTest(){
		return view('test');
	}

	public function trangchu(){
		if(Auth::user()){
			if(Auth::user()->quyen==1){
				return view('nhatuyendung.pages.trangchu');
			}
		}
		return view('nhatuyendung.pages.trangchu');
	}

	public function getdangky(){
		return view('nhatuyendung.pages.dangky');
	}
	public function postdangky(Request $request){
		$this->validate($request,
			[
				'username' => 'required|min:3',
				'email' => 'required|email|unique:users,email',
				'password'=>'required|min:3|max:32',
				'passwordAgain' =>'required|same:password'
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
		$user->quyen = 1;
		$user->fullname=$request->fullname;
		$user->congty = $request->congty;
		$user->dienthoai= $request->dienthoai;
		$user->diachi=$request->diachi;
		$user->nghe=$request->nghe;


		$user->save();
		$request->session()->flash('thongbao', 'Bạn đã đăng ký thành công!');
		return redirect('nhatuyendung/dangky');
	}

	public function getdangnhap(){
		return view('nhatuyendung.pages.dangnhap');
	}
	public function postdangnhap(Request $request){
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

		$data = ['email'=>$request->email,'password'=>$request->password,'quyen'=>1];
        // kiểm tra đăng nhập
		if(Auth::attempt($data)){
			return redirect('nhatuyendung/danhsach');
		}else{
			$request->session()->flash('loi', 'Đăng nhập thất bại');
			return redirect('nhatuyendung/dangnhap');
		}
	}
	public function getthongtin(){
		return view('nhatuyendung.pages.thongtin');
	}

	public function postthongtin(Request $request){
		$this->validate($request,
			[
				'username' => 'required|min:3'
			],
			[
				'username.required' => 'Bạn chưa nhập tên người dùng',
				'username.min' => 'Tên người dùng phải có ít nhất 3 kí tự'
			]);
		$user = Auth::user();
		$user->username = $request->username;


		if($request->checkpassword == "on"){
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

		$user->fullname=$request->fullname;
		$user->congty = $request->congty;
		$user->dienthoai= $request->dienthoai;
		$user->diachi=$request->diachi;
		$user->nghe=$request->nghe;
		$user->save();
		$request->session()->flash('thongbao', 'Bạn đã sửa thành công!');
		return redirect('nhatuyendung/thongtin');
	}
	public function dangxuat(){
		Auth::logout();
		return redirect('nhatuyendung/trangchu');
	}
	public function dangxuatAll(){
		Auth::logout();
		return redirect('trangchu');
	}

	public function danhsach(){
		if(Auth::user()){
			$userid = Auth::user()->id;
			$post = Post::where('user_id',$userid)->paginate(3);
			return view('nhatuyendung.pages.danhsach',['post'=>$post]);
		}else{
			return redirect('nhatuyendung/dangnhap');
		}

	}

	public function getThem(){
		if(Auth::user()){
			$category = Category::all();
			return view('nhatuyendung.pages.them',['category'=>$category]);
		}else{
			return redirect('nhatuyendung/dangnhap');
		}

	}
	public function postThem(Request $request){

		$this->validate($request,
			[
				'category_id'=>'required'
			],
			[
				'category_id.required' =>'Bạn chưa chọn ngành'

			]);
		$post = new Post;
		$post->user_id = Auth::user()->id;
		$post->category_id = $request->category_id;
		$post->title = $request->title;
		$post->description = Auth::user()->congty;
		$post->content = $request->content;
		$post->keywork = $request->keywork;

		if($request->hasFile('Hinh')){
			$file = $request ->file('Hinh');
			$duoi = $file->getClientOriginalExtension();
			if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'JPG'){
				$request->session()->flash('loi', 'Bạn chỉ được chọn file jpg,png');
				return redirect('nhatuyendung/them');
			}
			$name = $file->getClientOriginalName();
			$Hinh = str_random(4)."_".$name;
			while(file_exists("upload/post/".$Hinh)){
				$Hinh = str_random(4)."_".$name;
			}
    		//echo $Hinh;
			$file->move("upload/post",$Hinh);
			$post->Hinh = $Hinh;
		}else{
			$post->Hinh="";
		}

		$post->save();
		$request->session()->flash('thongbao', 'Bạn đã thêm thành công!');
		return redirect('nhatuyendung/them');
	}

//sửa
public function getSua($id){
		if(Auth::user()){
			$category = Category::all();
			$post = Post::find($id);

			return view('nhatuyendung.pages.sua',['category'=>$category,'post'=>$post]);
		}else{
			return redirect('nhatuyendung/dangnhap');
		}

	}
	public function postSua(Request $request,$id){

		$this->validate($request,
			[
				'category_id'=>'required'
			],
			[
				'category_id.required' =>'Bạn chưa chọn ngành'

			]);
		$post = Post::find($id);
		$post->user_id = Auth::user()->id;
		$post->category_id = $request->category_id;
		$post->title = $request->title;
		$post->description = Auth::user()->congty;
		$post->content = $request->content;
		$post->keywork = $request->keywork;

		if($request->hasFile('Hinh')){
			$file = $request ->file('Hinh');
			$duoi = $file->getClientOriginalExtension();
			if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'JPG'){
				$request->session()->flash('loi', 'Bạn chỉ được chọn file jpg,png');
				return redirect('nhatuyendung/them');
			}
			$name = $file->getClientOriginalName();
			$Hinh = str_random(4)."_".$name;
			while(file_exists("upload/post/".$Hinh)){
				$Hinh = str_random(4)."_".$name;
			}
    		//echo $Hinh;
			$file->move("upload/post",$Hinh);
			$post->Hinh = $Hinh;
		}

		$post->save();
		$request->session()->flash('thongbao', 'Bạn đã sửa thành công!');
		return redirect('nhatuyendung/sua/'.$post->id);
	}
	public function xoa($id){
		$post = Post::find($id);
		$post->delete();
		return redirect('nhatuyendung/danhsach');
	}
	public function baipost($id){
		$post = Post::find($id);
		$userid = Auth::user()->id;
		$post1 = Post::where('user_id',$userid)->take(4)->get();
		return view('nhatuyendung.pages.baipost',['post'=>$post,'post1'=>$post1]);
	}
}
