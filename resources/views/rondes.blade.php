<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>  
        {{-- @foreach($merken as $a)
            <p>{{$a->Merk}}</p>
        @endforeach --}}

        <table>
            <tr>
                <th>Model</th>
                <th>Magazine</th>
                <th>rondentijd</th>
            </tr>
            @foreach($rondes as $r)
                <tr>
                    <td>{{$r->Model}}</td>
                    <td>{{$r->Magazine}}</td>
                    <td>{{$r->rondentijd}}</td>
                </tr>  
            @endforeach           
        </table> 
        
        <form method="post" action="">
            @csrf
            Merk <select name="merk" onchange="submit()">
                @foreach ($merken as $m)
                    <option value="{{$m->Merk}}">{{$m->Merk}}</option>
                @endforeach
            </select>
            Circuit <select name="circuit" onchange="submit()">
                <option value="Bedford">Bedford</option>
                <option value="Serres">Serres</option>
                <option value="Hockenheim">Hockenheim</option>
                <option value="Nurburgring">Nurburgring</option>
            </select>
        </form>
    </body>
</html>