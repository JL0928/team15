@extends('app')

@section('title', '動漫資訊網站 - 列出所有動畫公司')

@section('animations_theme', '動畫公司')

@section('animations_contents')
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

<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-1">
    @can('admin')
    <a href="{{ route('companies.create') }}" class="btn">新增公司</a>
    @endcan
    <a href="{{ route('companies.index') }}" class="btn">所有公司</a>
    <a href="{{ route('companies.up10years') }}" class="btn">資深公司</a>
</div>

<table class="table">
    <tr>
        <th>編號</th>
        <th>名稱</th>
        <th>成立</th>
        <th>創辦人</th>
        <th>總部地址</th>
        <th>網址</th>
        <th>操作1</th>
        @can('admin')
        <th>操作2</th>
        <th>操作3</th>
        @elsecan('manager')
        <th>操作3</th>
        @endcan
    </tr>
    @foreach($companies as $company)
        <tr>
            <td>{{ $company->id }} </td>
            <td>{{ $company->name }} </td>
            <td>{{ $company->create }} </td>
            <td>{{ $company->founder }} </td>
            <td>{{ $company->head }} </td>
            <td>{{ $company->address }} </td>
            <td><a href="{{route('companies.show',['id' =>$company->id ]) }}" class="btn">顯示</a></td>
            @can('admin')
            <td><a href="{{route('companies.edit',['id' =>$company->id ]) }}" class="btn">修改</a></td>
            <td>
                <form action="{{ url('/companies/delete', ['id' => $company->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
            @elsecan('manager')
            <td><a href="{{route('companies.edit',['id' =>$company->id ]) }}" class="btn">修改</a></td>
            @endcan
        </tr>
    @endforeach
</table>
@endsection
