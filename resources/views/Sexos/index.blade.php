@extends("Layauts.layaut")
@section("title","Sexos")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("sexos/create")}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <a href="{{url("sexos/create")}}">nuevo</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Sexos</th>
                    <th colspan="2">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sexos as $sexo)
                    <tr>
                        <td>{{$sexo->id_sexo}}</td>
                        <td>{{$sexo->sexo}}</td>
                        <td>
                            <form action="{{route("sexos.destroy",$sexo->id_sexo)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
