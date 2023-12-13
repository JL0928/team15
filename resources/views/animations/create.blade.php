@extends('app')

@section('title', '建立動畫表單')

@section('animations_theme', '建立動畫的表單')

@section('animations_contents')
    {!! Form::open(['url' => 'animations/store']) !!}
    @include('animations.form', ['submitButtonText'=>"新增動畫資料"])
    {!! Form::close() !!}
@endsection
