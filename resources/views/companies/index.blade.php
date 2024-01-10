@extends('app')

@section('titel','動畫資訊 網站 - 列出所有製作公司')

@section('am_theme','')

@section('am_contents')

        <h1>列出所有製作公司</h1>
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('companies.create') }}">新增公司</a>
        <a href="{{ route('companies.index') }}">所有公司</a>
        </div>
<table>
    <tr>
       <th>編號</th>
       <th>公司名稱</th>
       <th>成立</th>
       <th>創辦人</th>
       <th>總部地址</th>
       <th>網址</th>
       <th>操作1</th>
       <th>操作2</th>
       <th>操作3</th>
    </tr>
    @foreach ($companies as $company)

        <tr>
            <td>{{$company->id }}</td>
            <td>{{$company->name }}</td>
            <td>{{$company->create }}</td>
            <td>{{$company->founder }}</td>
            <td>{{$company->head }}</td>
            <td>{{$company->address }}</td>
            <td><a href="{{route('companies.show',['id'=>$company->id]) }}">查看</a></td>
            <td><a href="{{route('companies.edit',['id'=>$company->id]) }}">修改</a></td>
            <td>
                <form action="{{ url('/companies/delete', ['id' => $company->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
        @endforeach
</table>

@endsection