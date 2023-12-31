@extends('app')

@section('title','動漫資訊網站 - 列出所有動畫公司')

@section('animate_theme','動畫公司')

@section('animations_contents')
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    @can('admin')
    <a href="{{ route('companies.create') }}">新增公司</a>
    @endcan
    <a href="{{ route('companies.index') }}">所有公司</a>
    <a href="{{ route('companies.up10years') }}">成立10年以上的公司</a>
</div>
<table>
    <tr>
        <th>編號</th>
        <th>名稱</th>
        <th>成立日期</th>
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

    @foreach($companies as $company)
        <tr>
            <td>{{$company->id}} </td>
            <td>{{$company->name}} </td>
            <td>{{$company->create}} </td>
            <td>{{$company->founder}} </td>
            <td>{{$company->head}} </td>
            <td>{{$company->address}} </td>
            <td><a href="{{route('companies.show',['id' =>$company -> id]) }}">顯示</a></td>
            @can('admin')
            <td><a href="{{route('companies.edit',['id' =>$company -> id]) }}">修改</a></td>
            <td>
                <form action = "{{ url('/companies/delete', ['id' => $company->id]) }}" method = "post">
                    <input class = "btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
            @elsecan('manager')
            <td><a href="{{route('companies.edit',['id' =>$company -> id]) }}">修改</a></td>
            @endcan
        </tr>

    @endforeach
</table>
@endsection

