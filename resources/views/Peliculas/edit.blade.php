@extends("Layauts.layaut")
@section("title","Agregar pelicula")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("peliculas")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("peliculas")}}">regresar</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{route("peliculas.update",$pelicula->id_pelicula)}}" method="post">
                @csrf
                @method("PUT")

                <div class="form-group">
                    <label for="titulo">titulo</label>
                    <input type="text"  value="{{$pelicula->titulo}}"id="titulo" name="titulo" class="form-control"  placeholder="titulo">
                </div>
                <div class="form-group">
                    <label for="duracion">duracion</label>
                    <input type="text" value="{{$pelicula->duracion}}" id="duracion" name="duracion" class="form-control"  placeholder="duracion">
                </div>
                <div class="form-group">
                    <label for="id_genero">genero</label>
                    <select name="id_genero" id="id_genero">
                        @foreach($generos as $genero)
                            <option value="{{$genero->id_genero}}" {{$pelicula->id_genero==$genero->id_genero?"selected":""}}>{{$genero->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
