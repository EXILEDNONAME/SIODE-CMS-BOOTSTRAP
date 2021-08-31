@extends('layouts.backend.system.edit')
@push('title', 'Section Features')

@push('content-body')

@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert"> {{ $message }} </div><hr>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger" role="alert"> {{ $message }} </div><hr>
@endif

<form method="POST" id="form-exilednoname" action="{{ URL::current() }}/../feature-update" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
  {{ csrf_field() }}

  <input class="form-control" name="id" type="hidden" value="{{ $data->id }}">
  <input class="form-control" name="updated_by" type="hidden" value="{{ Auth::User()->id }}">
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Title 1 </label>
    <div class="col-lg-9">
      {!! Form::text('content_1_title', (isset($data->content_1_title) ? $data->content_1_title : ''), ['class' => $errors->has('content_1_title') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('content_1_title') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Description 1 </label>
    <div class="col-lg-9">
      {!! Form::textarea('content_1_description', (isset($data->content_1_description) ? $data->content_1_description : ''), ['class' => $errors->has('content_1_description') ? 'form-control is-invalid' : 'form-control']) !!}
      @error('content_1_description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Title 2 </label>
    <div class="col-lg-9">
      {!! Form::text('content_2_title', (isset($data->content_2_title) ? $data->content_2_title : ''), ['class' => $errors->has('content_2_title') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('content_2_title') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Description 2 </label>
    <div class="col-lg-9">
      {!! Form::textarea('content_2_description', (isset($data->content_2_description) ? $data->content_2_description : ''), ['class' => $errors->has('content_2_description') ? 'form-control is-invalid' : 'form-control']) !!}
      @error('content_2_description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Title 3 </label>
    <div class="col-lg-9">
      {!! Form::text('content_3_title', (isset($data->content_3_title) ? $data->content_3_title : ''), ['class' => $errors->has('content_3_title') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('content_3_title') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Description 3 </label>
    <div class="col-lg-9">
      {!! Form::textarea('content_3_description', (isset($data->content_3_description) ? $data->content_3_description : ''), ['class' => $errors->has('content_3_description') ? 'form-control is-invalid' : 'form-control']) !!}
      @error('content_4_description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Title 4 </label>
    <div class="col-lg-9">
      {!! Form::text('content_4_title', (isset($data->content_4_title) ? $data->content_4_title : ''), ['class' => $errors->has('content_4_title') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('content_4_title') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Description 4 </label>
    <div class="col-lg-9">
      {!! Form::textarea('content_4_description', (isset($data->content_4_description) ? $data->content_4_description : ''), ['class' => $errors->has('content_4_description') ? 'form-control is-invalid' : 'form-control']) !!}
      @error('content_4_description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
</form>
@endpush
