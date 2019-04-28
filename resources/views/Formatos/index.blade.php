@extends("Layauts.layaut")
@section("title","Formatos")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("formatos/create")}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <a href="{{url("formatos/create")}}">nuevo</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripcion</th>
                    <th colspan="2">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($formatos as $formato)
                    <tr>
                        <td>{{$formato->id_formato}}</td>
                        <td>{{$formato->descripcion}}</td>
                        <td>
                            <form action="{{route("formatos.destroy",$formato->id_formato)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="" class="btn btn-outline-danger"> <i class="far fa-edit"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
