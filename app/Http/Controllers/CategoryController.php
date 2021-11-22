<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //database
use App\Models\Category;

class CategoryController extends Controller
{
    public function add(){
        $r=request(); //receive data from GET / POST method  $_POST['name']
        $addCategory=Category::create([  //pre-define function in DB 
            'name'=>$r->categoryName,
        ]); 
        return view('addCategory'); 
    }
}
