@extends('layouts.admin_layout')

@section('content')
<style>
    th{
        width: 40px;
        font-size: 18px;
    }
</style>
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Experience Details</h1>
    <a href="{{ route('admin.experience.create') }}" class="btn btn-primary pull-right">Create New Experience</a>
</div>

@include('alert.message')

<div class="row" style="margin-top:10px">
    <div class="col-md-10 col-md-8">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Designation</th>
                    <th>Duration</th>
                    <th>Organization</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($experiences) > 0)
                @foreach ($experiences as $experience)
                <tr>
                    <td>{{ $experience->id }}</td>
                    <td>{{ $experience->designation }}</td>
                    <td>{{ $experience->duration }}</td>
                    <td>{{ $experience->organization }}</td>
                    <td>{!! $experience->description !!}</td>
                    <td>
                        <a href="{{ route('admin.experience.edit',$experience->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.experience.destroy',$experience->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
