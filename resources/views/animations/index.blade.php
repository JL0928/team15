@extends('app')

@section('title','動漫資訊網站 - 列出所有動漫')

@section('animate_theme','動畫名稱')

@section('animations_contents')
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    <a href="{{ route('animations.create') }}">新增動畫</a>
    <a href="{{ route('animations.index') }}">所有動畫</a>
    <a href="{{ route('animations.spring_season') }}">春季動畫</a>
    <a href="{{ route('animations.summer_season') }}">夏季動畫</a>
    <a href="{{ route('animations.fall_season') }}">秋季動畫</a>
    <a href="{{ route('animations.winter_season') }}">冬季動畫</a>
</div>
<table>
    <tr>
        <th>編號</th>
        <th>名稱</th>
        <th>類型</th>
        <th>原作</th>
        <th>導演</th>
        <th>集數</th>
        <th>動畫製作</th>
        <th>首次播出時間</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($animations as $animation)

        <tr>  
            <td>{{ $animation->id}} </td>
            <td>{{ $animation->name}} </td>
            <td>{{ $animation-> type}} </td>
            <td>{{ $animation-> orign}} </td>
            <td>{{ $animation-> dir}} </td>
            <td>{{ $animation-> ep_num}} </td>
            <td>{{ $animation-> company-> name}} </td>
            <td>{{ $animation-> play_time}} </td>
            <td><a href="{{route('animations.show',['id' =>$animation -> id]) }}">顯示</a></td>
            <td><a href="{{route('animations.edit',['id' =>$animation -> id]) }}">修改</a></td>
            <td>
                <form action = "{{ url('/animations/delete', ['id' => $animation->id]) }}" method = "post">
                    <input class = "btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
        
    @endforeach
</table>
@endsection