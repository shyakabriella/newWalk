@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-6 margin-tb">
        <div class="pull-left">
            <h2>Sample_Form</h2>
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

{!! Form::open(array('route' => 'samples.store','method'=>'POST')) !!}
<div class="row" style="background-color:white;">
   <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Patients_name:</strong>
            {!! Form::select('patient_name', $patients, null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>sample_status:</strong>

            {!! Form::select('sample_status', $status, null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Advices:</strong>
            {!! Form::textarea('Advices', null, array('placeholder' => 'Write Advices...!','class' => 'form-control')) !!}
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