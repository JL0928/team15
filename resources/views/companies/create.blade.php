@extends('app')

@section('title','建立公司表單')

@section('animate_theme','建立公司的表單')

@section('animations_BG_colors')
    @include('message.list')
    {!! Form::open(['url' => 'companies/store'] ) !!}
    @include('companies.form',['submitButtonText'=>"新增公司資料"])
    {!! Form::close() !!}
@endsection