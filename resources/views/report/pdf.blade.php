@extends('layouts.auth')

@section('content')



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>


<style>
    /* Customize the width of the table container */
    .table-container {
        width: 7%; /* Adjust as needed */
        margin: auto; /* Center the table */
        position:relative;
        right:850px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>New Event-Requirements</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" > List of All Application</a>
        </div>
    </div>
</div>
@php
    $i = 0;
@endphp 

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<!-- Use a container div with a custom class for the table -->
<div class="table-container">
    <table id="myTable" class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Names</th>
                <th>ID</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Gender</th>
                <th>Province</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($apply as $application)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $application->names }}</td>
                    <td>{{ $application->nid }}</td>
                    <td>{{ $application->email }}</td>
                    <td>{{ $application->phone }}</td>
                    <td>{{ $application->gender }}</td>
                    <td>
                        <span class="pip-rwanda-location" data-type="0" data-element="{{ $application->Province }}"></span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<a class="btn btn-info" href="{{ url('/generate-pdf') }}">Generate PDF</a>
<a class="btn btn-success" href="{{ url('/generate-excel') }}">Generate Excel</a>

<script>
   $(document).ready(function () {
    $('#myTable').DataTable();
});

</script>

<p class="text-center text-primary"><small>I Walk to remember</small></p>

@endsection
