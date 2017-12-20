<?php

namespace App\Http\Controllers;
use App\category;
use Illuminate\Http\Request;

class catController extends Controller
{
	public function getAdd()
	{
		return view('backend.category.add_cat');
	}
	public function getEdit()
	{
		return view('backend.category.edit_cat');
	}
	public function getList()
	{
		 $cat=category::all();
		return view('backend.category.list_cat',['cat'=>$cat]);
	}
}
