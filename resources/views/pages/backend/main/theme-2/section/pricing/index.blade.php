@extends('layouts.backend.system.index')
@push('title', 'Section Pricings')

@push('content-head')
<th> Default </th>
<th> Premium </th>
<th> Name </th>
<th> Price </th>
<th> Description </th>
@endpush

@push('content-body')
{
  data: 'default', orderable: false, 'className': 'align-middle text-center', 'width': '1',
  render: function ( data, type, row ) {
    if ( data == 1 ) { return '<a href="javascript:void(0);" id="disable" data-toggle="tooltip" data-original-title="Disable" data-id="' + row.id + '"><span class="label label-info label-inline"> {{ trans("default.label.yes") }} </span></a>'; }
    if ( data == 2 ) { return '<a href="javascript:void(0);" id="enable" data-toggle="tooltip" data-original-title="Enable" data-id="' + row.id + '"><span class="label label-dark label-inline"> {{ trans("default.label.no") }} </span></a>'; }
  }
},
{
  data: 'premium', orderable: false, 'className': 'align-middle text-center', 'width': '1',
  render: function ( data, type, row ) {
    if ( data == 1 ) { return '<a href="javascript:void(0);" id="disable" data-toggle="tooltip" data-original-title="Disable" data-id="' + row.id + '"><span class="label label-info label-inline"> {{ trans("default.label.yes") }} </span></a>'; }
    if ( data == 2 ) { return '<a href="javascript:void(0);" id="enable" data-toggle="tooltip" data-original-title="Enable" data-id="' + row.id + '"><span class="label label-dark label-inline"> {{ trans("default.label.no") }} </span></a>'; }
  }
},
{ data: 'name' },
{ data: 'price' },
{ data: 'description' },
@endpush
