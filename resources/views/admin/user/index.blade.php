@extends('layouts.admin_layout')


@section('content')
<style>
    th{
        width: 40px;
        font-size: 20px;
    }
</style>
<div class="row">
    <h1 style="display: inline-block; margin-top:0">User Details</h1>
    <a href="{{ route('admin.user.edit',$user->id) }}" class="btn btn-primary pull-right">Edit</a>
</div>

@include('alert.message')

<div class="row" style="margin-top:10px">
    <div class="col-md-10 col-md-8">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead>
            </thead>
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $user->phone }}</td>
                </tr>
                <tr>
                    <th>Profession</th>
                    <td>{{ $user->profession }}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><img src="{{ url($user->image) }}" width="200px"></td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td>{{ $user->location }}</td>
                </tr>
                <tr>
                    <th>Map Link</th>
                    <td>{{ Str::limit($user->map_link, 60) }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
