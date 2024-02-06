@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
	<div class="d-flex justify-content-end mb-3"><a href="{{ route('kategoris.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>kategori</th>
				<th>deskripsi</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($kategoris as $kategori)

				<tr>
					<td>{{ $kategori->id }}</td>
					<td>{{ $kategori->kategori }}</td>
					<td>{{ $kategori->deskripsi }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('kategoris.show', [$kategori->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('kategoris.edit', [$kategori->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['kategoris.destroy', $kategori->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>
    </div>
</div>
@stop
