@extends('layouts.admin_layout')

@section('content')
<style>
    th{
        width: 40px;
        font-size: 18px;
    }
</style>
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Skills Details</h1>
    <a href="{{ route('admin.skill.create') }}" class="btn btn-primary pull-right">Create New Skill</a>
</div>

@include('alert.message')

<div class="row" style="margin-top:10px">
    <div class="col-md-10 col-md-8">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Skill Name</th>
                    <th>Parcentage</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($skills) > 0)
                @foreach ($skills as $skill)
                <tr>
                    <td>{{ $skill->id }}</td>
                    <td>{{ $skill->name }}</td>
                    <td>{{ $skill->percentage }}</td>
                    <td>
                        <a href="{{ route('admin.skill.edit',$skill->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.skill.destroy',$skill->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
