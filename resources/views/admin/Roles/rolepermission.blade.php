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
       
           <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Role Name</th>
                            <th>Description</th>
                            <th>Permissions</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)

                      {{--  {{ dd($role)}}    --}}
                        <tr>
                            <td>{{ $role->role_name }}</td>
                            <td>{{ $role->description }}</td>
                            <td>
                                @php
                                    $permissions = json_decode($role->permission, true);
                                   // dd($permissions)
                                @endphp
                                @foreach($permissions as $permission => $value)
                                {{--  @php
                                    dump($permission,$value); // Dump to inspect each permission and value
                                @endphp  --}}

                                <span class="badge badge-{{ $value ? 'success' : 'secondary' }}">{{ ucfirst($permission) }}</span>
                                @endforeach  
                            </td>
                            <td>
                                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline-block;">
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
</div>

@endsection
