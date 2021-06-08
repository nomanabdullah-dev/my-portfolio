@extends('layouts.admin_layout')

@section('content')
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Edit Service Information</h1>
    <a href="{{ route('admin.service.index') }}" class="btn btn-primary pull-right">Back</a>
</div>

@include('alert.message')

<form class="form-horizontal form-label-left" action="{{ route('admin.service.update',$service->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="icon">Icon
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="icon" name="icon" class="form-control col-md-7 col-xs-12" value="{{ $service->icon }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="title" name="title" class="form-control col-md-7 col-xs-12" value="{{ $service->title }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea name="description" id="description" rows="5" class="form-control col-md-7 col-xs-12">{{ $service->description }}</textarea>
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
