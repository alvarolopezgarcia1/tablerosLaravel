@extends('plantilla')
@section('cuerpo')
	<table class="table">
		<thead>
			<tr>
				<th>Texto</th>
				<th>Fecha</th>
				<th>Estado</th>		
						
			</tr>
		</thead>

		<tbody>
			@foreach($notas as $item)
			<tr>

				<td>{{ $item->texto }}</td>
				<td>@df($item)</td>
				@if ($item->completado==1)
				<td>Completado</td>
				@else 
				<td>No completado</td>
				@endif
				
			</tr>
			@endforeach
		</tbody>

	</table>
@stop

	