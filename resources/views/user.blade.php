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