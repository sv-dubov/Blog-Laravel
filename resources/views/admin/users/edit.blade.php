@extends('admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit user
            <small>good words...</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        {{Form::open([
		'route'	=> ['users.update', $user->id],
		'method' =>	'put',
		'files'	=> true
	])}}
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Edit user</h3>
                @include('admin.errors')
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder="">
                    </div>
                    <div class="form-group">
                        <img src="{{$user->getImage()}}" alt="" width="200" class="img-responsive">
                        <label for="exampleInputFile">Avatar</label>
                        <input type="file" name="avatar" id="exampleInputFile">
                        <p class="help-block">Some message about format image...</p>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{route('users.index')}}" class="btn btn-default">Back</a>
                <button class="btn btn-warning pull-right">Edit</button>
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
        {{Form::close()}}
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection