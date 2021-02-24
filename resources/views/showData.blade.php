<html>
<body>

<h1>User List</h1>
<ul><li>
<span>name</span>
<span>owner</span>
<span>species</span>
<span>sex</span>
<span>birth</span>
<span>death</span>
<span>updated_at</span>
<span>created_at</span>
<br></br>
</li></ul>

@foreach($data as $item)
<tr>
<td>{{$item -> name}}</td>
<td>{{$item -> owner}}</td>
<td>{{$item -> species}}</td>
<td>{{$item -> sex}}</td>
<td>{{$item -> birth}}</td>
<td>{{$item -> death}}</td>
<td>{{$item -> updated_at}}</td>
<td>{{$item -> created_at}}</td>
</tr>
<br></br>

@endforeach

</body>
</html>
{{ $data->links() }}



<style>
td {
  backround-color: antiquewhite;
  padding: 12px;
}

li {
  list-style: none;
  display:inline;
}
</style>