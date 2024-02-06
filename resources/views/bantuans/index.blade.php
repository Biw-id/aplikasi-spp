@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Bantuan</div>
    <div class="card-body">
	<div class="d-flex justify-content-end mb-3"><a href="{{ route('bantuans.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>nama</th>
				<th>email</th>
				<th>nohp</th>
				<th>pesan</th>
                <th>waktu</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($bantuans as $bantuan)

				<tr>
					<td>{{ $bantuan->id }}</td>
					<td>{{ $bantuan->nama }}</td>
					<td>{{ $bantuan->email }}</td>
					<td>{{ $bantuan->nohp }}</td>
					<td>{{ $bantuan->pesan }}</td>
                    <td>{{ $bantuan->updated_at }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('bantuans.show', [$bantuan->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('bantuans.edit', [$bantuan->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['bantuans.destroy', $bantuan->id]]) !!}
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
