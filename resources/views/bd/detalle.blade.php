@extends('../layouts.frontend')


@section('content')
    <p>
        <h1>{{$datos}}</h1>
    </p>


@endsection

@push('scripts')
    <script src="/example.js"></script>
@endpush