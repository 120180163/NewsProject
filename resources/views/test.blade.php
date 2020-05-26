<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>

{{--{{$abc}}--}}
{{--@foreach(@arr as $k=>$v)--}}
{{--    @if($v == '123')--}}
{{--      <p>PassWord Not Valid</p>--}}
{{--    @else--}}
{{--       <h1>{{$k}} || {{$v}}</h1>--}}
{{--       <hr>--}}

{{--       @endif--}}
{{--@endforeach--}}
{{$arr['username']}}
<hr>
{{$arr['password']}}
<hr>

@foreach($arr['posts'] as $v )
    <h1>{{$v}}</h1>
    @endforeach
</body>
</html>
