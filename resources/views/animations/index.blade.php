@extends('app')

@section('title', '動畫資訊網站 - 列出所有動畫')

@section('am_theme', '')

@section('am_contents')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>動畫列表</title>
    <style>
        h1 {
            color: #007BFF; /* 修改顏色為藍色 */
        }

        .action-links a {
            margin-right: 15px;
            text-decoration: none;
            color: #007BFF; /* 修改顏色為藍色 */
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .action-links a:hover {
            color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #000;
        }

        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>列出所有動畫</h1>
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
            @can('admin')  
            <a href="{{ route('animations.create') }}" class="btn btn-primary">新增動畫</a>
            @endcan  
            <div class="action-links">
                <a href="{{ route('animations.index') }}" class="btn btn-info">所有動畫</a>
                <a href="{{ route('animations.springseason') }}" class="btn btn-success">春季動畫</a>
                <a href="{{ route('animations.summerseason') }}" class="btn btn-warning">夏季動畫</a>
                <a href="{{ route('animations.fallseason') }}" class="btn btn-danger">秋季動畫</a>
                <a href="{{ route('animations.winterseason') }}" class="btn btn-secondary">冬季動畫</a>
            </div>
            <form action="{{ url('animations/type') }}" method='POST' class="float-right">
                {!! Form::label('type', '選取位置：') !!}
                {!! Form::select('type', $types, ['class' => 'form-control']) !!}
                <input class="btn btn-default" type="submit" value="查詢" />
                @csrf
            </form>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>編號</th>
                    <th>名稱</th>
                    <th>類型</th>
                    <th>原作</th>
                    <th>導演</th>
                    <th>集數</th>
                    <th>製作公司</th>
                    <th>播出時間</th>
                    <th>操作1</th>
                    @can('admin')
                    <th>操作2</th>
                    <th>操作3</th>
                    @elsecan('manager')
                    <th>操作2</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach ($animations as $animation)
                    <tr>
                        <td>{{ $animation->id }}</td>
                        <td>{{ $animation->name }}</td>
                        <td>{{ $animation->type }}</td>
                        <td>{{ $animation->orign }}</td>
                        <td>{{ $animation->dir }}</td>
                        <td>{{ $animation->ep_num }}</td>
                        <td>{{ $animation->company->name }}</td>
                        <td>{{ $animation->play_time }}</td>
                        <td><a href="{{ route('animations.show',['id'=>$animation->id]) }}">查看</a></td>
                        @can('admin')
                        <td><a href="{{ route('animations.edit',['id' =>$animation->id]) }}">修改</a></td>
                        <td>
                            <form action="{{ url('/animations/delete', ['id' => $animation->id]) }}" method="post">
                                <input class="btn btn-default" type="submit" value="刪除" />
                                @method('delete')
                                @csrf
                            </form>
                        </td>
                        @elsecan('manager')
                        <td><a href="{{ route('animations.edit',['id' =>$animation->id]) }}">修改</a></td>
                        @endcan
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
