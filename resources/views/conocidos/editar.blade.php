<form action="{{route('conocidos.update', $conocido->id )}}" method="POST">
    @method('PUT')
    id = <input type="text" name="id" value="{{$conocido->id}}"><br>
    nombre = <input type="text" name="nombre" value="{{$conocido->nombre}}"><br>
    <input type="submit" value="Editar">
</form>