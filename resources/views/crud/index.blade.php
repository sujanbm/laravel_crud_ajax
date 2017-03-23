@extends('layouts.app')
@section('script_src')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @endsection

@section('content')

    <div class="container">
        <h2>CRUD operations in Laravel</h2>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#addModal">Add</button>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>School</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student -> first_name}}</td>
                    <td>{{$student -> last_name}}</td>
                    <td>{{$student -> email}}</td>
                    <td>{{$student->school}}</td>
                    <td>
                        <button class="btn btn-info" data-toggle="modal" data-target="#viewModal" onclick="fun_view('{{$student -> id}}')">View</button>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#editModal" onclick="fun_edit('{{$student -> id}}')">Edit</button>
                        <button class="btn btn-danger" onclick="fun_delete('{{$student -> id}}')">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <input type="hidden" name="hidden_view" id="hidden_view" value="{{action('StudentController@show')}}">
        <input type="hidden" name="hidden_delete" id="hidden_delete" value="{{url('crud/delete')}}">
        @include('crud.create_modal')
        @include('crud.view_modal')
        @include('crud.edit_modal')
    </div>

@endsection

@section('ajax_scripts')
    @include('crud.ajax_script')
    @endsection