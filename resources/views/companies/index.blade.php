<html>
    <head>

    </head>
    <body>
        <h1>列出製作公司</h1>
        @for($i=0; $i<count($Companies); $i++)
            {{$Companies[$i]['name'] }}<br/>
            {{$Companies[$i]['founder']}}<br/>
            {{$Companies[$i]['head']}}<br/>
            {{$Companies[$i]['address']}}<br/><br/>
        @endfor

    </body>
</html>