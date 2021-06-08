@extends('layouts.admin_layout')

@section('content')
<style>
    th{
        width: 40px;
        font-size: 18px;
    }
</style>
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Service Details</h1>
    <a href="{{ route('admin.service.create') }}" class="btn btn-primary pull-right">Create New Service</a>
</div>

@include('alert.message')

<div class="row" style="margin-top:10px">
    <div class="col-md-10 col-md-8">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($services) > 0)
                @foreach ($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->icon }}</td>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->description }}</td>
                    <td>
                        <a href="{{ route('admin.service.edit',$service->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.service.destroy',$service->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
