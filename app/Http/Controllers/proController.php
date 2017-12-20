<?php

namespace App\Http\Controllers;
use App\category;
use App\tra;
use App\product;

use Illuminate\Http\Request;

class proController extends Controller
{
    public function getAdd()
	{
		$cat=category::all();
		$tra=tra::all();
		return view('backend.product.add_pro', ['cat'=>$cat], ['tra'=>$tra]);
	}
	public function postadd(Request $request){

		$pro=new product;
		$pro->timestamps = false;
		$pro->cat_id=$request->cat;
		$pro->pro_name=$request->txtName;
		$pro->pro_price=$request->txtPrice;
		$pro->pro_num=$request->txtnum;
		$pro->pro_discount=$request->txtdis;
		$pro->pro_des=$request->txtdes;
		$pro->pro_size=$request->txtsize;
		$pro->tra_id=$request->tra;
		if($request->hasFile('hinh')){
			$file=$request->file('hinh');
			$duoi= $file->getClientOriginalExtension();
			if($duoi !='jpg' && $duoi !='PNG' && $duoi !='jpeg'  ){
				echo ('banj phair chonj nhuwngx dduooi tren ok');
			}
			$name=$file->getClientOriginalName();
			$hinh=str_random(3)."_".$name;
			while(file_exists('uploat/product/'.$hinh)){
				$hinh=str_random(3)."_".$name;
			}
			$file->move('uploat/product/',$hinh);
			$pro->pro_imglink=$hinh;
			
		}
		else{
			$pro->pro_imglink="";
		}
		$pro->save();
		echo "them thành công";
	}
	public function getEdit($pro_id)
	{
		$pro=product::find($pro_id);
		return view('backend.admin.editpro',['pro'=>$pro]);
	}
	public function postEdit()
	{
		
	}

	public function getList()
	{
		 $pro=product::all();
		return view('backend.product.list_pro',['pro'=>$pro]);
	}

	public function getdelete($pro_id)
	{
		 $pro=product::find($pro_id);
		 $pro->delete();
		return redirect('backend/admin/listpro')->with('thongbao','xóa thanh cong');
	}
}
