@extends('../layouts.frontend')


@section('content')
    <h1>Nosotros</h1>
    <p>
    	<a href="javascript:void(0);" onclick="saludo();">haz clic </a>
    </p>
    <img src="{{ asset('public/images/sergito.jpg') }}" />
    <hr />
    

@endsection

@push('scripts')
    <script src="/example.js"></script>
@endpush