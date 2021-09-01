@extends('layouts.backend.system.edit')
@push('title', 'Section About')

@push('content-body')

@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert"> {{ $message }} </div><hr>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger" role="alert"> {{ $message }} </div><hr>
@endif

<form method="POST" id="form-exilednoname" action="{{ URL::current() }}/../about-update" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
  {{ csrf_field() }}

  <input class="form-control" name="id" type="hidden" value="{{ $data->id }}">
  <input class="form-control" name="updated_by" type="hidden" value="{{ Auth::User()->id }}">
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Title </label>
    <div class="col-lg-9">
      {!! Form::text('title', (isset($data->title) ? $data->title : ''), ['class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('title') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Name </label>
    <div class="col-lg-9">
      {!! Form::text('name', (isset($data->name) ? $data->name : ''), ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>
</form>
@endpush
