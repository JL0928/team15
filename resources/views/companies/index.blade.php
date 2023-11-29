@extends('app')

@section('am_contents')

        <h1>列出製作公司</h1>
<table>
    <tr>
       <th>編號</th>
       <th>名稱</th>
       <th>創辦人</th>
       <th>總部地址</th>
       <th>網址</th>
       <th>操作1</th>
       <th>操作2</th>
       <th>操作3</th>
    </tr>
    @for($i=0; $i<count($Companies); $i++)

        <tr>
            <td>{{$Companies[$i]['id'] }}</td>
            <td>{{$Companies[$i]['name'] }}</td>
            <td>{{$Companies[$i]['founder'] }}</td>
            <td>{{$Companies[$i]['head'] }}</td>
            <td>{{$Companies[$i]['address'] }}</td>
            <td><a href="{{route('companies.show',['id'=>$Companies[$i]['id']]) }}">查看</a></td>
            <td><a href="{{route('companies.edit',['id'=>$Companies[$i]['id']]) }}">修改</a></td>
            <td>刪除</td>

        </tr>
        @endfor
</table>

@endsection