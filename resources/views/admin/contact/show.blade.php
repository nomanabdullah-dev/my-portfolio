@extends('layouts.admin_layout')

@section('content')
<div class="row">
    <h1 style="display: inline-block; margin-top:0">Show Message Information</h1>
    <a href="{{ route('admin.contact.index') }}" class="btn btn-primary pull-right">Back</a>
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
                    <td>{{ $contact->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $contact->email }}</td>
                </tr>
                <tr>
                    <th>Subject</th>
                    <td>{{ $contact->subject }}</td>
                </tr>
                <tr>
                    <th>Message</th>
                    <td>{{ $contact->message }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
  @endsection
