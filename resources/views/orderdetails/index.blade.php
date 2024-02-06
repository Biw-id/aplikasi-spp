@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
	<div class="d-flex justify-content-end mb-3"><a href="{{ route('orderdetails.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>user</th>
				<th>produk</th>
				<th>link pembayaran</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($orderdetails as $orderdetail)

				<tr>
					<td>{{ $orderdetail->id }}</td>
					<td>{{ $orderdetail->user->name }}</td>
					<td>{{ $orderdetail->produk->name }}</td>
					<td>{{ $orderdetail->payment->payment_link }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('orderdetails.show', [$orderdetail->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('orderdetails.edit', [$orderdetail->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['orderdetails.destroy', $orderdetail->id]]) !!}
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
