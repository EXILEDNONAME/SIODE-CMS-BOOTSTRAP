<div class="form-group row">
  <div class="col-lg-3">
    <label> Context 1 </label>
    {!! Form::number('context_1', (isset($data->context_1) ? $data->context_1 : ''), ['class' => $errors->has('context_1') ? 'form-control is-invalid' : 'form-control', 'required' => 'required', 'placeholder' => 'Enter Number Context 1']) !!}
    <span class="form-text text-muted"> Please enter number context 1 </span>
  </div>
  <div class="col-lg-3">
    <label> Context 2 </label>
    {!! Form::number('context_2', (isset($data->context_2) ? $data->context_2 : ''), ['class' => $errors->has('context_2') ? 'form-control is-invalid' : 'form-control', 'required' => 'required', 'placeholder' => 'Enter Number Context 2']) !!}
    <span class="form-text text-muted"> Please enter number context 1 </span>
  </div>
  <div class="col-lg-3">
    <label> Context 3 </label>
    {!! Form::number('context_3', (isset($data->context_3) ? $data->context_3 : ''), ['class' => $errors->has('context_3') ? 'form-control is-invalid' : 'form-control', 'required' => 'required', 'placeholder' => 'Enter Number Context 3']) !!}
    <span class="form-text text-muted"> Please enter number context 1 </span>
  </div>
  <div class="col-lg-3">
    <label> Context 4 </label>
    {!! Form::number('context_4', (isset($data->context_4) ? $data->context_4 : ''), ['class' => $errors->has('context_4') ? 'form-control is-invalid' : 'form-control', 'required' => 'required', 'placeholder' => 'Enter Number Context 4']) !!}
    <span class="form-text text-muted"> Please enter number context 1 </span>
  </div>
</div>
