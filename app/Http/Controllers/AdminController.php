<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;

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

    public function productForm(){
        return view('admin.product_form');
    }
    public function productStore(ProductRequest $request){
        // dd($request->all());

        // $validated = $request->validate([
        //     'title' => 'required|unique:posts|max:255',
        // ]);

        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|unique:products|max:255|min:3',
        // ]);
 
        // if ($validator->fails()) {
        //     // return redirect('product/form')
        //     return back()
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }else{
            $orgName=$request->file('image')->getClientOriginalName();

            $filename=date('Y-m-d').time().$orgName;
           
            $request->file('image') ->move(storage_path('/app/public/products'),$filename);
            // dd($request->image);
            Product::create([
                'title'=>$request->title,
                'category'=>$request->category,
                'is_active'=>$request->is_active ? true : false,
                'description'=>$request->description,
                'image'=>$filename
            ]);
        
            return redirect()
            ->route('admin.product.index')
            ->with('message','Create Successfully...');
        // } 
    }



    public function productEditForm($id){
        $product=Product::find($id);
        return view('admin.product_edit_form',compact('product'));
    }



    public function productUpdate(ProductRequest $request,$id){
       
        $product=Product::find($id);
        $product->update([
            'title'=>$request->product_title,
            'category'=>$request->category,
            'is_active'=>$request->is_active ? true : false,
            'description'=>$request->description
        ]);
       
        return redirect()
        ->route('admin.product.index')
        ->with('message','Updated Successfully...');
    }



    public function productList(){
        $product=Product::all();
        return view('admin.product_tables',compact('product'));
    }

 



    public function productShow($id){
        
        $product=Product::find($id);
        return view('admin.product-show',compact('product'));
    }



    public function productDestroy($id){
        
        $product=Product::find($id);
        $product->delete();
        return redirect()
        ->route('admin.product.index')
        ->with('message','Delete Successfully');
    }




    public function productTrash(){
        $product=Product::onlyTrashed()->get();
        return view('admin.product_trash',compact('product'));
    }

    public function productRestore($id){
        // dd($id);
        $product=Product::onlyTrashed()->find($id);
        $product->restore();
        return redirect()
        ->route('product.trash')
        ->with('message','Restore Successfully');
    }
    public function productDelete($id){
        // dd($id);
        $product=Product::onlyTrashed()->find($id);
        $product->forceDelete();
        return redirect()
        ->route('product.trash')
        ->with('message','Delete Successfully');
    }

     



    public function pdfDownload(){
        $product=Product::all();
        $pdf = Pdf::loadView('admin.product_list_pdf',compact('product'));
        return $pdf->download('product.pdf');

    }


    public function logIn(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
}
