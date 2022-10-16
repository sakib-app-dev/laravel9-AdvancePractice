<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
// use Image;

class ProductController extends Controller
{
    public function productForm(){
        
        return view('admin.products.create');
    }
    public function productStore(ProductRequest $request)
    {
            Product::create([
                'title'=>$request->title,
                'category'=>$request->category,
                'is_active'=>$request->is_active ? true : false,
                'description'=>$request->description,
                'image' =>  $this->uploadImage($request->file('image'))
            ]);
        
            return redirect()
            ->route('admin.product.index')
            ->with('message','Create Successfully...');
        // } 
    }



    public function productEditForm($id)
    {
        $product=Product::find($id);
        return view('admin.products.edit',compact('product'));
    }



    public function productUpdate(ProductRequest $request,$id)
    {
       
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



    public function productList()
    {
        $product=Product::all();
        return view('admin.products.index',compact('product'));
    }

 



    public function productShow($id)
    {
        
        $product=Product::find($id);
        return view('admin.products.show',compact('product'));
    }



    public function productDestroy($id)
    {
        
        $product=Product::find($id);
        $product->delete();
        return redirect()
        ->route('admin.product.index')
        ->with('message','Delete Successfully');
    }


    public function uploadImage($file)
    {
        $fileName = date('y-m-d').'-'.time().'.'.$file ->getClientOriginalExtension();
       
        $file->move(storage_path('app/public/products'), $fileName);

        // Image::make($file)
        //         ->resize(200, 200)
        //         ->save(storage_path() . '/app/public/products' . $fileName);

        return $fileName;
    }



    public function productTrash()
    {
        $product=Product::onlyTrashed()->get();
        return view('admin.products.trash',compact('product'));
    }

    public function productRestore($id)
    {
        $product=Product::onlyTrashed()->find($id);
        $product->restore();
        return redirect()
        ->route('product.trash')
        ->with('message','Restore Successfully');
    }

    public function productDelete($id)
    {
        $product=Product::onlyTrashed()->find($id);
        $product->forceDelete();
        return redirect()
        ->route('product.trash')
        ->with('message','Delete Successfully');
    }


    public function pdfDownload(){
        $product=Product::all();
        $pdf = Pdf::loadView('admin.products.pdf',compact('product'));
        return $pdf->download('product.pdf');

    }

}
