@extends('app')

@section('titel','動畫資訊 網站 - 列出製作公司')

@section('am_theme','')

@section('am_contents')
        <h1>您所選取的公司</h1><br/>
        編號 : {{$company->id }}<br/>
        公司名稱 : {{$company->name }}<br/>
        創辦人 : {{$company->founder }}<br/>
        總部地址 : {{$company->head }}<br/>
        網址 : {{$company->address }}<br/>


        <h1>列出所有動畫</h1>
<table>
    <tr>
       <th>編號</th>
       <th>名稱</th>
       <th>類型</th>
       <th>原作</th>
       <th>導演</th>
       <th>集數</th>
       <th>製作公司</th>
       <th>播出時間</th>
    </tr>
    
    @foreach ($animations as $animation)

        <tr>
            <td>{{$animation->id }}</td>
            <td>{{$animation->name }}</td>
            <td>{{$animation->type }}</td>
            <td>{{$animation->orign }}</td>
            <td>{{$animation->dir }}</td>
            <td>{{$animation->ep_num}}</td>
            <td>{{$animation->company->name}}</td>
            <td>{{$animation->play_time}}</td>
        </tr>
        @endforeach
</table>
@endsection