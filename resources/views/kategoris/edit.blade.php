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

	{{ Form::model($kategori, array('route' => array('kategoris.update', $kategori->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('kategori', 'Kategori', ['class'=>'form-label']) }}
			{{ Form::text('kategori', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('deskripsi', 'Deskripsi', ['class'=>'form-label']) }}
			{{ Form::textarea('deskripsi', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
    </div>
</div>
@stop
