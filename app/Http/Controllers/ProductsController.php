<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


use Illuminate\Http\Request;
use App\Models\ProductsModel;
use symfony\component\console\input\input;




class ProductsController extends Controller
{
     function index()
    {
        $data = ProductsModel::get();
        //return $data;
        return view ('users/createRead', compact('data'));
    }
  
    function saveProduct(Request $request){
        $name = $request->get('Name');
        $price = $request->Price;
        $image = $request->file('Image')-> getClientOriginalName();

        //move_uploaded_file
        $request -> Image -> move(public_path('images'), $image);

        $pdt = new ProductsModel();
        $pdt->Name = $name;
        $pdt->price = $price;
        $pdt->Image = $image;
        $pdt->save();

        return redirect()->back()->with('status', 'Product Added Successfully');
    }

    function deleteProduct($id){

        $data = ProductsModel::find($id);
        $data->delete();
        return redirect()->back()->with('status', 'Product Deleted Successfully');
        

       
    }

    function editProduct($id){

        $data = ProductsModel::where('id','=', $id)->first();
        return view('users/update', compact('data'));

    }
    function updateProducts(Request $request){

        $request -> validate([
            
            'Name' => 'required',
            'Price' => 'required',
            'Image' => 'required'
        ]);

        $id = $request->id;
        $name = $request->Name;
        $price = $request->Price;
        $image = $request->file('Image')-> getClientOriginalName();

        //move_uploaded_file
        $request -> Image -> move(public_path('images'), $image);


        ProductsModel::where('id','=', $id)->update(['Name' => $name, 'Price' => $price, 'Image' => $image]);
        return redirect()->back()->with('status', 'Product Updated Successfully');
    }



}

    

