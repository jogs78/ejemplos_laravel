<table border="1">
    <thead>
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>acciones</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($conocidos as $id => $nombre)
        <tr>
            <td>{{$id}}</td>
            <td>{{$nombre}}</td>
            <td>
                <a href="{{route('conocidos.show',$id)}}">MOSTRAR </a>
                <a href="{{route('conocidos.edit',$id)}}">EDITAR </a>
                <form action="{{route('conocidos.destroy',$id)}}" method="post">
                    @method('delete')
                    <input type="submit" value="ELIMINAR">
                </form>
                
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3">NO HAY REGISTROS</td>
        </tr>            
        @endforelse
    </tbody>

    <a href="{{route('conocidos.create')}}">AGREGAR UN CONOCIDO</a>

</table>