@extends('layouts.backend.system.index_non-editable')
@push('title', 'Themes')

@push('content-head')
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'description' },
@endpush
