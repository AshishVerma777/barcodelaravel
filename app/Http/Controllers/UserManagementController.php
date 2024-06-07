<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            $users = User::where('status',1)->get();
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->status = 1; // Active by default
    
        //return $user; // This line is just for debugging and should not be present in production
        $user->save();
    
        return redirect()->route('users.index')->with('success', 'User Created Successfully');
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
        $user= User::find($id);
        //dd($users);
         return view('admin.adminlogin.edit_user',compact('user'));
   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'old_password' => 'required_with:new_password|nullable',
            'new_password' => 'nullable|string|min:8|confirmed',
        ]);
    
        $user = User::findOrFail($id);
    
        // Check if new password is provided
        if ($request->filled('new_password')) {
            // Check if the old password matches
            if (!Hash::check($request->old_password, $user->password)) {
                return redirect()->back()->with('error', 'Current password does not match.');
            }
            // Hash and set the new password
            $user->password = Hash::make($request->new_password);
        }
    
        // Update user details
        $user->name = $request->name;
        $user->email = $request->email;
    
        // Save the user
        $user->save();
    
        // Redirect with success message
        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }
    
                

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::findOrFail($id);

        $user->status=0;//deactive user
        $user->save();
        return redirect()->route('users.index')->with('success','User deactivated successfully');

    }

    public function  restore(string $id)
    {
        $user=User::withTrashed()->findOrFail($id);
        $user->status=1;//reactive user;
        $user->restore();
        return redirect()->route('users.index')->with('success','User reactivated successfully');
    

    }
}
