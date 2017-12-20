<?php

namespace App\Http\Controllers;
use App\auth;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function getAdd()
	{
		return view('backend.admin.add_admin');
	}
	public function postadd(Request $request){

		$admin=new auth;
		$admin->timestamps = false;
		$admin->admin_name=$request->Name;
		$admin->admin_pass=$request->pass;
		$admin->admin_active=$request->active;
		$admin->save();
		return redirect('backend/admin/listadmin')->with('thongbao','them thanh cong');
	}
	public function getEdit($admin_id)
	{
		$admin=auth::find($admin_id);
		return view('backend.admin.edit_admin',['admin'=>$admin]);
	}
	public function postEdit(request $request,$admin_id)
	{
		$admin=auth::find($admin_id);
		$admin->admin_name=$request->Name;
		$admin->admin_pass=$request->pass;
		$admin->admin_active=$request->active;
		$admin->save();
		return redirect('backend/admin/listadmin')->with('thongbao','sửa thanh cong');
	}

	public function getList()
	{
		 $admin=auth::all();
		return view('backend.admin.list_admin',['admin'=>$admin]);
	}

	public function getdelete($admin_id)
	{
		 $admin=auth::find($admin_id);
		 $admin->delete();
		return redirect('backend/admin/listadmin')->with('thongbao','xóa thanh cong');
	}
}
