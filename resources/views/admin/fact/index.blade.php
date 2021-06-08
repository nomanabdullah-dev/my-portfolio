@extends('layouts.admin_layout')

@section('content')
<style>
    th{
        width: 40px;
        font-size: 18px;
    }
</style>
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Facts Details</h1>
    <a href="{{ route('admin.fact.create') }}" class="btn btn-primary pull-right">Create New Fact</a>
</div>

@include('alert.message')

<div class="row" style="margin-top:10px">
    <div class="col-md-10 col-md-8">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Title1</th>
                    <th>Title2</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($facts) > 0)
                @foreach ($facts as $fact)
                <tr>
                    <td>{{ $fact->id }}</td>
                    <td>{{ $fact->icon }}</td>
                    <td>{{ $fact->number }}</td>
                    <td>{{ $fact->title1 }}</td>
                    <td>{{ $fact->title2 }}</td>
                    <td>
                        <a href="{{ route('admin.fact.edit',$fact->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.fact.destroy',$fact->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
