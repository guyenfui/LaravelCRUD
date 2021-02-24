<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard Admin</title>
  <body>

  <div class="text-center"> <a href="{{url('login')}}">Logout</a>.</div>
  <div class="text-center"> <a href="{{url('form')}}">Add infor mation</a>.</div>
  <h1>user List</h1>

<ul>
<span>ID</span>
<span>Name</span>
<span>EMAIL</span>
</ul>

@foreach($data as $item)
<ul><li>
<span>{{$item->id}}</span>
<span>{{$item->name}}</span>
<span>{{$item->email}}</span>

</li></ul>
@endforeach

<style>
span {
  color: red;
  display: inline-block;
  width: 100px;
  background-color: bisque;
  margin-bottom: 3px;
  margin-left: 3px;
  padding: 10px;
 }
 </style>
</body>
</html>
