@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
	<div class="d-flex justify-content-end mb-3"><a href="{{ route('userinfos.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>user_id</th>
				<th>nis</th>
				<th>nama</th>
				<th>kelas</th>
				<th>jurusan</th>
				<th>alamat</th>
				<th>no_hp</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($userinfos as $userinfo)

				<tr>
					<td>{{ $userinfo->id }}</td>
					<td>{{ $userinfo->user_id }}</td>
					<td>{{ $userinfo->nis }}</td>
					<td>{{ $userinfo->nama }}</td>
					<td>{{ $userinfo->kelas }}</td>
					<td>{{ $userinfo->jurusan }}</td>
					<td>{{ $userinfo->alamat }}</td>
					<td>{{ $userinfo->no_hp }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('userinfos.show', [$userinfo->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('userinfos.edit', [$userinfo->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['userinfos.destroy', $userinfo->id]]) !!}
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
