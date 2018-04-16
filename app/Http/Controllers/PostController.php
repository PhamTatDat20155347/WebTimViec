<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\User;
class PostController extends Controller
{
//
	public function getDanhSach(){
    	// hiển thị từ cuối  lên trên đầu
		$post = Post::all();

		return view('admin.post.danhsach',['post'=>$post]);
	}

	public function getSua($id){
		$post = Post::find($id);
		$user = User::all();
		$category = Category::all();
		return view('admin.post.sua',['post'=>$post,'user'=>$user,'category'=>$category]);
	}
	public function postSua(Request $request,$id){
		$post  = Post::find($id);
		$this->validate($request,
			[
				'user_id' => 'required',
				'category_id'=>'required'
			],
			[
				'user_id.required' => 'Bạn chưa chọn loại tin',
				'category_id.required' =>'Bạn chưa chọn ngành'


			]);
		$post->user_id = $request->user_id;
		$post->category_id = $request->category_id;
		$post->title = $request->title;
		$post->description = $request->description;
		$post->content = $request->content;
		$post->keywork = $request->keywork;

		if($request->hasFile('Hinh')){
			$file = $request ->file('Hinh');
			$duoi = $file->getClientOriginalExtension();
			if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'JPG'){
				$request->session()->flash('loi', 'Bạn chỉ được chọn file jpg,png');
				return redirect('admin/post/them');
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
		return redirect('admin/post/sua/'.$id);

	}

	public function getThem(){
		$user = User::where('quyen',1)->get();
		$category = Category::all();
		return view('admin.post.them',['user'=>$user,'category'=>$category]);
	}
	public function postThem(Request $request){
    	//echo $request->Ten;
		$this->validate($request,
			[
				'user_id' => 'required',
				'category_id'=>'required'
			],
			[
				'user_id.required' => 'Bạn chưa chọn loại tin',
				'category_id.required' =>'Bạn chưa chọn ngành'

			]);
		$post = new Post;
		$post->user_id = $request->user_id;
		$post->category_id = $request->category_id;
		$post->title = $request->title;
		$post->description = $request->description;
		$post->content = $request->content;
		$post->keywork = $request->keywork;

		if($request->hasFile('Hinh')){
			$file = $request ->file('Hinh');
			$duoi = $file->getClientOriginalExtension();
			if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'JPG'){
				$request->session()->flash('loi', 'Bạn chỉ được chọn file jpg,png');
				return redirect('admin/post/them');
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
		return redirect('admin/post/them');

	}

	public function getXoa(Request $request,$id){
		$post= Post::find($id);
		$post->delete();
		$request->session()->flash('thongbao', 'Xóa thành công!');
		return redirect('admin/post/danhsach');
	}
}
