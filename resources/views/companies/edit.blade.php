@extends('app')

@section('title','編輯特定公司')

@section('animate_theme','編輯中的公司資料')

@section('animations_contents')
    {!! Form::model($company, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\CompaniesController@update',$company->id]]) !!}
    @include('companies.form',['submitButtonText'=>"更新公司資料"])
    {!! Form::close() !!}
@endsection