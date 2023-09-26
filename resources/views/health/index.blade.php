@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>All Health Centers</h2>
        </div>
        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('health.create') }}"> Add Health-Center</a>
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
   <th>health_center_name</th>
   <th>province</th>
   <th>district</th>
   <th>sector</th>
   <th>category</th>
   <th>Leader</th>
   <th width="280px">Action</th>
 </tr>
 <hr>
 @foreach ($health as $key => $center)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $center->health_center_name }}</td>
    <td>{{ $center->province }}</td>
    <td>{{ $center->district }}</td>
    <td>{{ $center->sector }}</td>
    <td>{{ $center->category }}</td>
    <td>{{ $center->Leader }}</td>
    <td>

<form action="{{ route('health.destroy',$center->id) }}" method="POST">

    <a class="btn btn-info" href="{{ route('health.show',$center->id) }}">Show</a>
    @can('product-edit')
    <a class="btn btn-primary" href="{{ route('health.edit',$center->id) }}">Edit</a>
    @endcan
    @csrf
    @method('DELETE')
    @can('health-delete')
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



