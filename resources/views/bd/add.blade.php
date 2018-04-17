@extends('../layouts.frontend')


@section('content')
    <ol class="breadcrumb">
      <li><a href="{{asset ('bd/listado')}}">BD</a></li>
      <li class="active">Agregar Mensaje</li>
    </ol>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>   
        @endforeach
            </ul>
        </div>
    @endif
    <h1>Agregar Mensaje</h1>
    <form method="post" action="{{asset ('bd/add_post')}}" name="form" enctype="multipart/form-data">
        {{ csrf_field() }} 
        <div class="form-group">
            <label for="mensaje">Contenido</label>
            <input type="text" name="mensaje" class="form-control" />
        </div>
        <div class="form-group">
            <label for="cualquiera">Usuario</label>
            <select name="user_id" class="form-control">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="mensaje">Imagen</label>
            <input type="file" name="image" class="form-control-file" />
        </div>
        <hr />
        <input type="submit" value="Enviar" class="btn btn-default" />
    </form>
@endsection

@push('scripts')
    <script src="/example.js"></script>
@endpush