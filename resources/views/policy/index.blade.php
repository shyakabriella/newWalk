@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>All Samples</h2>
        </div>
        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('polic.create') }}"> Record_Policy</a>
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
   <th>title</th>
   <th>description</th>
   <th>category</th>
   <th>publication_date</th>
   <th>source_organization</th>
   <th width="280px">Action</th>
 </tr>
 <hr>
 @foreach ($policy as $key => $policy)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $policy->title }}</td>
    <td>{{ $policy->description }}</td>
    <td>{{ $policy->category }}</td>
    <td>{{ $policy->publication_date }}</td>
    <td>{{ $policy->source_organization }}</td>
    <td>

<form action="{{ route('polic.destroy',$policy->id) }}" method="POST">

    <a class="btn btn-info" href="{{ route('polic.show',$policy->id) }}">Show</a>
    @can('policy-edit')
    <a class="btn btn-primary" href="{{ route('polic.edit',$policy->id) }}">Edit</a>
    @endcan
    
    @csrf
    @method('DELETE')
   
    <button type="submit" class="btn btn-danger">Delete</button>
  
</form>
</td>   
  </tr>
 @endforeach
</table>


<p class="text-center text-primary">
  <small>TB_Policy & guideline</small></p>

@endsection
