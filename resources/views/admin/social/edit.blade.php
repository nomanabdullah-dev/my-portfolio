@extends('layouts.admin_layout')

@section('content')
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Edit Icon Information</h1>
    <a href="{{ route('admin.social.index') }}" class="btn btn-primary pull-right">Back</a>
</div>

@include('alert.message')

<form class="form-horizontal form-label-left" action="{{ route('admin.social.update',$icon->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Icon Name
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="name" name="icon" class="form-control col-md-7 col-xs-12" value="{{ $icon->icon }}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="link">Link
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="link" name="link" class="form-control col-md-7 col-xs-12" value="{{ $icon->link }}">
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
