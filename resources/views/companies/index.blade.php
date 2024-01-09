@extends('app')

@section('title', '動畫資訊網站 - 列出所有製作公司')

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
            color: #007BFF;
        }

        .container {
            color: #007BFF;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #000; /* 表格線顏色設定為黑色 */
        }

        th, td {
            border: 1px solid #000; /* 表格線顏色設定為黑色 */
            padding: 8px;
            text-align: left;
            color: #000; /* 字體顏色設定為黑色 */
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-info {
            color: #007BFF;
            border-color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>列出所有製作公司</h1>
    </div>

    <div class="container">
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
            @can('admin')
            
            <a href="{{ route('companies.create') }}" class="btn btn-primary">新增公司</a>
            @endcan
            <a href="{{ route('companies.index') }}" class="btn btn-info">所有公司</a>

        </div>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>編號</th>
                    <th>公司名稱</th>
                    <th>成立</th>
                    <th>創辦人</th>
                    <th>總部地址</th>
                    <th>網址</th>
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
                @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->create }}</td>
                    <td>{{ $company->founder }}</td>
                    <td>{{ $company->head }}</td>
                    <td>{{ $company->address }}</td>
                    <td><a href="{{ route('companies.show',['id'=>$company->id]) }}" class="btn btn-primary">查看</a></td>
                    @can('admin')
                    <td><a href="{{ route('companies.edit',['id'=>$company->id]) }}" class="btn btn-warning">修改</a></td>
                    <td>
                        <form action="{{ url('/companies/delete', ['id' => $company->id]) }}" method="post">
                            <button class="btn btn-danger" type="submit">刪除</button>
                            @method('delete')
                            @csrf
                        </form>
                    </td>
                    @elsecan('manager')
                    <td><a href="{{ route('companies.edit',['id' =>$company -> id]) }}" class="btn btn-warning">修改</a></td>
                    @endcan
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
