@extends('layouts.admin_layout')

@section('content')
<style>
    th{
        width: 40px;
        font-size: 18px;
    }
</style>
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Education Details</h1>
    <a href="{{ route('admin.education.create') }}" class="btn btn-primary pull-right">Create New Skill</a>
</div>

@include('alert.message')

<div class="row" style="margin-top:10px">
    <div class="col-md-10 col-md-8">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Degree Name</th>
                    <th>Duration</th>
                    <th>Institution</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($educations) > 0)
                @foreach ($educations as $education)
                <tr>
                    <td>{{ $education->id }}</td>
                    <td>{{ $education->degree_name }}</td>
                    <td>{{ $education->duration }}</td>
                    <td>{{ $education->institution }}</td>
                    <td>{!! $education->description !!}</td>
                    <td>
                        <a href="{{ route('admin.education.edit',$education->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.education.destroy',$education->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
