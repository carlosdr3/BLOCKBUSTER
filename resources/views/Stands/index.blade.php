@extends("Layauts.layaut")
@section("title","Stands")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("stands/create")}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <a href="{{url("stands/create")}}">nuevo</a>
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
                @foreach($stands as $stand)
                    <tr>
                        <td>{{$stand->id_stand}}</td>
                        <td>{{$stand->descripcion}}</td>
                        <td>
                            <form action="{{route("stands.destroy",$stand->id_stand)}}" method="post">
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
