@extends('back.blog.template')

@section('form')
	{!! Form::open(['url' => 'admin/blog', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}	
@stop
