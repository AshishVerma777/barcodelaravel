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
       
                    
   
    </div>
</div>

@endsection
