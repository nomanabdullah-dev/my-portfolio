@extends('layouts.admin_layout')

@section('content')
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Edit Fact Information</h1>
    <a href="{{ route('admin.user.index') }}" class="btn btn-primary pull-right">Back</a>
</div>

@include('alert.message')

<form class="form-horizontal form-label-left" action="{{ route('admin.fact.update',$fact->id) }}" method="POST">
    @csrf
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="icon">Icon
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="icon" name="icon" class="form-control col-md-7 col-xs-12" value="{{ $fact->icon }}">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Number
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="number" name="number" class="form-control col-md-7 col-xs-12" value="{{ $fact->number }}">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title1">Title1
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="title1" name="title1" class="form-control col-md-7 col-xs-12" value="{{ $fact->title1 }}">
          </div>
        </div>
        <div class="form-group">
          <label for="title2" class="control-label col-md-3 col-sm-3 col-xs-12">Title2 </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="title2" class="form-control col-md-7 col-xs-12" type="text" name="title2" value="{{ $fact->title2 }}">
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
