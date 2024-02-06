@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Bantuan</div>
    <div class="card-body">
	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($orderdetail, array('route' => array('orderdetails.update', $orderdetail->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('user_id', 'User_id', ['class'=>'form-label']) }}
			{{ Form::text('user_id', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('product_id', 'Product_id', ['class'=>'form-label']) }}
			{{ Form::text('product_id', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('payment_id', 'Payment_id', ['class'=>'form-label']) }}
			{{ Form::text('payment_id', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
    </div>
</div>
@stop
