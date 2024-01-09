@extends('app')

@section('title','動漫資訊網站 - 列出所有動畫公司')

@section('animate_theme','動畫公司')

@section('animations_contents')
<div style = "border:2px black solid; padding:5px">
<th><span style="font-size:26px;font-weight:bold;">篩選項目:</span></th></br> 
    <a href="{{ route('companies.index') }}">所有公司</a></br>
    <a href="{{ route('companies.up10years') }}">成立10年以上的公司</a>
</div>
@can('admin')
<div style = "border:2px black solid; padding:1px">
    <th>管理員工具:</th>
    <a href="{{ route('companies.create') }}">新增公司</a></br>
</div>
@endcan
<table class = "table table-hover">
    <tr style = "background-color:#E8E8E8">
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

