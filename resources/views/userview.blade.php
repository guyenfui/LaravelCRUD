<html>
<body>
  <form action="submit" method="POST">
  @csrf
  <br><br>
  <input type="text" name="name" placeholder="Name">
  <br><br>
  <input type="text" name="email" placeholder="email">
  <br><br>
  <input type="text" name="phone" placeholder="phone">
  <br><br>
  <input type="text" name="address" placeholder="address">
  <br><br>
  <input type="text" name="type" placeholder="type">
  <br><br>
  <input type="text" name="gender" placeholder="gender">
  <br><br>
  <input type="text" name="message" placeholder="message">
  <br><br>
  <button type="submit">Submit Data</button>
  </form>
  <div class="text-center"> <a href="{{url('showData')}}">Show data</a>.</div>
  
</body>
</html>