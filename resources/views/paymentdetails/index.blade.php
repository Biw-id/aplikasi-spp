@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
	<div class="d-flex justify-content-end mb-3"><a href="{{ route('paymentdetails.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>payment_link</th>
				<th>payment_status</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($paymentdetails as $paymentdetail)

				<tr>
					<td>{{ $paymentdetail->id }}</td>
					<td>{{ $paymentdetail->payment_link }}</td>
					<td>{{ $paymentdetail->payment_status }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('paymentdetails.show', [$paymentdetail->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('paymentdetails.edit', [$paymentdetail->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['paymentdetails.destroy', $paymentdetail->id]]) !!}
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
