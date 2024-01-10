@extends('app')

@section('title', '建立公司表單')

@section('animations_theme', '建立公司的表單')


@section('animations_contents')    
    @include('message.list')
    {!! Form::open(['url' => 'companies/store']) !!}
    @include('companies.form', ['submitButtonText'=>"新增公司資料"])
    {!! Form::close() !!}
@endsection

