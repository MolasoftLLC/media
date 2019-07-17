<!doctype html>
<html >

<table>
    <tr><th>本の名前</th><th>著者名</th><th>出版日</th></tr>
    @foreach($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->author}}</td>
            <td>{{$item->day}}</td>
        </tr>  
    @endforeach
{{ $items->links()}}
</table>

</html>