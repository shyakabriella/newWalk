@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-6 margin-tb">
        <div class="pull-left">
            <h2>Sample_Form-Recording</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('patients.index') }}"> Back</a>
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

{!! Form::open(array('route' => 'patients.store','method'=>'POST')) !!}
<div class="row" style="background-color:white;">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Patients_name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Patients_name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Phone:</strong>
            {!! Form::text('phone', null, array('placeholder' => 'Phone','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>National_Id:</strong>
            {!! Form::text('Nid', null, array('placeholder' => 'National_Id','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>health_center_name:</strong>
            {!! Form::select('health_center_name', $health, null, ['class' => 'form-control']) !!}
        </div>
    </div>
  
   
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <br><br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}
<p class="text-center text-primary"><small>TB_Policy</small></p>
@endsection