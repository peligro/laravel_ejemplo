@extends('../layouts.frontend')


@section('content')
@if(Session::has('mensaje'))
<div class="alert alert-{{ Session::get('css') }}">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('mensaje') }}
</div>
@endif
    <p>
                        <a href="{{asset('bd/add')}}" class="btn btn-success">Agregar</a>
                    </p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Usuario</th>
                                <th>Content</th>
                                <th>image</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach ($datos as $dato)
							    <tr>
							    	<td>{{$dato->id}}</td>
                                    <td>{{$dato->user->name}}</td>
							    	<td>{{$dato->content}}</td>
							    	<td><img src="{{$dato['image']}}" width="100" height="100" /></td>
							    	<td>{{Helpers::formatea_fecha($dato->created_at)}}</td>
							    	<td>
							    		
							    	</td>
							    </tr>
							@endforeach
                        </tbody>
                    </table>
                    <p>{{ $datos->links() }}</p>

@endsection

@push('scripts')
    <script src="/example.js"></script>
@endpush