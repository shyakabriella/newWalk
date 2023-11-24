@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-6 margin-tb">
        <div class="pull-left">
            <h2>TB_Policy  Documents</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('polic.index') }}"> Back</a>
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

{!! Form::open(array('route' => 'polic.store','method'=>'POST')) !!}
<div class="row" style="background-color:white;">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Title:</strong>
            {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Category:</strong>
            {!! Form::text('category', null, array('placeholder' => 'Category','class' => 'form-control')) !!}
        </div>
    </div>

    

    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Publication_date:</strong>
            {!! Form::date('publication_date', null, array('placeholder' => 'publication_date','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Source_organization:</strong>
            {!! Form::text('source_organization', null, array('placeholder' => 'source_organization','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Description:</strong>
            {!! Form::textarea('description', null, array('placeholder' => 'description','class' => 'form-control')) !!}
        </div>
    </div>
   
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}
<p class="text-center text-primary">
    
<small>TB_Policy</small></p>
@endsection