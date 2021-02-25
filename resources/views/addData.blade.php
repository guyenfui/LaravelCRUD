<html>
  <body>
    <div>
    <form action="update" method="POST">
    @csrf
    <input type="text" name="name"> Write correct Name <br><br>
    <input type="text" name="address"> Address <br><br>
    <button type="submit">update</button>
    </form>
    </div>

    <div>
    <form action="delete" method="POST">
    @csrf
    <input type="text" name="name"> Write correct Name <br><br>
    
    <button type="submit">delete</button>
    </form>
    </div>
  </body>
</html>

