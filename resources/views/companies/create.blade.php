@extends('app')

@section('title','建立動畫公司')

@section('am_theme','建立中動畫公司')

@section('am_contents')

@section('am_contents')

@include('message.list')
    {!! Form::open(['url' => 'companies/store'] ) !!}
    @include('companies.form',['submitButtonText'=>"新增公司資料"])
    {!! Form::close() !!}
@endsection
