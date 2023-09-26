@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>All Samples</h2>
        </div>
        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('patients.create') }}"> Record_Sample</a>
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
   <th>Patient_name</th>
   <th>Phone</th>
   <th>National_Id</th>
   <th>Health_center_name</th>
  
   <th width="280px">Action</th>
 </tr>
 <hr>
 @foreach ($patients as $key => $patient)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $patient->name }}</td>
    <td>{{ $patient->phone }}</td>
    <td>{{ $patient->Nid }}</td>
    <td>{{ $patient->health_center_name }}</td>
    <td>

<form action="#" method="POST">

    <a class="btn btn-info" href="#">Show</a>
    @can('product-edit')
    <a class="btn btn-primary" href="#">Edit</a>
    @endcan
    @csrf
    @method('DELETE')
    @can('product-delete')
    <button type="submit" class="btn btn-danger">Delete</button>
    @endcan

</form>

</td>
    
   
  </tr>
 @endforeach
</table>
{!! $data->render() !!}

<p class="text-center text-primary"><small>TB_Policy & guideline</small></p>

@endsection



