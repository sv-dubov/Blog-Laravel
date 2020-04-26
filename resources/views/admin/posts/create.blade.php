@extends('admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add article
            <small>good words...</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        {{Form::open([
		'route'	=> 'posts.store',
		'files'	=>	true
	])}}
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Add article</h3>
                @include('admin.errors')
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title" value="{{old('title')}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Main image</label>
                        <input type="file" id="exampleInputFile" name="image">

                        <p class="help-block">Some message about image formats...</p>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        {{Form::select('category_id',
              	$categories, 
              	null, 
              	['class' => 'form-control select2'])
              }}
                    </div>
                    <div class="form-group">
                        <label>Tags</label>
                        {{Form::select('tags[]',
              	$tags, 
              	null, 
              	['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Выберите теги'])
              }}
                    </div>
                    <!-- Date -->
                    <div class="form-group">
                        <label>Date:</label>

                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker" name="date" value="{{old('date')}}">
                        </div>
                        <!-- /.input group -->
                    </div>

                    <!-- checkbox -->
                    <div class="form-group">
                        <label>
                            <input type="checkbox" class="minimal" name="is_featured">
                        </label>
                        <label>
                            Recommend
                        </label>
                    </div>

                    <!-- checkbox -->
                    <div class="form-group">
                        <label>
                            <input type="checkbox" class="minimal" name="status">
                        </label>
                        <label>
                            Draft
                        </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description (lead)</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full text</label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{route('posts.index')}}" class="btn btn-default">Back</a>
                <button class="btn btn-success pull-right">Add</button>
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