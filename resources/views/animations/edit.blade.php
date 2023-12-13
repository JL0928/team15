@extends('app')

@section('title', '編輯指定動畫')

@section('am_theme', '編輯中的動畫')

@section('am_contents')
{!! Form::model($animation, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\AnimationsController@update',$animation->id]]) !!}
    @include('animations.form', ['submitButtonText'=>"更新動畫資料"])
    {!! Form::close() !!}
@endsection
