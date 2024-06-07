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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table  class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sr no.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>
                          
                            <td>{{ $user->status ? 'Active' : 'Deactivated' }}</td>
                            <td></td>
                            <td>
                                <!-- Add your actions here -->
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm">View</a>
                                
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<!-- /.row (main row) -->
@endsection
