<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductModel;

class ProductController extends Controller
{
    //

   public function index()
   {
      if (session()->has('id'))
      {
          $ProductModel = ProductModel::paginate(10);
          return view('product',['products'=>$ProductModel]);
      }
   		else
      {
          return redirect('/');
      }
   }

   public function showAddProduct()
   {
   		
      if (session()->has('id'))
      {
          return view('createproduct');
      }
      else
      {
         return redirect('/');
      }
   }

   public function showProduct($id)
   {
        if (session()->has('id'))
        {
          $ProductModel = ProductModel::find($id);
          return view('productDetails', ['productData' => $ProductModel]);
        }
        else
        {
           return redirect('/');
        }
   }

   public function AddProduct(Request $request)
   {
   		    $validated = $request->validate([
		        'image' => 'required',
		        'product_name' => 'required',
		        'price' => 'required',
		    ]);


   		    $productModel = New ProductModel;
   		    // $productModel->product_image = $request->image;
   		    $productModel->product_name = $request->product_name;
   		    $productModel->product_price = $request->price;


   		    if ($request->file('image')) {
	            
	           	$file = $request->file('image');
	           	$extenstion = $file->getClientOriginalName();
	           	$filename = time().''.$extenstion;
	           	$file->move('image/', $filename);
	           	$productModel->product_image = $filename;
	            $productModel->save(); 

	            return redirect()->back()->with('status', 'Successfully Save!');
        	}
        	else
        	{
        		return redirect()->back()->with('status', 'Something Went Wrong!');
        	}




   }

   public function updateProduct(Request $request)
   {
          $validated = $request->validate([
            // 'image' => 'required',
            'product_name' => 'required',
            'price' => 'required',
        ]);

          $productData = ProductModel::find($request->product_id);

          $productData->product_name = $request->product_name;
          $productData->product_price = $request->price;


          if ($request->file('image')) {
              
              $file = $request->file('image');
              $extenstion = $file->getClientOriginalName();
              $filename = time().''.$extenstion;
              $file->move('image/', $filename);
              $productData->product_image = $filename;
              $productData->save(); 

              
          }
          else
          {
              $productData->Save();
              return redirect()->back()->with('status', 'Successfully Save!');
          }




   }
}
