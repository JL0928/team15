
@extends('app')

@section('title', '顯示特定公司')

@section('animations_theme', '您所選取的公司資料')

@section('animations_contents')
<h1>顯示單一公司</h1>
公司編號：{{ $animation->id }}<br/>
公司名稱：{{ $animation->name }}<br/>
成立時間：{{ $animation->create }}<br/>
公司創辦人：{{ $animation->founder }}<br/>
總部地址：{{ $animation->head }}<br/>
公司網址：{{ $animation->address }}<br/>
@endsection
