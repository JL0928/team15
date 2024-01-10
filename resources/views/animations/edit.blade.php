@extends('app')

@section('title','編輯特定動畫')

@section('animate_theme','編輯中的動畫資料')

@section('animations_BG_colors')
    @include('message.list')
    {!! Form::model($animation, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\AnimationsController@update',$animation->id]]) !!}
    @include('animations.form',['submitButtonText'=>"更新動畫資料"])
    {!! Form::close() !!}
@endsection