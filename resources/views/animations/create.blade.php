@extends('app')

@section('title','建立動畫作品')

@section('am_theme','建立中動畫作品')

@section('am_contents')

@section('am_contents')
    {!! Form::open(['url' => 'animations/store'] ) !!}
    @include('animations.form',['submitButtonText'=>"新增動畫資料"])
    {!! Form::close() !!}
@endsection
