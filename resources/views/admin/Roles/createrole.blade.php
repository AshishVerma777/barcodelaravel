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
    <a href="{{ route('users.create') }}">
            <button style="margin:24px;width: 67px;" type="button" class="btn btn-primary">Add</button>
        </a>
       
                    
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create Role Group </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="http://127.0.0.1:8000/admin/role_groups" method="POST">
            <input type="hidden" name="_token" value="XghiTXlQD3Ihw42ENjR4Yk4hjvLIWBmPMwqYVglc">
            <div class="card-body">

                <div class="form-group">

                        <label for="exampleInputName1">Role Name</label>
                        <input type="name" name="role_name" class="form-control" id="exampleInputName1" placeholder="Enter Role Name">
                </div>

                <div class="form-group">

                    <label for="exampleInputName1">Description*</label>
                    <input type="name" name="description" class="form-control" id="exampleInputName1" placeholder="Enter description">
                </div>

                <div class="form-group">

                    <label for="exampleInputName1">Permission*</label>
                    <table class="table table-bordered table-striped">
                        <tbody><tr>
                            <th>Read</th>
                            <th>Create</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" name="read" id="checkboxPrimary1" checked="">
                                    <label for="checkboxPrimary1">
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" name="create" id="checkboxPrimary2" checked="">
                                    <label for="checkboxPrimary2">
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" name="edit" id="checkboxPrimary3" checked="">
                                    <label for="checkboxPrimary3">
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" name="delete" id="checkboxPrimary4" checked="">
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
