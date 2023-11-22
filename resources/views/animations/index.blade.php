<html>

<head>
    <title>列出所有動畫</title>
</head>

<body>
<h1>列出所有動畫</h1>

@for($i=0; $i<count($Animations); $i++)
    {{ $Animations[$i]['name']}} <br/>
    {{ $Animations[$i]['type']}} <br/>
    {{ $Animations[$i]['orign']}} <br/>
    {{ $Animations[$i]['dir']}} <br/><br/>
@endfor

</body>
</html>