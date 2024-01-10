<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>動漫資訊網站 - 列出所有動漫</title>

    <style>
        /* 表格的樣式 */
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }

        /* 表格標頭的樣式 */
        .table th {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        /* 表格行的樣式 */
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        /* 添加懸停效果以提高可見性 */
        .table-hover tbody tr:hover {
            background-color: #f5f5f5;
        }

        /* 表格中連結的樣式 */
        .table a {
            text-decoration: none;
            color: #007bff;
        }

        /* 表格中按鈕的樣式 */
        .btn-default {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            cursor: pointer;
        }

        /* 分頁連結的樣式 */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        /* 選擇性：在分頁連結之間添加一些間距 */
        .pagination li {
            margin: 0 5px;
        }

        /* 黑色分隔線 */
        .separator {
            border-top: 1px solid #000;
            margin: 20px 0;
        }
    </style>
</head>
<body>

    @extends('app')

    @section('title','動漫資訊網站 - 列出所有動漫')

    @section('animations_theme','動畫名稱')

    @section('animations_contents')
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-1">
        @can('admin')    
        <a href="{{ route('animations.create') }}">新增動畫</a>
        @endcan
        <a href="{{ route('animations.index') }}">所有動畫</a>
        <a href="{{ route('animations.springseason') }}">春季動畫</a>
        <a href="{{ route('animations.summerseason') }}">夏季動畫</a>
        <a href="{{ route('animations.fallseason') }}">秋季動畫</a>
        <a href="{{ route('animations.winterseason') }}">冬季動畫</a>
        <form action="{{ url('animations/type') }}" method='POST'>
            {!! Form::label('type', '選取位置：') !!}
            {!! Form::select('type', $types, ['class' => 'form-control']) !!}
            <input class="btn btn-default" type="submit" value="查詢" />
            @csrf
        </form> 
    </div>

    <table class="table table-hover">
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
            @can('admin')
            <th>操作2</th>
            <th>操作3</th>
            @elsecan('manager')
            <th>操作3</th>
            @endcan
        </tr>

        @foreach($animations as $animation)
            <tr>  
                <td>{{ $animation->id }} </td>
                <td>{{ $animation->name }} </td>
                <td>{{ $animation->type }} </td>
                <td>{{ $animation->orign }} </td>
                <td>{{ $animation->dir }} </td>
                <td>{{ $animation->ep_num }} </td>
                <td>{{ $animation->company->name }} </td>
                <td>{{ $animation->play_time }} </td>
                <td><a href="{{route('animations.show',['id' =>$animation->id ]) }}">顯示</a></td>
                @can('admin')
                <td><a href="{{route('animations.edit',['id' =>$animation->id ]) }}">修改</a></td>
                <td>
                    <form action="{{ url('/animations/delete', ['id' => $animation->id]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
                @elsecan('manager')
                <td><a href="{{route('animations.edit',['id' =>$animation->id ]) }}">修改</a></td>
                @endcan
            </tr>
        @endforeach
    </table>

    <div class="separator"></div>

    {{ $animations->links() }}
    @endsection

</body>
</html>
