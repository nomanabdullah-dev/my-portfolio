@extends('layouts.admin_layout')

@section('content')
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Edit Project Information</h1>
    <a href="{{ route('admin.project.index') }}" class="btn btn-primary pull-right">Back</a>
</div>

@include('alert.message')

<form class="form-horizontal form-label-left" action="{{ route('admin.project.update',$project->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category_name">Category Name
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select name="category_id" id="category_name" class="form-control col-md-7 col-xs-12">
              <option value="" style="display: none" selected>Select Category</option>
              @foreach ($categories as $category)
                  <option value="{{ $category->id }}" @if($project->category_id == $category->id) selected @endif>{{ $category->category_name }}</option>
              @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="project_name">Project Name
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="project_name" name="project_name" class="form-control col-md-7 col-xs-12" value="{{ $project->project_name }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="thumbnail">Thumbnail
        </label>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <input type="file" id="thumbnail" name="thumbnail" class="form-control col-md-7 col-xs-12" value="">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <img src="{{ url($project->thumbnail) }}" width="100px">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <img src="" width="80px">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <textarea type="text" id="description" name="description" class="form-control col-md-7 col-xs-12" value="" role="5">{{ $project->description }}  </textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">URL
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="url" name="url" class="form-control col-md-7 col-xs-12" value="{{ $project->url }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Date
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="date" name="date" class="form-control col-md-7 col-xs-12" value="{{ $project->date }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="client_name">Client Name
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="client_name" name="client_name" class="form-control col-md-7 col-xs-12" value="{{ $project->client_name }}">
        </div>
      </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-center">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>

      </form>

    </div>
  @endsection
