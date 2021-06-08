@extends('layouts.admin_layout')

@section('content')
<style>
    th{
        width: 40px;
        font-size: 20px;
    }
</style>
<div class="row">
    <h1 style="display: inline-block; margin-top:0">About Details</h1>
    <a href="{{ route('admin.about.edit',$about->id) }}" class="btn btn-primary pull-right">Edit</a>
</div>

@include('alert.message')

<div class="row" style="margin-top:10px">
    <div class="col-md-10 col-md-8">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead>
            </thead>
            <tbody>
                    <th>Description</th>
                    <td>{!! $about->description !!}</td>
                </tr>
                <tr>
                    <th>Image</th>

                    <td><img src="{{ url($about->image) }}" width="200px"></td>
                </tr>
                <tr>
                    <th>Resume</th>
                    @if (url($about->resume))
                        <td><a href="{{ url($about->resume) }}" class="btn btn-primary">Tap to Download</a></td>
                    @endif
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
