@extends('app')

@section('titel', '動畫資訊網站 - 列出所有動畫')

@section('am_theme', '')

@section('am_contents')

<div class="container">
    <h1 style="color: #007BFF;">您所選取的動畫</h1>
    <table class="table table-bordered mt-3">
        <tbody>
            <tr>
                <th style="font-size: 22px;">編號：</th>
                <td style="font-size: 22px;">{{ $animation->id }}</td>
            </tr>
            <tr>
                <th style="font-size: 22px;">名稱：</th>
                <td style="font-size: 22px;">{{ $animation->name }}</td>
            </tr>
            <tr>
                <th style="font-size: 22px;">類型：</th>
                <td style="font-size: 22px;">{{ $animation->type }}</td>
            </tr>
            <tr>
                <th style="font-size: 22px;">原作：</th>
                <td style="font-size: 22px;">{{ $animation->orign }}</td>
            </tr>
            <tr>
                <th style="font-size: 22px;">導演：</th>
                <td style="font-size: 22px;">{{ $animation->dir }}</td>
            </tr>
            <tr>
                <th style="font-size: 22px;">集數：</th>
                <td style="font-size: 22px;">{{ $animation->ep_num }}</td>
            </tr>
            <tr>
                <th style="font-size: 22px;">動畫製作：</th>
                <td style="font-size: 22px;">{{ $animation->company->name }}</td>
            </tr>
            <tr>
                <th style="font-size: 22px;">播出時間：</th>
                <td style="font-size: 22px;">{{ $animation->play_time }}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
