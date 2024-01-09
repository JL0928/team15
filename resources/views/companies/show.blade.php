@extends('app')

@section('titel','動畫資訊 網站 - 列出製作公司')

@section('am_theme','')

@section('am_contents')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>動畫列表</title>
    <style>
        h1 {
            color: #007BFF; /* 修改顏色為藍色 */
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

        .btn-info, .btn-info:hover {
            color: #007BFF; /* 修改顏色為藍色 */
            border-color: #007BFF; /* 修改邊框顏色為藍色 */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>您所選取的公司</h1><br/>
    <table class="table table-bordered mt-3">
        <tbody>
            <tr>
                <th><span style="font-size:22px;">編號 </span></th>
                <td style="font-size: 22px;">{{$company->id}}</td>
            </tr>
            <tr>
                <th><span style="font-size:22px;">公司名稱 </span></th>
                <td style="font-size: 22px;">{{$company->name}}</td>
            </tr>
            <tr>
                <th><span style="font-size:22px;">創辦人 </span></th>
                <td style="font-size: 22px;">{{$company->founder}}</td>
            </tr>
            <tr>
                <th><span style="font-size:22px;">總部地址 </span></th>
                <td style="font-size: 22px;">{{$company->head}}</td>
            </tr>
            <tr>
                <th><span style="font-size:22px;">網址 </span></th>
                <td style="font-size: 22px;">{{$company->address}}</td>
            </tr>
        </tbody>
    </table>
</div>

    <div class="container">
        <h1>列出所有動畫</h1>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>編號</th>
                    <th>名稱</th>
                    <th>類型</th>
                    <th>原作</th>
                    <th>導演</th>
                    <th>集數</th>
                    <th>製作公司</th>
                    <th>播出時間</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animations as $animation)
                <tr>
                    <td>{{ $animation->id }}</td>
                    <td>{{ $animation->name }}</td>
                    <td>{{ $animation->type }}</td>
                    <td>{{ $animation->orign }}</td>
                    <td>{{ $animation->dir }}</td>
                    <td>{{ $animation->ep_num }}</td>
                    <td>{{ $animation->company->name }}</td>
                    <td>{{ $animation->play_time }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
