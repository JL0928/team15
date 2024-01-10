@extends('app')

@section('title', '編輯特定動畫')

@section('animations_theme', '編輯中的動畫')

@section('animations_contents')
    @include('message.list')
    {!! Form::model($animation, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\AnimationsController@update', $animation->id]]) !!}
    @include('animations.form', ['submitButtonText'=>"更新動畫資料"])
    {!! Form::close() !!}
@endsection