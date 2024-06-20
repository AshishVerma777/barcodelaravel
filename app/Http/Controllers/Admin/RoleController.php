<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RolePermission;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 
        $roles   = RolePermission::all();
        return view('admin.Roles.rolepermission',compact('roles'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Roles.createrole');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // return $request->all();
       $roles = new RolePermission();

       $roles->role_name= $request->role_name;
       $roles->description=$request->description;

        $permision=[
            'read' => $request->has('read'),
            'create' => $request->has('create'),
            'edit' => $request->has('edit'),
            'delete' => $request->has('delete'),
        ];
             
       $roles->permission =json_encode($permision);

       
       //return $roles;
       $roles->save();

      
       return redirect()->route('roles.index')->with('success', 'Role created successfully');

       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
            $data  =  RolePermission::find($id);

          //  dd($data);
    
            return  view('admin.Roles.edit_role',compact('data'));
       

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
