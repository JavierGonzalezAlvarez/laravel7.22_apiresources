<h1>Insertar datos Post</h1>
<p> 

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
   
</p>
</ul>