<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Index</title>
</head>
<body>
  <h1>Hello/Index<h1>
  <div>{!! $msg !!}</div>

  <p>
    <a href="/hello/other">Download</a>
  </p>
  <form method="POST" action="/hello/upload" enctype="multipart/form-data"> 
     @csrf
     <ul>
        <li>NAME:<input type="text" name="name"></li>
        <li>MAIL:<input type="mail" name="mail"></li>
        <li>FILE:<input type="file" name="file"></li>
        <li><input type="submit" ></li>
     </ul>
  </form>
     <ul>
         @foreach ($data as $item)
             <li>{!!$item!!}</li>
         @endforeach
     </ul>
  {{-- <ol>
     @for($i = 0; $i < count($keys); $i++)
        <li>{{$keys[$i]}}:{{$values[$i]}}</li>
     @endfor
  </ol> --}}
</body>
</html>