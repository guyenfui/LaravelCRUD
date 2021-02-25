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
<td>{{$item -> email}}</td>
<td>{{$item -> phone}}</td>
<td>{{$item -> address}}</td>
<td>{{$item -> type}}</td>
<td>{{$item -> gender}}</td>
<td>{{$item -> updated_at}}</td>
<td>{{$item -> created_at}}</td>
</tr>

<br></br>

@endforeach

<div class="text-center"> <a href="{{url('addData')}}">Edit data</a>.</div>

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