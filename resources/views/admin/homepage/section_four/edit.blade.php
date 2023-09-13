@extends('layouts.dashboard')

@section('title', 'Dashboard | KOIPay')

@section('page_header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Section One</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Section One</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong>Success:</strong> {{ Session::get('success') }}
            </div>
    
        @endif
    
        @if (count($errors) > 0)
    
          <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong>Errors:</strong>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div> 
    
        @endif
      </div>
    </div>
    <div class="row">
      {!! Form::model($section_four, ['route' => ['home_section_fours.update', $section_four->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'files' => true ]) !!}
      <div class="col-md-">
        <div class="box box-warning">
          <div class="box-body">
              <!-- text input -->
              <div class="col-md-12">
                <h2>Section One</h2>
                <div class="row koipayImgGarelly">
                  <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('img/homepage/'.$section_four->imageOne) }}" alt="{{ $section_four->title }}">
                    <span class="form-group col-md-6 input-image-cont">
                      {{ Form::file('imageOne') }}
                    </span>
                  </div>
                  <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('img/homepage/'.$section_four->imageTwo) }}" alt="{{ $section_four->title }}">
                    <span class="form-group col-md-6 input-image-cont">
                      {{ Form::file('imageTwo') }}
                    </span>
                  </div>
                  <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('img/homepage/'.$section_four->imageThree) }}" alt="{{ $section_four->title }}">
                    <span class="form-group col-md-6 input-image-cont">
                      {{ Form::file('imageThree') }}
                    </span>
                  </div>
                  <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('img/homepage/'.$section_four->imageFour) }}" alt="{{ $section_four->title }}">
                    <span class="form-group col-md-6 input-image-cont">
                      {{ Form::file('imageFour') }}
                    </span>
                  </div>
                </div>
                <div class="row">
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        {{ Form::label('title', 'First text:') }}
                        {{ Form::text('title', null, ['class' =>'form-control']) }}
                    </div>
                    <div class="col-md-6">
                      {{ Form::label('content', 'Details:') }}
                      {{ Form::text('content', null, ['class' =>'form-control']) }}
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        {{ Form::label('titleTwo', 'First text:') }}
                        {{ Form::text('titleTwo', null, ['class' =>'form-control']) }}
                    </div>
                    <div class="col-md-6">
                      {{ Form::label('contentTwo', 'Details:') }}
                      {{ Form::text('contentTwo', null, ['class' =>'form-control']) }}
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        {{ Form::label('titleThree', 'First text:') }}
                        {{ Form::text('titleThree', null, ['class' =>'form-control']) }}
                    </div>
                    <div class="col-md-6">
                      {{ Form::label('contentThree', 'Details:') }}
                      {{ Form::text('contentThree', null, ['class' =>'form-control']) }}
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        {{ Form::label('titleFour', 'First text:') }}
                        {{ Form::text('titleFour', null, ['class' =>'form-control']) }}
                    </div>
                    <div class="col-md-6">
                      {{ Form::label('contentFour', 'Details:') }}
                      {{ Form::text('contentFour', null, ['class' =>'form-control']) }}
                    </div>
                </div>
                
              </div>
              <hr />
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- ./col -->
    
      <div class="col-md-4">
          <div class="well">
              <dl class="dl-horizontal">
                  <dt>Created At: Date</dt>
                  <dd>{{ date('M j, Y h:ia', strtotime($section_four->created_at)) }}</dd>
              </dl>
    
              <dl class="dl-horizontal">
                  <dt>Last Updated: Date</dt>
                  <dd>{{ date('M j, Y h:ia', strtotime($section_four->updated_at)) }}</dd>
              </dl>
    
              <hr>
    
              <div class="row">
                  <div class="col-sm-12">
                      {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                  </div>
              </div>
          </div>
      </div>
      <!-- ./col -->
      {!! Form::close() !!}
</div>
@endsection
