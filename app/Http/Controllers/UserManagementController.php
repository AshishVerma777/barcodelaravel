<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
            // $data=[
            //     'title'=>'Users'
            // ];
            $users = User::all();
            return view('admin.adminlogin.index', compact(['users']));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
        return view('admin.adminlogin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // return  $request->all();

       $request->validate([
        'name'=>'required|string|max:255',
        'email'=>'required|string|email|max:255|unique:users',
        'password'=>'required|string|min:8|confirmed'
       ]);

       $user= new User();
       $user->name = $request->name;
       $user->email = $request->email;
      // $user->password	 = $request->password;
      
       $user->password	 = bcrypt($request->password);
      
       //return $user;
       $user->save();
     
       return redirect()->route('users.index')->with('success','User Created Successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $users= User::find($id);
        //dd($users);
        return view('admin.adminlogin.show_user',compact('users')); 
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users= User::find($id);
        //dd($users);
         return view('admin.adminlogin.edit_user',compact('users'));
   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
