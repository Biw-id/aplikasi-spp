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

	{{ Form::model($paymentdetail, array('route' => array('paymentdetails.update', $paymentdetail->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('payment_link', 'Payment_link', ['class'=>'form-label']) }}
			{{ Form::text('payment_link', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('payment_status', 'Payment_status', ['class'=>'form-label']) }}
			{{ Form::text('payment_status', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
    </div>
</div>
@stop
