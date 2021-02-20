<h1>Create your coin here</h1>

<form action="{{ route('coins.store')}}" method="POST">
  @csrf
  <label for="nombre">Nombre:</label>
  <input type="text" id="nombre" name="nombre"><br>
  <label for="nombreC">Nombre Corto:</label>
  <input type="text" id="nombreC" name="nombreC">
  <br><br>
  <input type="submit" value="Submit">
</form>

<meta name="csrf-token" content="{{ csrf_token() }}">