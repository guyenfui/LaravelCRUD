<html>
<body>
  <form action="submit" method="POST">
  @csrf
  <br><br>
  <input type="text" name="name" placeholder="Name User">
  <br><br>
  <input type="text" name="owner" placeholder="owner">
  <br><br>
  <input type="text" name="species" placeholder="species">
  <br><br>
  <button type="submit">Submit Data</button>
  </form>
  <div class="text-center"> <a href="{{url('showData')}}">Show data</a>.</div>
</body>
</html>