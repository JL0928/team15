@extends('app')

@section('title','動漫資訊網站 - 列出所有動畫公司')

@section('animate_theme','動畫公司')

@section('animations_contents')
<div style = "border:2px #FFCF78 solid;border-radius:10px; padding:5px;background-color:#FFDA96">
<th><span style="font-size:26px;font-weight:bold;">篩選項目:</span></th></br> 
    <a href="{{ route('companies.index') }}">所有公司</a></br>
    <a href="{{ route('companies.up10years') }}">成立10年以上的公司</a>
    @can('admin')
    <div style = "border:2px black dashed; padding:1px">
        <th>管理員工具:</th>
        <a href="{{ route('companies.create') }}">新增公司</a></br>
    </div>
    @endcan
</div></br>

<table class = "table table-hover" style = "background-color:#FFE8BF;border-radius:20px;border-bottom:1px #ccc solid">
    <tr style = "background-color:#FFDA96">
        <th style = "border-bottom:1px black solid;">編號</th>
        <th style = "border-bottom:1px black solid;">名稱</th>
        <th style = "border-bottom:1px black solid;">成立日期</th>
        <th style = "border-bottom:1px black solid;">創辦人</th>
        <th style = "border-bottom:1px black solid;">總部地址</th>
        <th style = "border-bottom:1px black solid;">網址</th>
        <th style = "border-bottom:1px black solid;">操作1</th>
        @can('admin')
        <th style = "border-bottom:1px black solid;">操作2</th>
        <th style = "border-bottom:1px black solid;">操作3</th>
        @elsecan('manager')
        <th style = "border-bottom:1px black solid;">操作2</th>
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
{{ $companies -> links() }}
@endsection

