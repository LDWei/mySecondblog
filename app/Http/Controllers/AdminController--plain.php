<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController--plain extends Controller
{
    /**
     * 后台首页方法
     */
    
    public function index(){
    	return view('admin.index');
    }
}
