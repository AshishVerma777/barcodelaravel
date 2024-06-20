@extends('admin.main-layout')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
            </div><!-- /.col -->
            <div class="col-sm-12">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admindashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->
@endsection

@section('body')
<!-- Main row -->
<div class="row">
   <div class="container-fluid">
    <a href="{{ route('roles.create') }}">
            <button style="margin:24px;width: 67px;" type="button" class="btn btn-primary">Add</button>
        </a>
       
                    
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update Role Group </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
             <form action="{{ route('roles.update',$data->id) }}" method="POST">
             @csrf
            {{--  <input type="hidden" name="_token" value="XghiTXlQD3Ihw42ENjR4Yk4hjvLIWBmPMwqYVglc">  --}}
            <div class="card-body">

                <div class="form-group">

                        <label for="exampleInputName1">Role Name</label>
                        <input type="name" name="role_name" class="form-control" id="exampleInputName1" placeholder="Enter Role Name" value="{{$data->role_name}}">
                </div>

                <div class="form-group">

                    <label for="exampleInputName1">Description*</label>
                    <input type="name" name="description" class="form-control" id="exampleInputName1" placeholder="Enter description" value="{{$data->description}}">
                </div>

                <div class="form-group">

                    <label for="exampleInputName1">Permission*</label>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Read</th>
                                <th>Create</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @php
                                
                            $permissions= json_decode($data->permission);
                           // dd($permissions);  
                            @endphp  

                          {{--  @php
                         $permissions = json_decode($data->permission, true);
                           dd($permissions)
                          @endphp  --}}


                            <td>
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" name="permissions['read']" id="checkboxPrimary1" {{$permissions->read ? 'checked' : ''}}>
                                    <label for="checkboxPrimary1">
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" name="permissions['create']" id="checkboxPrimary2" {{$permissions->create ? 'checked' : ''}}>
                                    <label for="checkboxPrimary2">
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" name="permissions['edit']" id="checkboxPrimary3" {{$permissions->edit ? 'checked':''}}>
                                    <label for="checkboxPrimary3">
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" name="permissions['delete']" id="checkboxPrimary4" {{$permissions->delete ? 'checked': ''}}>
                                    <label for="checkboxPrimary4">
                                    </label>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                    </table>


                </div>

            </div>


            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->

    </div>
</div>

@endsection
