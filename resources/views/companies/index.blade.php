
@extends('app')

@section('animations_contents')
<h1>列出所有公司</h1>

<table>
    <tr>
        <th>名稱</th>
        <th>成立</th>
        <th>創辦人</th>
        <th>總部地址</th>
        <th>網址</th>
        <th>操作1</th>
        <th>操作3</th>
        <th>操作3</th>
    </tr>
@for($i=0; $i<count($Companies); $i++)
    
    <tr>
        <td>{{ $Companies[$i]['name']}} </td>
        <td>{{ $Companies[$i]['create']}} </td>
        <td>{{ $Companies[$i]['founder']}} </td>
        <td>{{ $Companies[$i]['head']}} </td>
        <td>{{ $Companies[$i]['address']}} </td>
        <td><a href="{{route('companies.show',['id' =>$Companies[$i]['id']]) }}">顯示</a></td>
        <td><a href="{{route('companies.edit',['id' =>$Companies[$i]['id']]) }}">修改</a></td>
        <td>刪除</td>
    </tr>
    
@endfor
</table>
@endsection