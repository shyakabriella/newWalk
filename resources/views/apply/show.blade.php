@extends('layouts.auth')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>New Event-Requirements</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('apply.create') }}"> Application For Walk-t0-Remeber_Event</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
    <th>No</th>
            <th>Names</th>
            <th>ID</th>
            <th>email</th>
            <th>Tel</th>
            <th>Gender</th>
            <th>Province</th>
            <th>District</th>
            <th>Sector</th>
            <th>Event-Name</th>
            <th>Hosting-Place</th>           
            <th width="280px">Action</th>
    </tr>
    @foreach ($apply as $application)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $application->names }}</td>
            <td>{{ $application->names }}</td>
	        <td>{{ $application->nid }}</td>
            <td>{{ $application->email }}</td>
            <td>{{ $application->phone }}</td>
	        <td>{{ $application->gender }}</td>

            <td>
                <span class="pip-rwanda-location" data-type="0" data-element="{{$application->Province}}"></span>
             </td>
             <td>
                <span class="pip-rwanda-location" data-type="1" data-element="{{$application->District}}"></span>
             </td>
             <td>
                <span class="pip-rwanda-location" data-type="2" data-element="{{$application->Sector}}"></span>
             </td>
	        <td>{{ $apply->event_name }}</td>
            <td>{{ $apply->place }}</td>
            <td>
                <form action="{{ route('applications.approve', $application->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-info">Approve</button>
                </form>
                <form action="{{ route('applications.reject', $application->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to reject this application?')">Reject</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection
