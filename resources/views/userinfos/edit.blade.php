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

	{{ Form::model($userinfo, array('route' => array('userinfos.update', $userinfo->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('user_id', 'User_id', ['class'=>'form-label']) }}
			{{ Form::text('user_id', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('nis', 'Nis', ['class'=>'form-label']) }}
			{{ Form::text('nis', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('nama', 'Nama', ['class'=>'form-label']) }}
			{{ Form::text('nama', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('kelas', 'Kelas', ['class'=>'form-label']) }}
			{{ Form::text('kelas', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('jurusan', 'Jurusan', ['class'=>'form-label']) }}
			{{ Form::text('jurusan', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('alamat', 'Alamat', ['class'=>'form-label']) }}
			{{ Form::text('alamat', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('no_hp', 'No_hp', ['class'=>'form-label']) }}
			{{ Form::text('no_hp', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
    </div>
</div>
@stop
