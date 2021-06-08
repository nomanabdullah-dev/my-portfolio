@extends('layouts.admin_layout')

@section('content')
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Edit About Information</h1>
    <a href="{{ route('admin.about.index') }}" class="btn btn-primary pull-right">Back</a>
</div>

@include('alert.message')

<form class="form-horizontal form-label-left" action="{{ route('admin.about.update',$about->id) }}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <textarea class="form-control col-md-7 col-xs-12" name="description" id="description"  rows="5">{{ $about->description }}</textarea>
      </div>
    </div>

    <div class="form-group">
      <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Image </label>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <input id="image" class="form-control col-md-7 col-xs-12" type="file" name="image">
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <img src="{{ url($about->image) }}" width="80px">
      </div>
    </div>

    <div class="form-group">
      <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Resume </label>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <input id="resume" class="form-control col-md-7 col-xs-12" type="file" name="resume">
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <a href="{{ url($about->resume) }}" class="btn btn-primary">Tap to Download</a>
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

  @section('style')
    <link rel="stylesheet" href="{{ asset('admin/build/css/summernote-bs4.min.css') }}">
  @endsection

  @section('script')

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link rel="stylesheet" href="{{ asset('admin/build/js/summernote-bs4.min.js') }}">
    <script>
        $('#description').summernote({
          placeholder: 'Hello Bootstrap 4',
          tabsize: 2,
          height: 100
        });
      </script>
  @endsection
