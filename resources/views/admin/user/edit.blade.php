@extends('layouts.admin_layout')

@section('content')
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Edit User Information</h1>
    <a href="{{ route('admin.user.index') }}" class="btn btn-primary pull-right">Back</a>
</div>
<div class="row">
    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $erros }}
        </div>
    @endif
<form class="form-horizontal form-label-left" action="{{ route('admin.user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12" value="{{ $user->name }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="email" name="email" class="form-control col-md-7 col-xs-12" value="{{ $user->email }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="password" name="password" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <label for="phone" class="control-label col-md-3 col-sm-3 col-xs-12">Phone </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="phone" class="form-control col-md-7 col-xs-12" type="text" name="phone" value="{{ $user->phone }}">
      </div>
    </div>
    <div class="form-group">
      <label for="profession" class="control-label col-md-3 col-sm-3 col-xs-12">Profession </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="profession" class="form-control col-md-7 col-xs-12" type="text" name="profession" value="{{ $user->profession }}">
      </div>
    </div>
    <div class="form-group">
      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Location </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="location" class="form-control col-md-7 col-xs-12" type="text" name="location" value="{{ $user->location }}">
      </div>
    </div>
    <div class="form-group">
      <label for="map_link" class="control-label col-md-3 col-sm-3 col-xs-12">Map Link </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="map_link" class="form-control col-md-7 col-xs-12" type="text" name="map_link" value="{{ $user->map_link }}">
      </div>
    </div>
    <div class="form-group">
      <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Image </label>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <input id="image" class="form-control col-md-7 col-xs-12" type="file" name="image">
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <img src="{{ url($user->image) }}" width="80px">
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
