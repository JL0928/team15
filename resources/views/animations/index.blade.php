<html>
    <head>

    </head>
    <body>
        <h1>列出所有動畫</h1>
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
       <th>操作1</th>
       <th>操作2</th>
       <th>操作3</th>
    </tr>
    
    @for($i=0; $i<count($Animations);$i++)

        <tr>
            <td>{{$Animations[$i]['id'] }}</td>
            <td>{{$Animations[$i]['name'] }}</td>
            <td>{{$Animations[$i]['type'] }}</td>
            <td>{{$Animations[$i]['orign'] }}</td>
            <td>{{$Animations[$i]['dir'] }}</td>
            <td>{{$Animations[$i]['ep_num'] }}</td>
            <td>{{$Animations[$i]['cp_id'] }}</td>
            <td>{{$Animations[$i]['play_time'] }}</td>
            <td><a href="{{route('animations.show',['id'=>$Animations[$i]['id']]) }}">查看</a></td>
            <td><a href="{{route('animations.edit',['id'=>$Animations[$i]['id']]) }}">修改</a></td>
            <td>刪除</td>

        </tr>
        @endfor
</table>

    </body>
</html>