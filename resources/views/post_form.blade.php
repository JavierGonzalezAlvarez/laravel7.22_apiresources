<h1>Insertar datos Post</h1>

<div>
  <form method="POST" action="{{ action('TbCuotasController@store') }}">
    @csrf
    <input
      type="text"
      name="nombre"
      placeholder="Nombre"    
    /></br>
    <input
      type="text"
      name="usuario"
      placeholder="Usuario"
    /></br>
    <button type="submit">Post</button>
  </form>  
</div>