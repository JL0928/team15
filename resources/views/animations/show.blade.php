@extends('app')

@section('titel','動畫資訊 網站 - 列出所有動畫')

@section('am_theme','您所選取的動畫')

@section('am_contents')

       <td>您所選取的動畫</td><br/><br/>
       編號 : {{$animation->id }}<br/>
       名稱 : {{$animation->name }}<br/>
       類型 : {{$animation->type }}<br/>
       原作 : {{$animation->orign }}<br/>
       導演 : {{$animation->dir }}<br/>
       集數 : {{$animation->ep_num }}<br/>
       動畫製作 : {{$animation->cp_id }}<br/>
       播出時間 : {{$animation->play_time }}<br/>

@endsection