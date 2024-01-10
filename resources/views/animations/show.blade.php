@extends('app')

@section('title','顯示特定動畫')

@section('animations_contents')
<div style = "padding:none;font-size:40px;font-weight:bold;">
    您所選取的動畫資料:
</div></br>
<div style = "border:2px #FFCF78 solid;border-radius:10px; padding:5px;background-color:#FFE8BF">
    <h2 style = "font-weight:bold">{{ $animation -> name}} 相關資訊</h2>
    動畫編號:{{ $animation -> id}}<br/>
    動畫類型:{{ $animation -> type}}<br/>
    原作者:{{ $animation -> orign}}<br/>
    導演:{{ $animation -> dir}}<br/>
    動畫集數:{{ $animation -> ep_num}}<br/>
    製作公司:{{ $animation -> company -> name}}<br/>
    首次播出時間:{{ $animation -> play_time}}<br/>
</div>
@endsection