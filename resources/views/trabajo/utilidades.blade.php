@extends('../layouts.frontend')


@section('content')
    <h1>Nosotros</h1>
    <p>
        <a href="javascript:void(0);" onclick="saludo();">haz clic </a>
    </p>
    <p>
        slug {{str_slug('hola ñandú lalá')}}
    </p>
    <p>
        route {{route('trabajo_utilidades')}}
    </p>
    <p>
        helper personalizado : {{Helpers::formatea_fecha('2018/04/16')}} || {{Helpers::validaRut('140054607')}}
    </p>

@endsection

@push('scripts')
    <script src="/example.js"></script>
@endpush