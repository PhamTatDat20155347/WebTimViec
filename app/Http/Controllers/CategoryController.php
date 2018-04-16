<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
	public function getDanhSach(){
		$nganh = Category::all();
		return view('admin.category.danhsach',['nganh'=>$nganh]);
	}

	public function getSua($id){
		$category = Category::find($id);
		return view('admin.category.sua',['category'=>$category]);
	}
	public function postSua(Request $request,$id){
		$category  = Category::find($id);
		$this->validate($request,
			[
				'title' => 'required|unique:category,title'
			]
			,[
				'title.required' => 'Bạn chưa nhập tên ngành tuyển dụng',
				'title.unique' => 'Tên ngành đã tồn tại'
			]);

		$category->title = $request->title;

		$category->save();

		$request->session()->flash('thongbao', 'Sửa thành công!');
		return redirect('admin/category/sua/'.$category->id);

	}

	public function getThem(){
		return view('admin.category.them');
	}
	public function postThem(Request $request){
    	//echo $request->Ten;
		$this->validate($request,
			[
				'title' => 'required|unique:category,title'
			],
			[
				'title.required' => 'Bạn chưa nhập tên ngành tuyển dụng',
				'title.unique' => 'Tên ngành đã tồn tại'
			]);
		$category = new Category;
		$category->title = $request->title;

		$category->save();
		$request->session()->flash('thongbao', 'Bạn đã thêm thành công!');
		return redirect('admin/category/danhsach');

	}

	public function getXoa(Request $request,$id){
		$category= Category::find($id);
		$category->delete();
		$request->session()->flash('thongbao', 'Xóa thành công!');
		return redirect('admin/category/danhsach');
	}
}
