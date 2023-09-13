@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>All Samples</h2>
        </div>
        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('documents.create') }}"> Record_Documents</a>
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
 @foreach ($documents as $key => $document)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $document->title }}</td>
    <td>{{ $document->description }}</td>
    <td>{{ $document->category }}</td>
    <td>{{ $document->publication_date }}</td>
    <td>{{ $document->source_organization }}</td>
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
{!! $documents->render() !!}

<p class="text-center text-primary"><small>TB_Policy & guideline</small></p>

@endsection



