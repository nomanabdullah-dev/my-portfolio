@extends('layouts.admin_layout')

@section('content')
<style>
    th{
        width: 40px;
        font-size: 18px;
    }
</style>
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Project Image Details</h1>
    <a href="{{ route('admin.image.create') }}" class="btn btn-primary pull-right">Add New Image</a>
</div>

@include('alert.message')

<div class="row" style="margin-top:10px">
    <div class="col-md-10 col-md-8">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Project Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($images) > 0)
                @foreach ($images as $image)
                <tr>
                    <td>{{ $image->id }}</td>
                    <td>{{ $image->project->project_name }}</td>
                    <td><img src="{{ url($image->image) }}" width="100px" height="100px"></td>
                    <td>
                        <a href="{{ route('admin.image.edit',$image->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.image.destroy',$image->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
