@extends('layouts.admin_layout')

@section('content')
<style>
    th{
        width: 40px;
        font-size: 18px;
    }
</style>
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Testimonial Details</h1>
    <a href="{{ route('admin.testimonial.create') }}" class="btn btn-primary pull-right">Create New Testimonia</a>
</div>

@include('alert.message')

<div class="row" style="margin-top:10px">
    <div class="col-md-10 col-md-8">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Image</th>
                    <th>Comment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($testimonials) > 0)
                @foreach ($testimonials as $testimonial)
                <tr>
                    <td>{{ $testimonial->id }}</td>
                    <td>{{ $testimonial->name }}</td>
                    <td>{!! $testimonial->designation !!}</td>
                    <td><img src="{{ url($testimonial->image) }}" width="100px"></td>
                    <td>{!! Str::limit($testimonial->comment, 40) !!}</td>
                    <td>
                        <a href="{{ route('admin.testimonial.edit',$testimonial->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.testimonial.destroy',$testimonial->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
