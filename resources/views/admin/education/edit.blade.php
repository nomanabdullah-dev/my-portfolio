@extends('layouts.admin_layout')

@section('content')
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Edit Education Information</h1>
    <a href="{{ route('admin.education.index') }}" class="btn btn-primary pull-right">Back</a>
</div>

@include('alert.message')

<form class="form-horizontal form-label-left" action="{{ route('admin.education.update',$education->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="degree_name">Degree Name
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="degree_name" name="degree_name" class="form-control col-md-7 col-xs-12" value="{{ $education->degree_name }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="duration">Duration
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="duration" name="duration" class="form-control col-md-7 col-xs-12" value="{{ $education->duration }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institution">Institution
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="institution" name="institution" class="form-control col-md-7 col-xs-12" value="{{ $education->institution }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea name="description" id="description" rows="5" class="form-control col-md-7 col-xs-12">{{ $education->description }}</textarea>
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

{{-- summernote --}}
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

