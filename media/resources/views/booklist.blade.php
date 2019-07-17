<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>書籍検索</title>

<body>
<h2>国会図書館蔵書検索結果</h2>
<p>検索キーワード：{{$title}}</p>

@if(!$items->isEmpty())
<table>
    <tr><th>本の名前</th><th>著者名</th><th>出版日</th></tr>
    @foreach($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->author}}</td>
            <td>{{$item->day}}</td>
        </tr>  
    @endforeach
{{ $items->appends(Request::only('title'))->links()}}
</table>
@else
   <p>該当する書籍は存在しません</p>
   <h2>国会図書館蔵書検索</h2>
   <form  method="GET" action="/booklist">
       <input type="text" name="title">
       <input type="submit" value="検索">
   </form>
@endif


    



</body>
</html>