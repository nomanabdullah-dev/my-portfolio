@extends('layouts.admin_layout')

@section('content')
<style>
    th{
        width: 40px;
        font-size: 18px;
    }
</style>
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Portfolio Projects Details</h1>
    <a href="{{ route('admin.project.create') }}" class="btn btn-primary pull-right">Create New Project</a>
</div>

@include('alert.message')

<div class="row" style="margin-top:10px">
    <div class="col-md-12 col-md-12">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Project Name</th>
                    <th>Thumbnail</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Url</th>
                    <th>Client Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($projects) > 0)
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->category->category_name }}</td>
                    <td>{{ $project->project_name }}</td>
                    <td><img src="{{ url($project->thumbnail) }}" width="100px"></td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->date }}</td>
                    <td>{{ $project->url }}</td>
                    <td>{{ $project->client_name }}</td>
                    <td>
                        <a href="{{ route('admin.project.edit',$project->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.project.destroy',$project->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
