@extends('app')

@section('title','動漫資訊網站 - 列出所有動漫')

@section('animate_theme','動畫列表')

@section('animations_contents')
<div style = "border:2px #FFCF78 solid;border-radius:10px; padding:5px;background-color:#FFDA96">
    <th><span style="font-size:26px;font-weight:bold;">篩選項目:</span></th></br>    
    <a href="{{ route('animations.index') }}" >所有動畫</a></br>
    <a href="{{ route('animations.spring_season') }}">春季動畫</a>
    <a href="{{ route('animations.summer_season') }}">夏季動畫</a>
    <a href="{{ route('animations.fall_season') }}">秋季動畫</a>
    <a href="{{ route('animations.winter_season') }}">冬季動畫</a>
    <form action="{{ url('animations/type') }}" method='POST'>
        {!! Form::label('type','選取類別:') !!}
        {!! Form::select('type',$types, ['class'=>'form-control']) !!}
        <input class="btn btn-default" type="submit" value="查詢" />
        @csrf
    </form>
    @can('admin')
    <div style = "border:2px black dashed; padding:1px">
        <th>管理員工具:</th>
        <a href="{{ route('animations.create') }}">新增動畫</a>
    </div>
@endcan
</div></br>

<table class = "table table-hover" style = "background-color:#FFE8BF;border-radius:20px;border-bottom:1px #ccc solid">
    <tr style = "background-color:#FFDA96">
        <th style = "border-bottom:1px black solid;">編號</th>
        <th style = "border-bottom:1px black solid;">名稱</th>
        <th style = "border-bottom:1px black solid;">類型</th>
        <th style = "border-bottom:1px black solid;">原作</th>
        <th style = "border-bottom:1px black solid;">導演</th>
        <th style = "border-bottom:1px black solid;">集數</th>
        <th style = "border-bottom:1px black solid;">動畫製作</th>
        <th style = "border-bottom:1px black solid;">首次播出時間</th>
        <th style = "border-bottom:1px black solid;">操作1</th>
        @can('admin')
        <th style = "border-bottom:1px black solid;">操作2</th>
        <th style = "border-bottom:1px black solid;">操作3</th>
        @elsecan('manager')
        <th style = "border-bottom:1px black solid;">操作2</th>
        @endcan
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
            @can('admin')
                <td><a href="{{route('animations.edit',['id' =>$animation -> id]) }}">修改</a></td>
                <td>
                    <form action = "{{ url('/animations/delete', ['id' => $animation->id]) }}" method = "post">
                        <input class = "btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
            @elsecan('manager')
                <td><a href="{{route('animations.edit',['id' =>$animation -> id]) }}">修改</a></td>
            @endcan
        </tr>
        
    @endforeach
</table>
{{ $animations -> links() }}
@endsection