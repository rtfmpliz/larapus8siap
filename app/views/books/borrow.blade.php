{{-- @extends('layouts.master')
@section('asset')
@include('layouts.partials.datatable')
@stop
@section('title')
{{ $title }}
@stop
@section('content')
{{ Datatable::table()
->addColumn('id','title', 'author', 'amount', '')
->setOptions('aoColumnDefs',array(
array(
'bVisible' => false,
'aTargets' => [0]),
array(
'sTitle' => 'Judul',
'aTargets' => [1]),
array(
'sTitle' => 'Jumlah',
'aTargets' => [2]),
array(
'sTitle' => 'Penulis',
'aTargets' => [3]),
array(
'bSortable' => false,
'aTargets' => [4])
))
->setOptions('bProcessing', true)
->setUrl(route('member.books'))
->render('datatable.uikit') }}
@stop --}}

@extends('layouts.master')
@section('asset')
@include('layouts.partials.datatable')
@stop
@section('title')
{{ $title }}
@stop
@section('content')
@include('books._borrowdatatable')
@stop