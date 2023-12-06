@extends('app')

@section('title','顯示特定動畫公司')

@section('animate_theme','您所選取的動畫公司資料')


@section('animations_contents')
<h1>顯示單一動畫公司</h1>
公司編號:{{ $company -> id}}<br/>
公司名稱:{{ $company -> name}}<br/>
公司成立日期:{{ $company -> create}}<br/>
創辦人:{{ $company -> founder}}<br/>
總部地址:{{ $company -> head}}<br/>
官方網站網址:{{ $company -> address}}<br/>

<h1>{{ $company -> name}}的所有動畫</h1>

<table>
    <tr>
        <th>編號</th>
        <th>名稱</th>
        <th>類型</th>
        <th>原作</th>
        <th>導演</th>
        <th>集數</th>
        <th>動畫製作</th>
        <th>播出時間</th>

    </tr>
    @foreach ($animations as $animation)
        <tr>  
            <td>{{ $animation-> id}} </td>
            <td>{{ $animation-> name}} </td>
            <td>{{ $animation-> type}} </td>
            <td>{{ $animation-> orign}} </td>
            <td>{{ $animation-> dir}} </td>
            <td>{{ $animation-> ep_num}} </td>
            <td>{{ $animation-> company-> name}} </td>
            <td>{{ $animation-> play_time}} </td>
        </tr>
        
    @endforeach
</table>
@endsection