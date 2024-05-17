<?php
 
namespace App\Http\Controllers;
 
use App\Models\product;
use Illuminate\Http\Request;
 
class ProductController extends Controller
{
    public function index(){
        $products = product::all();
        return view('index',compact('products'));
    }
 
    public function create(){
        return view('create');
    }
 
    public function store(Request $request){
        $number = mt_rand(1000000000,9999999999);
         
        if ($this->productCodeExists($number)) {
            $number = mt_rand(1000000000,999999999);
        }
         
        $request['bar_code'] = $number;
        product::create($request->all());
 
        return redirect('/');
    }
 
    public function productCodeExists($number){
        return product::whereProductCode($number)->exists();
    }

    public function print($id)
   {
    $product = product::find($id);

    if (!$product) {
        return redirect()->route('index')->with('error', 'Product not found.');
    }

    return view('print', compact('product'));
    }

    public function show()
    {
     return view("show");
     }
     public function document()
    {
     return view("show");
     }
 




   
}