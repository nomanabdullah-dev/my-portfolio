@extends('layouts.admin_layout')

@section('content')
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Add Project Image</h1>
    <a href="{{ route('admin.image.index') }}" class="btn btn-primary pull-right">Back</a>
</div>

@include('alert.message')

<form class="form-horizontal form-label-left" action="{{ route('admin.image.store') }}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="project">Project Name
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="project_id" id="project" class="form-control col-md-7 col-xs-12">
            <option value="" style="display: none" selected>Select Project</option>
            @foreach ($projects as $project)
                <option value="{{ $project->id }}">{{ $project->project_name }}</option>
            @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="file" id="image" name="image" class="form-control col-md-7 col-xs-12" value="">
      </div>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-center">
        <button type="submit" class="btn btn-success">Add</button>
      </div>
    </div>

  </form>

</div>
  @endsection
