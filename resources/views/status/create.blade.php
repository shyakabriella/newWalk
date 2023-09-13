@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-6 margin-tb">
        <div class="pull-left">
            <h2>Sample_Form</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('status.index') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

{!! Form::open(array('route' => 'status.store','method'=>'POST')) !!}
<div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Adjust_Status</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="d-flex mb-2">
                                {!! Form::text('name', null, array('placeholder' => 'sample_status','class' => 'form-control')) !!}
                                <button type="submit" class="btn btn-primary ms-2">Add</button>
                            </div>
                        </div>
                    </div>

      @endsection