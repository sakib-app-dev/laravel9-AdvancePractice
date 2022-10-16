<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ColorController extends Controller
{
    public function index(){
        $color=Color::all();
        return view('admin.colors.index',compact('color'));
    }

    public function create(){
        return view('admin.colors.create');
    }
    public function store(Request $request){
        
            Color::create([
                'color_name'=>$request->color_name,
                'color_code'=>$request->color_code,
                'is_active'=>$request->is_active ? true : false,
            ]);
        
            return redirect()
            ->route('admin.color.index')
            ->with('message','Create Successfully...');
        // } 
    }



    public function productEditForm($id){
        $product=Color::find($id);
        return view('admin.product_edit_form',compact('product'));
    }



    public function productUpdate(Request $request,$id){
       
        $product=Color::find($id);
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




 



    public function productShow($id){
        
        $product=Color::find($id);
        return view('admin.product-show',compact('product'));
    }



    public function productDestroy($id){
        
        $product=Color::find($id);
        $product->delete();
        return redirect()
        ->route('admin.product.index')
        ->with('message','Delete Successfully');
    }





    public function productTrash(){
        $product=Color::onlyTrashed()->get();
        return view('admin.product_trash',compact('product'));
    }

    public function productRestore($id){
        // dd($id);
        $product=Color::onlyTrashed()->find($id);
        $product->restore();
        return redirect()
        ->route('product.trash')
        ->with('message','Restore Successfully');
    }
    public function productDelete($id){
        
        $product=Color::onlyTrashed()->find($id);
        $product->forceDelete();
        return redirect()
        ->route('product.trash')
        ->with('message','Delete Successfully');
    }

     



    public function pdfDownload(){
        $product=Color::all();
        $pdf = Pdf::loadView('admin.product_list_pdf',compact('product'));
        return $pdf->download('product.pdf');

    }
}
