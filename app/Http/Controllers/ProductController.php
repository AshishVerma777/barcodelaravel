<?php
 
namespace App\Http\Controllers;
 
use App\Models\product;
use App\Models\Student;
use App\Models\ProductDetails;
use App\Models\job;

use App\Models\ProductContainer;
use Milon\Barcode\DNS1D;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

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
         
        // if ($this->productCodeExists($number)) {
        //     $number = mt_rand(1000000000,999999999);
        // }
         

        
        $request['bar_code'] = $number;
        $product = product::create($request->all());

        for ($i = 0; $i < $request->container_no; $i++)
        {
            // new ProductContainers

            $container   = new ProductContainer();

            // if ($this->productCodeExists($number)) {
            //     $number = mt_rand(1000000000,999999999);
            // }
           
            $container->product_id = $product->id;
            $container->status   = 'ok'; //$request->status;
            $container->save();
           
           
            // status = 'ok'
        }
 
     return redirect('/');
      // return redirect()->back()->route('dashboard');
}
 
    public function productCodeExists($number){
        return product::whereProductCode($number)->exists();
    }

    public function print($id)
        {
            //dd($id);
            $product = product::find($id);
             // return $products;
            if (!$product) {
                return redirect()->route('index')->with('error', 'Product not found.');
            }

            return view('print', compact('product'));
        
        }

    // public function show()
    // {
    //  return view("show");
    //  }

     
     public function document()
    {
        $pdf = Pdf::loadView('comps.document2');
        return $pdf->stream();
     }
 
     public function Editshow($id)
     {
       $data =product::find($id);
      // return $data;
      return view("editshow",compact('data'));
      }


      public function update(Request $request, $id)
      {
        $product = product::findOrFail($id);
       // $product1 = ProductContainer::findOrFail($id);
        
        // return $product;
        $product->batch_status = $request->batch_status;
        $product->item_code = $request->item_code;
        $product->item_name = $request->item_name;
        $product->location_code = $request->location_code;
        $product->store = $request->store;
        $product->grn_batch_id = $request->grn_batch_id;
        $product->arn_id = $request->arn_id;
        $product->container_no = $request->container_no;
        $product->brand_name = $request->brand_name;
        $product->quantity_of_product = $request->quantity_of_product;
        $product->unit = $request->unit;
        $product->weightPerPackage = $request->weightPerPackage;
        $product->totalWeight = $request->totalWeight;
        $product->item_description = $request->item_description;
        $product->batch_no = $request->batch_no;

        $product->uom_branch = $request->uom_branch;
        $product->mfg_dt = $request->mfg_dt;
        $product->exp_dt = $request->exp_dt;
        $product->no_of_cont = $request->no_of_cont;
        $product->pack_size = $request->pack_size;
        $product->count_no = $request->count_no;
        $product->rec_qty = $request->rec_qty;
        $product->manufacturer = $request->manufacturer;
        $product->supplier = $request->supplier;
        $product->grn_no = $request->grn_no;
        $product->grn_date = $request->grn_date;
        $product->format_no = $request->format_no;
        $product->printed_by = $request->printed_by;
       // $product1->status = $request->status;
        
       if ($request->has('generate_new_barcode')) {
        $number = mt_rand(1000000000, 9999999999);
        
        // Check if the generated barcode already exists, generate a new one if it does
        while ($this->productCodeExists($number)) {
            $number = mt_rand(1000000000, 9999999999);
        }
        
        // Update the barcode in the request
        $product->bar_code = $number;
    }

    //return $product;
    // Save the updated product
    $product->save();

    // Redirect back to the view page or any other page after updating the product
    return redirect('/');
} 


public function updateStatus($container)
{
    $container = ProductContainer::findOrFail($container);
    
    $container->status = $container->status == 'ok' ? 'leakage_damage' : 'ok'; // Update the status as per your requirement

    $container->save();

    return redirect()->back()->with('success', 'Container status updated successfully.');
}

            public function dashboard()
            {

                //$products = product::all();
                $products = Product::orderBy('created_at', 'desc')->get();

                return view('dashboard',compact('products'));
                
            
            }
//------------------------grid Data ----------------------------------------


            public function gridData()
            {
                //dd(product::all());
                // $databaseName = env('mysql2');
                // dd($databaseName) ;

                //  $data = DB::connection('mysql2')->table('products')->get();
                //  return ($data);


            //return product::all();

                // $data = DB::connection('mysql2')->table('Student')->get();
                
            // $data=Student::all();
                //return ($data);
                
                return view('gridData');
            }



            public function GridStore(Request $request)
            {
            
                    //return $request->all();
                $student  = new Student();
                $student->first_name=$request->first_name;
                $student->lnm = $request->lnm;
                $student->mno=$request->mno;
                $student->email=$request->email;
                
                //dd($student);
                // return $student;
                return redirect()->route('gridData')->with('status', 'Data Updated successfully');

                
            }





            public function StudentShow($id)
            {
                
                 
                 $student=Student::find($id);
                 //return $student;
                 return View('StudentShow',compact('student'));
    
            }


            

            public function UpdateStudent( Request $request, $id)
            {
                
                // return "Update form called";
                $student=Student::findOrFail($id);
                $student->first_name=$request->first_name;
                $student->lnm=$request->lnm;
                $student->mno=$request->mno;
                $student->email=$request->email;
                
                
            //     $student->save();
                
            //    return redirect()->route('gridData')->with('status','Data Updated successfully');

                $student->save();

                return redirect()->route('gridData')->with('status', 'Data Updated successfully');

    }






    //----------------------------------hrms  database and  job table  -----------------------------------

     public function hrmsjob()
     {
  
            //  $data=job::all();
            //  dd($data);
        return view('hrms_job');
     } 


     public function hrmsjobStore(Request $request)
     {
          $job = new job();
          
          $job->department=$request->department;
          $job->address=$request->address;
          $job->branch=$request->branch;
          $job->salary=$request->salary;
          $job->technology=$request->technology;
          $job->company=$request->company;
          $job->identifier='gridData';
          $job->data= $request->gridData;


 
 


          // return $job; 
          $job->save();
          
     } 




     public function hrmsjobShow($id)
     {  
        $job = Job::find($id);
      //  $jobs = Job::where('identifier', 'gridData')->first();
      $jobs = Job::where('id', $id)->where('identifier', 'gridData')->first();  
      return view('hrms_job_view', compact('job', 'jobs'));
     }


     public function hrmsjobupdate(Request $request , $id)
     {
        $job=job::findOrFail($id) ;
        
          //dd($job);
          $job->department=$request->department;
          $job->address=$request->address;
          $job->branch=$request->branch;
          $job->salary=$request->salary;
          $job->technology=$request->technology;
          $job->company=$request->company;
          $job->identifier='gridData';
          $job->data= $request->gridData;


          $job->update();
          //return $job;
          return redirect()->route('hrmsjob')->with('status', 'Data Updated successfully');
      } 

      public function question()
      {
        return view('question');
      }

}