@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-6 margin-tb">
        <div class="pull-left">
            <h2>New Health_Center</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('health.index') }}"> Back</a>
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

{!! Form::open(array('route' => 'health.store','method'=>'POST')) !!}
<div class="row" style="background-color:white;">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Helth_C_Name:</strong>
            {!! Form::text('health_center_name', null, array('placeholder' => 'health_center_name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Province:</strong>
            {!! Form::text('province', null, array('placeholder' => 'Province','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>District:</strong>
            {!! Form::text('district', null, array('placeholder' => 'district','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Sector:</strong>
            {!! Form::text('sector', null, array('placeholder' => 'sector','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Category:</strong>
            {!! Form::text('category', null, array('placeholder' => 'category','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Leader:</strong>
            {!! Form::select('Leader', $users, null, ['class' => 'form-control']) !!}
        </div>
    </div>
   
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}
<p class="text-center text-primary"><small>TB_Policy</small></p>
@endsection