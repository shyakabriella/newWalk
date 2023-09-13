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
<div class="col-md-12">
    <h5 class="mb-2">&nbsp;</h5>
    <div class="modal fade" id="modal-section-one{{ $section_two->id }}">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{ $section_two->title }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>{{ $section_two->content}}</p>
              <p>
                <a style="color:#fff" href="{{ route('/') }}" class="btn btn-info btn-flat btn-sm">View</a>
              </p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
      <!-- /.modal -->
        <div class="card card-success">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-12 col-xl-12">
              
              <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <div class="row koipayImgGarelly">
                     <div class="col-md-6">
                         <img class="img-fluid" src="img/homepage/{{ $section_two->imageOne }}" alt="{{ $section_two->title }}">
                     </div>
                     
                     <hr>
                                 
                  </div>
                </div>

                <h3 class="profile-username text-center">{{ $section_two->title }}</h3>

                <p class="text-muted text-center">
                  Last update <span id="section-ones{{ $section_two->id }}-time" date-data="{{ $section_two->updated_at }}"> {{ $section_two->updated_at }} </span>
                </p>
                <p>{{ $section_two->content}}</p>

                <a href="#" data-toggle="modal" data-target="#modal-section-one{{ $section_two->id }}" class="btn btn-primary"><b>View</b></a>
                <a href="{{ route('home_section_twos.edit', $section_two->id) }}" class="btn btn-success"><b>Edit</b></a>
                
                <script>
                  PIP_DATE("#section-ones{{ $section_two->id }}-time").ego();
                </script>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            </div>
          </div>
        </div>
</div>
@endsection
