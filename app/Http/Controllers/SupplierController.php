<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SupplierModel;

class SupplierController extends Controller
{
    //
       public function index()
	   {
	      if (session()->has('id'))
	      {
	          $SupplierModel = SupplierModel::paginate(10);
	          return view('supplier',['suppliers'=>$SupplierModel]);
	      	// return view('supplier')
	      }
	   		else
	      {
	          return redirect('/');
	      }
	   }

	   public function createSupplier()
	   {
		   	  if (session()->has('id'))
		      {
		          return view('createsupplier');
		      }
		      else
		      {
		         return redirect('/');
		      }
	   }

	   public function addSupplier(Request $request)
	   {
	   		$validated = $request->validate([
		        'supplier_name' => 'required',
		        'supplier_address' => 'required',
		    ]);

		    $SupplierModel = New SupplierModel;
   		    // $productModel->product_image = $request->image;
   		    $SupplierModel->supplier_name = $request->supplier_name;
   		    $SupplierModel->address = $request->supplier_address;
   		    $SupplierModel->save(); 
   		    return redirect()->back()->with('status', 'Successfully Save!');
	   }

	   public function showSupplier($id)
   	   {
	        if (session()->has('id'))
	        {
	          $SupplierModel = SupplierModel::find($id);
	          return view('supplierDetails', ['supplierData' => $SupplierModel]);
	        }
	        else
	        {
	           return redirect('/');
	        }
      }

      public function updateSupplier(Request $request)
      {
      		$validated = $request->validate([
		        'supplier_name' => 'required',
		        'supplier_address' => 'required',
		    ]);

		   	  $SupplierModel = SupplierModel::find($request->supplier_id);

	          $SupplierModel->supplier_name = $request->supplier_name;
	          $SupplierModel->address = $request->supplier_address;
	          $SupplierModel->save(); 
	          return redirect()->back()->with('status', 'Successfully Save!');
      }
}
