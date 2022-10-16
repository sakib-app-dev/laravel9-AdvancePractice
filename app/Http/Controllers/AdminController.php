<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;
// use Image;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.index');
    }

/* */ 

    public function categoryForm(){
        return view('admin.forms');
    }
    public function categoryList(){
        return view('admin.tables');
    }
    public function categoryDelete(){
        
    }





//Product



    public function logIn(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
}
