<!DOCTYPE html>
<html lang="en">
<head>
    <title>News - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
{{--<img src="{{asset("img/img1.jpg")}}">--}}
<table style="border: 1px">
    <tr>
        <th>id</th>
        <th>title</th>
        <th>Disc</th>
        <th>content</th>
        <th>add_bu</th>
        <th>stutus</th>
    </tr>

    @foreach($all_news as $v)
        <tr>
            <th>{{$v->id}} </th>
            <th>{{$v->title}} </th>
            <th>{{$v->disc}} </th>
            <th>{{$v->content}} </th>
            <th>{{$v->add_by}} </th>
            <th>{{$v->stutus}} </th>
        </tr>

    @endforeach
</table>


<div>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>

        @endforeach
    </ul>

@endif;
</div>

<div>
<form method="post" action="{{route('add_news')}}">

    <input type="hidden" value=" {{csrf_token()}}" name="_token">
    <input type="text" name="title" placeholder="title">
    <input type="text" name="disc" placeholder="disc">
    <textarea  name="contents" cols="30" rows="10" placeholder="content"></textarea>
    <input type="text" name="add_by" placeholder="add_by">
    <input type="text" name="stutus" placeholder="stutus">
    <select name="stutus">
        <option value="active" >active</option>
        <option value="not_active">not_active</option>

    </select>
    <input type="submit" value="add new users">
</form>
</div>


@foreach($all_news as $v)

    <h1>{{$v->id}}|<a href="{{route("news",$v->id)}}">{{$v->title}}</a></h1>

    <h3>{{$v->disc}}</h3>

    <a href="{{route('delete_news',$v->id)}}">Delete</a>
    <br>

    <a href="{{route('soft_delete_news',$v->id)}}">soft delete</a>
        <hr>
@endforeach


{{--<p>{!! $all_news->render() !!}</p>--}}

</body>
</html>
