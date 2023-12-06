@extends('app')

@section('title','顯示特定動畫公司')

@section('animate_theme','您所選取的動畫公司資料')


@section('animations_contents')
<h1>列出單一動畫公司</h1>
公司編號:{{ $company -> id}}<br/>
公司名稱:{{ $company -> name}}<br/>
公司成立日期:{{ $company -> create}}<br/>
創辦人:{{ $company -> founder}}<br/>
總部地址:{{ $company -> head}}<br/>
官方網站網址:{{ $company -> address}}<br/>
@endsection