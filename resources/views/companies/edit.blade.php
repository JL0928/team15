@extends('app')

@section('title', '編輯指定公司')

@section('am_theme', '編輯中的公司')

@section('am_contents')
    @include('message.list')

    {!! Form::model($company, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\CompaniesController@update',$company->id]]) !!}
        @include('companies.form',['submitButtonText'=>"更新公司資料"])
    {!! Form::close() !!}
    
    <style>
        /* Set font size for the entire content to 22px */
        body, h1, h2, h3, h4, h5, h6, p, a, label, input, select, textarea, button {
            font-size: 22px;
        }
    </style>
@endsection
