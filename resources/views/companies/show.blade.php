@extends('app')

@section('titel','動畫資訊 網站 - 列出製作公司')

@section('am_theme','您所選取的公司')

@section('am_contents')
        <td>您所選取的公司</td><br/><br/>
        編號 : {{$company->id }}<br/>
        名稱 : {{$company->name }}<br/>
        創辦人 : {{$company->founder }}<br/>
        總部地址 : {{$company->head }}<br/>
        網址 : {{$company->address }}<br/>

@endsection